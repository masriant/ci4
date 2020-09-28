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
    // tidak menggunakan ini karena sudah diubah method di modelnya = findAll
    // $komik = $this->komikModel->findAll();

    $data = [
      'title' => 'Daftar Komik',
      'komik' => $this->komikModel->getKomik()
    ];

    return view('komik/index', $data);
  }
  //--------------------------------------------------------------------

  public function detail($slug)
  {
    // kalau yang ini menggunakan parameter $slug;
    // $komik = $this->komikModel->where(['slug' => $slug])->first();
    // dd($komik);

    // kalau yang ini dipindahin ke $data
    // $komik = $this->komikModel->getKomik($slug);

    $data = [
      'title' => 'Detail Komik',
      'komik' => $this->komikModel->getKomik($slug)
    ];
    // Jika komik tidak ada di tabel
    if (empty($data['komik'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data yang dicari adalah " ' . $slug . ' " tidak ditemukan dalam database kami.');
    }
    return view('komik/detail', $data);
  }

  //--------------------------------------------------------------------

  public function create()
  {
    // session();
    $data = [
      'title' => 'Form Tambah Data',
      'validation' => \Config\Services::validation()
    ];

    return view('komik/create', $data);
  }

  //--------------------------------------------------------------------
  public function save()
  {
    // Validasi Input
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
        'rules' => 'required|is_unique[komik.judul]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'penerbit' =>
      [
        'rules' => 'required|is_unique[komik.judul]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'sampul' =>
      [
        'rules' => 'required|is_unique[komik.judul]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ]

    ])) {
      $validation = \Config\Services::validation();
      // dd($validation);
      return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
    }
    // dd($this->request->getVar());
    $slug = url_title($this->request->getVar('judul'), '-', true);
    $this->komikModel->save([
      'judul' => $this->request->getVar('judul'),
      'slug' => $slug,
      'penulis' => $this->request->getVar('penulis'),
      'penerbit' => $this->request->getVar('penerbit'),
      'sampul' => $this->request->getVar('sampul')
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

    return redirect()->to('/komik');
  }

  //--------------------------------------------------------------------
  public function delete($id)
  {
    $this->komikModel->delete($id);
    session()->setFlashdata('pesan', 'Data berhasil dihapus.');
    return redirect()->to('/komik');
  }
}