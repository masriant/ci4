<?php

namespace App\Controllers;

use App\Models\ModelRegister;
// use \PhpOffice\PhpSpreadsheet\Spreadsheet;
// use \PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Import extends BaseController
{
  protected $ModelRegister;
  public function __construct()
  {
    $this->ModelRegister = new ModelRegister();
  }

  public function index()
  {
    $data = [
      'title' => 'Input Excel'
    ];
    return view('import/formimport', $data);
    // echo 'Hello Dashboard';
  }

  //--------------------------------------------------------------------
  public function view()
  {
    $db = \Config\Database::connect();
    // $jumlah = $db->table('register')->getWhere(['noreg'])->getResult();
    $counter = $db->table('SELECT * FROM register COUNT WHERE id = noreg');
    $data = [
      'title' => 'Hasil Eksport',
      'eksport' => $this->ModelRegister->getRegistrar(),
      'jumlah' => $counter

    ];
    return view('import/viewdata', $data);
    // echo 'Hello Dashboard';
  }

  //--------------------------------------------------------------------
  public function upload()
  {

    $validation = \Config\Services::validation();
    $valid = $this->validate(
      [
        'fileimport'  => [
          'label'     => 'Input File',
          'rules'     => 'uploaded[fileimport]|ext_in[fileimport,xls,xlsx]',
          'errors'    => [
            'uploaded'  => '{field} wajib diisi.',
            'ext_in'    => '{field} harus extensi : xls & xlsx'
          ]
        ]
      ]
    );

    if (!$valid) {

      $this->session->setFlashdata('pesan', $validation->getError('fileimport'));
      // session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
      return redirect()->to('/import/index');
    } else {
      $file_excel = $this->request->getFile('fileimport');
      $ext = $file_excel->getClientExtension();
      if ($ext == 'xls') {
        $render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
      } else {
        $render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
      }
      $spreadsheet = $render->load($file_excel);
      $data = $spreadsheet->getActiveSheet()->toArray();

      $pesan_error = [];
      $jumlaherror = 0;
      $jumlahsukses = 0;

      foreach ($data as $x => $row) {
        if ($x == 0) {
          continue;
        }
        $noreg = $row[1];
        $nama = $row[2];
        $tmplahir = $row[3];
        $tgllahir = $row[4];
        $jenkel = $row[5];
        $reglevelid = $row[6];
        $foto = $row[7];

        $db = \Config\Database::connect();

        $ceknoreg = $db->table('register')->getWhere(['noreg' => $noreg])->getResult();

        if (count($ceknoreg) > 0) {
          $pesan_error[]  = "Noreg : $noreg, sudah ada <br>";
          $jumlaherror++;
        } else {
          $datasimpan = [
            'noreg' => $noreg,
            'nama' => $nama,
            'tmplahir' => $tmplahir,
            'tgllahir' => $tgllahir,
            'jenkel' => $jenkel,
            // 'reglevelid' => $reglevelid,
            'reglevelid' => 1,
            'foto' => $foto
          ];
          // dd($datasimpan);
          $db->table('register')->insert($datasimpan);
          $jumlahsukses++;
        }
      }
      $this->session->setFlashdata('sukses', "$jumlaherror Data gagal disimpan. <br> $jumlahsukses Data berhasil disimpan.");
      // session()->setFlashdata('sukses', 'Data berhasil ditambahkan.');

      // foreach ($pesan_error as $error) {
      //   echo $error;
      // }


      return redirect()->to('/import/index');
    }
  }
  public function print()
  {
    // $data['register'] = $this->ModelRegister->tampil_data("register")->result();
    $data = [
      'title' => 'Print',
      'print' => $this->ModelRegister->findAll()
    ];
    // $this->load->view('print_mahasiswa', $data);
    echo view('import/printer', $data);
  }

  public function pdf()
  {
    // require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';
    // $pdf = new DOMPDF();
    // $this->load->library('dompdf_gen');
    // $data = [
    //   'title' => 'PDF',
    //   'pdf' => $this->ModelRegister->findAll()
    // ];
    // $data['pdf'] = $this->ModelRegister->tampil_data('register')->result();
    $data['pdf'] = $this->ModelRegister->getRegistrar();

    // $this->load->view('laporan_pdf', $data);
    // $this->load->view('import/laporan_pdf', $data);
    echo view('import/laporan_pdf', $data);

    // $paper_size = 'A4';
    // $orientation = 'landscape';
    // $html = $this->output->get_output();
    // $this->dompdf->set_paper($paper_size, $orientation);

    // $this->dompdf->load_html($html);
    // $this->dompdf->render();
    // $this->dompdf->stream("laporan lakip.pdf", array('Attachment' => 0));
  }

  public function excel()
  {
    // parent::setUp();
    // $this->object = new Spreadsheet();
    // $sheet = $this->object->getActiveSheet();

    // $data['register'] = $this->m_mahasiswa->tampil_data('tb_mahasiswa')->result();
    $eksport = $this->ModelRegister->findAll();
    // $data = [
    //   'mahasiswa' => $eksport
    // ];


    // require(APPPATH . 'phpoffice/phpexcel/Classes/PHPExcel.php');
    // require(APPPATH . 'phpoffice/phpexcel/Classes/PHPExcel/Writer/Excel2007.php');
    // require(APPPATH . 'phpoffice/phpexcel/Classes/PHPExcel/Autoloader.php');
    // require(APPPATH . 'phpoffice/phpexcel/Classes/PHPExcel/Shared/String.php');
    // app/phpoffice/phpexcel/Classes/PHPExcel/Shared/String.php
    // app/phpoffice/phpexcel/Classes/PHPExcel/Autoloader.php
    // vendor/phpoffice/phpexcel/Classes/PHPExcel.php
    // vendor/phpoffice/phpexcel/Classes/PHPExcel/Writer/Excel2007.php
    // app/phpoffice/phpexcel/Classes/PHPExcel.php
    // app/phpoffice/phpexcel/Classes/PHPExcel/Writer/Excel2007.php

    // $object = new PHPExcel();
    $object = new Spreadsheet();

    $object->getProperties()->setCreator("Lakip Jakarta");
    $object->getProperties()->setLastModifiedBy("Masrianto");
    $object->getProperties()->setTitle("List Register Online");

    // $object = $this->object->getActiveSheet();
    $object->setActiveSheetIndex(0);

    $object->getActiveSheet()->setCellValue('A1', 'NO');
    $object->getActiveSheet()->setCellValue('B1', 'REG');
    $object->getActiveSheet()->setCellValue('C1', 'NAMA');
    $object->getActiveSheet()->setCellValue('D1', 'TEMPAT');
    $object->getActiveSheet()->setCellValue('E1', 'TGL LAHIR');
    $object->getActiveSheet()->setCellValue('F1', 'JENIS KELAMIN');
    $object->getActiveSheet()->setCellValue('G1', 'LEVEL');
    $object->getActiveSheet()->setCellValue('H1', 'FOTO');

    $baris = 2;
    $no = 1;

    // foreach ($data['mahasiswa'] as $mhs) {
    foreach ($eksport as $mhs) {
      $object->getActiveSheet()->setCellValue('A2', $baris, $no++);
      $object->getActiveSheet()->setCellValue('B2', $baris, $mhs->noreg);
      $object->getActiveSheet()->setCellValue('C2', $baris, $mhs->nama);
      $object->getActiveSheet()->setCellValue('D2', $baris, $mhs->tmplahir);
      $object->getActiveSheet()->setCellValue('E2', $baris, $mhs->tgllahir);
      $object->getActiveSheet()->setCellValue('F2', $baris, $mhs->jenkel);
      $object->getActiveSheet()->setCellValue('G2', $baris, $mhs->reglevelid);
      $object->getActiveSheet()->setCellValue('H2', $baris, $mhs->foto);

      $baris++;
    }
    // $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx();
    $filename = "Data Pendaftaran" . '.xlsx';
    $object->getActiveSheet()->setTitle("Data Peserta Online");

    header('Content-Type: application/vnd.openxmlformat-officedocument.spreadsheetml.sheet');
    header('content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');



    $writer->PHPExcel_IOFactory::createwriter($object, 'Excel2007');
    $writer->save('php://output');

    exit;
  }
}