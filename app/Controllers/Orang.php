<?php

namespace App\Controllers;

use App\Models\OrangModel;

class Orang extends BaseController
{
  protected $orangModel;
  public function __construct()
  {
    $this->orangModel = new OrangModel();
  }
  public function index()
  {

    $data = [
      'title' => 'Daftar Orang',
      // 'orang' => $this->orangModel->getOrang()
      // 'orang' => $this->orangModel->findAll()
      'orang'    => $this->orangModel->paginate(6),
      'pager'    => $this->orangModel->pager
    ];

    return view('orang/index', $data);
  }
  //--------------------------------------------------------------------

  public function detail($slug)
  {

    $data = [
      'title' => 'Detail Orang',
      'orang' => $this->orangModel->getOrang($slug)
    ];

    if (empty($data['orang'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data yang dicari adalah " ' . $slug . ' " tidak ditemukan dalam database kami.');
    }
    return view('orang/detail', $data);
  }

  //--------------------------------------------------------------------

  public function create()
  {

    $data = [
      'title' => 'Form Tambah Data',
      'validation' => \Config\Services::validation()
    ];

    return view('orang/create', $data);
  }

  //--------------------------------------------------------------------
  public function save()
  {

    if (!$this->validate([
      'nama' =>
      [
        'rules' => 'required|is_unique[orang.nama]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'alamat' =>
      [
        // 'rules' => 'required|is_unique[orang.alamat]',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'sampul' =>
      [
        'rules' => 'max_size[sampul,5024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'ukuran gambar {field} terlalu besar.',
          'is_image' => 'photo {field} yang anda pilih bukan gambar.',
          'mime_in' => 'photo {field} disarankan hanya jpg,jpeg,png.',
        ]
      ]

    ])) {

      return redirect()->to('/orang/create')->withInput();
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


    $slug = url_title($this->request->getVar('nama'), '-', true);
    $this->orangModel->save([
      'nama' => $this->request->getVar('nama'),
      'slug' => $slug,
      'alamat' => $this->request->getVar('alamat'),
      'sampul' => $namaSampul
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

    return redirect()->to('/orang');
  }

  //--------------------------------------------------------------------
  public function delete($id)
  {
    // cari gambar/sampul berdasarkan "id"
    $orang = $this->orangModel->find($id);

    // cek jika gambar/sampul default.jpg
    if ($orang['sampul'] != 'default.jpg') {
      // Hapus gambar/sampul
      unlink('img/' . $orang['sampul']);
    }

    $this->orangModel->delete($id);
    session()->setFlashdata('pesan', 'Data berhasil dihapus.');
    return redirect()->to('/orang');
  }

  //--------------------------------------------------------------------
  public function edit($slug)
  {
    $data = [
      'title' => 'Form Ubah Data',
      'validation' => \Config\Services::validation(),
      'orang' => $this->orangModel->getOrang($slug)
    ];

    return view('orang/edit', $data);
  }

  //--------------------------------------------------------------------
  public function update($id)
  {

    $orangLama = $this->orangModel->getOrang($this->request->getVar('slug'));
    if ($orangLama['nama'] == $this->request->getVar('nama')) {
      $rule_nama = 'required';
    } else {
      $rule_nama = 'required|is_unique[orang.nama]';
    }

    if (!$this->validate([
      'nama' =>
      [
        'rules' => $rule_nama,
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'alamat' =>
      [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.'
        ]
      ],
      'sampul' =>
      [
        'rules' => 'max_size[sampul,5024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'ukuran gambar {field} terlalu besar.',
          'is_image' => 'photo {field} yang anda pilih bukan gambar.',
          'mime_in' => 'photo {field} disarankan hanya jpg,jpeg,png.',
        ]
      ]

    ])) {

      return redirect()->to('/orang/edit/' . $this->request->getVar('slug'))->withInput();
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

    $slug = url_title($this->request->getVar('nama'), '-', true);
    $this->orangModel->save([
      'id' => $id,
      'nama' => $this->request->getVar('nama'),
      'slug' => $slug,
      'alamat' => $this->request->getVar('alamat'),
      'sampul' => $namaSampul
    ]);

    session()->setFlashdata('pesan', 'Data berhasil diubah.');

    return redirect()->to('/orang');
  }
}