<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
  protected $komikModel;
  public function __construct()
  {
    $this->komikModel = new KomikModel();
  }
  public function index()
  {

    $data = [
      'title' => 'Daftar Komik',
      'komik' => $this->komikModel->getKomik()
    ];

    return view('komik/index', $data);
  }
  //--------------------------------------------------------------------

  public function detail($slug)
  {

    $data = [
      'title' => 'Detail Komik',
      'komik' => $this->komikModel->getKomik($slug)
    ];

    if (empty($data['komik'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data yang dicari adalah " ' . $slug . ' " tidak ditemukan dalam database kami.');
    }
    return view('komik/detail', $data);
  }

  //--------------------------------------------------------------------

  public function create()
  {

    $data = [
      'title' => 'Form Tambah Data',
      'validation' => \Config\Services::validation()
    ];

    return view('komik/create', $data);
  }

  //--------------------------------------------------------------------
  public function save()
  {

    if (!$this->validate([
      'judul' =>
      [
        'rules' => 'required|is_unique[komik.judul]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'penulis' =>
      [
        'rules' => 'required|is_unique[komik.penulis]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'penerbit' =>
      [
        'rules' => 'required|is_unique[komik.penerbit]',
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

      return redirect()->to('/komik/create')->withInput();
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
    $this->komikModel->save([
      'judul' => $this->request->getVar('judul'),
      'slug' => $slug,
      'penulis' => $this->request->getVar('penulis'),
      'penerbit' => $this->request->getVar('penerbit'),
      'sampul' => $namaSampul
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

    return redirect()->to('/komik');
  }

  //--------------------------------------------------------------------
  public function delete($id)
  {
    // cari gambar/sampul berdasarkan "id"
    $komik = $this->komikModel->find($id);

    // cek jika gambar/sampul default.jpg
    if ($komik['sampul'] != 'default.jpg') {
      // Hapus gambar/sampul
      unlink('img/' . $komik['sampul']);
    }

    $this->komikModel->delete($id);
    session()->setFlashdata('pesan', 'Data berhasil dihapus.');
    return redirect()->to('/komik');
  }

  //--------------------------------------------------------------------
  public function edit($slug)
  {
    $data = [
      'title' => 'Form Ubah Data',
      'validation' => \Config\Services::validation(),
      'komik' => $this->komikModel->getKomik($slug)
    ];

    return view('komik/edit', $data);
  }

  //--------------------------------------------------------------------
  public function update($id)
  {

    $komikLama = $this->komikModel->getKomik($this->request->getVar('slug'));
    if ($komikLama['judul'] == $this->request->getVar('judul')) {
      $rule_judul = 'required';
    } else {
      $rule_judul = 'required|is_unique[komik.judul]';
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

      return redirect()->to('/komik/edit/' . $this->request->getVar('slug'))->withInput();
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
    $this->komikModel->save([
      'id' => $id,
      'judul' => $this->request->getVar('judul'),
      'slug' => $slug,
      'penulis' => $this->request->getVar('penulis'),
      'penerbit' => $this->request->getVar('penerbit'),
      'sampul' => $namaSampul
    ]);

    session()->setFlashdata('pesan', 'Data berhasil diubah.');

    return redirect()->to('/komik');
  }
}