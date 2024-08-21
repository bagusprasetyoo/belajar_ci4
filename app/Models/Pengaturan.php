<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengaturan extends Model
{
    public function getJudul($page)
    {
        $id = $page;

        $db = db_connect();
        // $sql = builder
        $sql = $db->table('PENGATURAN');
        $sql->select('VALUE');
        $sql->where('ID',  $id);
        $data =  $sql->get()->getRow();

        $judul = $data->VALUE;

        return $judul;
    }

    public function updateJudul($judul)
    {
        $db = db_connect();
        $sql = $db->table('PENGATURAN');
        $sql->set('VALUE', $judul);
        $sql->where('ID', 'JUDUL');
        $sql->update();
    }

    public function getJurusan()
    {
        $db = db_connect();
        // $sql = builder
        $sql = $db->table('JURUSAN');
        $sql->select('ID, NAMA');
        $data =  $sql->get()->getResult();

        return $data;
    }
}
