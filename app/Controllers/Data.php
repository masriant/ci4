<?php

namespace App\Controllers;

use App\Models\LakipModel;

class Data extends BaseController
{
  protected $lakipModel;
  public function __construct()
  {
    $this->lakipModel = new LakipModel();
  }
  public function index()
  {
    $data = [
      'title' => 'data',
      'lakip' => $this->lakipModel->getLakip()
    ];
    return view('data/index', $data);
    // echo 'Hello data';
  }

  //--------------------------------------------------------------------
  public function detail($slug)
  {

    $data = [
      'title' => 'Detail Tamu',
      'lakip' => $this->lakipModel->getLakip($slug)
    ];

    if (empty($data['lakip'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data yang dicari adalah " ' . $slug . ' " tidak ditemukan dalam database kami.');
    }
    return view('data/detail', $data);
  }

  //--------------------------------------------------------------------

  public function create()
  {

    $data = [
      'title' => 'Form Tambah Data',
      'validation' => \Config\Services::validation()
    ];

    return view('data/create', $data);
  }

  //--------------------------------------------------------------------
  public function save()
  {

    if (!$this->validate([
      'judul' =>
      [
        'rules' => 'required|is_unique[lakip.judul]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'description' =>
      [
        'rules' => 'required|is_unique[lakip.description]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'penulis' =>
      [
        'rules' => 'required|is_unique[lakip.penulis]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'penerbit' =>
      [
        'rules' => 'required|is_unique[lakip.penerbit]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'sampul' =>
      [
        'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'ukuran gambar {field} terlalu besar.',
          'is_image' => 'photo {field} yang anda pilih bukan gambar.',
          'mime_in' => 'photo {field} disarankan hanya jpg,jpeg,png.',
        ]
      ]

    ])) {

      return redirect()->to('/data/create')->withInput();
    }

    // ambil gambar
    $fileSampul = $this->request->getFile('sampul');
    // apakah tidak ada gambar yang diupload
    if ($fileSampul->getError() == 4) {
      $namaSampul = 'default.jpg';
    } else {
      // generate nama sampul random
      $namaSampul = $fileSampul->getRandomName();
      // pindahkan file ke folder img
      $fileSampul->move('img', $namaSampul);
    }


    $slug = url_title($this->request->getVar('judul'), '-', true);
    $this->lakipModel->save([
      'judul' => $this->request->getVar('judul'),
      'slug' => $slug,
      'description' => $this->request->getVar('description'),
      'penulis' => $this->request->getVar('penulis'),
      'penerbit' => $this->request->getVar('penerbit'),
      'sampul' => $namaSampul
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

    return redirect()->to('/data');
  }

  //--------------------------------------------------------------------
  public function delete($id)
  {
    // cari gambar/sampul berdasarkan "id"
    $lakip = $this->lakipModel->find($id);

    // cek jika gambar/sampul default.jpg
    if ($lakip['sampul'] != 'default.jpg') {
      // Hapus gambar/sampul
      unlink('img/' . $lakip['sampul']);
    }

    $this->lakipModel->delete($id);
    session()->setFlashdata('pesan', 'Data berhasil dihapus.');
    return redirect()->to('/data');
  }

  //--------------------------------------------------------------------
  public function edit($slug)
  {
    $data = [
      'title' => 'Form Ubah Data',
      'validation' => \Config\Services::validation(),
      'lakip' => $this->lakipModel->getLakip($slug)
    ];

    return view('data/edit', $data);
  }

  //--------------------------------------------------------------------
  public function update($id)
  {

    $lakipLama = $this->lakipModel->getLakip($this->request->getVar('slug'));
    if ($lakipLama['judul'] == $this->request->getVar('judul')) {
      $rule_judul = 'required';
    } else {
      $rule_judul = 'required|is_unique[lakip.judul]';
    }

    if (!$this->validate([
      'judul' =>
      [
        'rules' => $rule_judul,
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'description' =>
      [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.'
        ]
      ],
      'penulis' =>
      [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.'
        ]
      ],
      'penerbit' =>
      [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.'
        ]
      ],
      'sampul' =>
      [
        'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'ukuran gambar {field} terlalu besar.',
          'is_image' => 'photo {field} yang anda pilih bukan gambar.',
          'mime_in' => 'photo {field} disarankan hanya jpg,jpeg,png.',
        ]
      ]

    ])) {

      return redirect()->to('/data/edit/' . $this->request->getVar('slug'))->withInput();
    }

    $fileSampul = $this->request->getFile('sampul');

    // cek gambar/sampul lama/baru
    if ($fileSampul->getError() == 4) {
      $namaSampul = $this->request->getVar('sampulLama');
    } else {
      // generate nama file random
      $namaSampul = $fileSampul->getRandomName();
      // pindahkan gambar/sampul baru
      $fileSampul->move('img', $namaSampul);
      // hapus gambar/sampul lama
      unlink('img/' . $this->request->getVar('sampulLama'));
    }

    $slug = url_title($this->request->getVar('judul'), '-', true);
    $this->lakipModel->save([
      'id' => $id,
      'judul' => $this->request->getVar('judul'),
      'slug' => $slug,
      'description' => $this->request->getVar('description'),
      'penulis' => $this->request->getVar('penulis'),
      'penerbit' => $this->request->getVar('penerbit'),
      'sampul' => $namaSampul
    ]);

    session()->setFlashdata('pesan', 'Data berhasil diubah.');

    return redirect()->to('/data');
  }

  //--------------------------------------------------------------------

}
