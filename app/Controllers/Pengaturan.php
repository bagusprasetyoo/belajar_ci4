<?php

namespace App\Controllers;

class Pengaturan extends BaseController
{
    public function __construct() {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET');
    }

    public function index()
    {
        $model =  new \App\Models\Pengaturan();

        if (isset($_POST['judul'])) {
            $judul = $_POST['judul'];
            $model->updateJudul($judul);
        }
        $judul = $model->getJudul("JUDUL");
        $data['header']['judul'] = $judul;
        $data['header']['motto'] = "Pasti Bisa Juara!";

        return view('template\header', $data) . view('pengaturan\index', $data) . view('template\footer');
    }

    public function getJudul() {
        $model = new \App\Models\Pengaturan();
        $data = $model->getJudul('JUDUL');
        $result = array(
            'status' => 'success',
            'data' => $data,
        );
        return json_encode($result);
    }

    public function getJurusan() {
        $model = new \App\Models\Pengaturan();
        $data = $model->getJurusan();
        $result = array(
            'status' => 'success',
            'data' => $data,
        );
        return json_encode($result);
    }
}
