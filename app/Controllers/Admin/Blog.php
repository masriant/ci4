<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\BlogModel;

class Blog extends BaseController
{
  protected $blogModel;
  public function __construct()
  {
    $this->blogModel = new BlogModel();
    // helper('mr');
    // $this->session = service('session');
    // $this->auth = service('authentication');
  }
  public function index()
  {
    // jika belum login, user tidak memiliki akses
    // if (!$this->auth->check()) {
    //   $redirectURL = session('redirect_url') ?? '/login';
    //   unset($_SESSION['redirect_url']);

    //   return redirect()->to($redirectURL);
    // }

    $currentPage = $this->request->getVar('page_orang') ? $this->request->getVar('page_blog') : 1;

    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $blog = $this->blogModel->search($keyword);
    } else {
      $blog = $this->blogModel;
    }

    $data = [
      'title' => 'Daftar Post',
      'content'   => 'blog/index'
      // 'blog' => $this->blogModel->getBlog()
      //// 'blog' => $this->blogModel->findAll()

      'blog'       => $blog->paginate(6, 'blog'),
      'pager'       => $this->blogModel->pager,
      'currentPage' => $currentPage
    ];

    // return view('blog/index', $data);
    echo view('layout/content_wrapper_admin', $data);
  }
  //--------------------------------------------------------------------

  public function detail($slug)
  {

    $data = [
      'title' => 'Detail Post',
      'blog' => $this->blogModel->getBlog($slug)
    ];

    if (empty($data['blog'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data yang dicari adalah " ' . $slug . ' " tidak ditemukan dalam database kami.');
    }
    return view('blog/detail', $data);
  }

  //--------------------------------------------------------------------

  public function create()
  {

    $data = [
      'title' => 'Tambah Artikel',
      'validation' => \Config\Services::validation()
    ];

    return view('blog/create', $data);
  }

  //--------------------------------------------------------------------
  public function save()
  {

    if (!$this->validate([
      'blog_title' =>
      [
        'rules' => 'required|is_unique[blog.blog_title]',
        'errors' => [
          'required' => 'judul harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'blog_description' =>
      [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
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

      return redirect()->to('/blog/create')->withInput();
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

    $slug = url_title($this->request->getVar('blog_title'), '-', true);
    $this->blogModel->save([
      'blog_title' => $this->request->getVar('blog_title'),
      'slug' => $slug,
      'blog_description' => $this->request->getVar('blog_description'),
      'sampul' => $namaSampul
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

    return redirect()->to('/blog');
  }

  //--------------------------------------------------------------------
  public function delete($id)
  {
    // cari gambar/sampul berdasarkan "id"
    $blog = $this->blogModel->find($id);

    // cek jika gambar/sampul default.jpg
    if ($blog['sampul'] != 'default.jpg') {
      // Hapus gambar/sampul
      unlink('img/' . $blog['sampul']);
    }

    $this->blogModel->delete($id);
    session()->setFlashdata('pesan', 'Data berhasil dihapus.');
    return redirect()->to('/blog');
  }

  //--------------------------------------------------------------------
  public function edit($slug)
  {
    $data = [
      'title' => 'Form Ubah Data',
      'validation' => \Config\Services::validation(),
      'blog' => $this->blogModel->getBlog($slug)
    ];

    return view('blog/edit', $data);
  }

  //--------------------------------------------------------------------
  public function update($id)
  {

    $blogLama = $this->blogModel->getBlog($this->request->getVar('slug'));
    if ($blogLama['blog_title'] == $this->request->getVar('blog_title')) {
      $rule_blog_title = 'required';
    } else {
      $rule_blog_title = 'required|is_unique[blog.blog_title]';
    }

    if (!$this->validate([
      'blog_title' =>
      [
        'rules' => $rule_blog_title,
        'errors' => [
          'required' => 'judul harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'blog_description' =>
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

      return redirect()->to('/blog/edit/' . $this->request->getVar('slug'))->withInput();
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

    $slug = url_title($this->request->getVar('blog_title'), '-', true);
    $this->blogModel->save([
      'id' => $id,
      'blog_title' => $this->request->getVar('blog_title'),
      'slug' => $slug,
      'blog_description' => $this->request->getVar('blog_description'),
      'sampul' => $namaSampul
    ]);

    session()->setFlashdata('pesan', 'Data berhasil diubah.');

    return redirect()->to('/blog');
  }
}