<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Database;

class FormController extends BaseController
{
    public function index()
    {
        return view('form_mahasiswa');
    }

    public function submit()
    {
        $rules = [
            'nama'              => 'required|string|max_length[255]',
            'nim'               => 'required|string|max_length[20]',
            'kelas'             => 'required|string',
            'matakuliah'        => 'required|string',
            'dosen_pengampu'    => 'required|string',
            'asisten_praktikum' => 'required|string',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $db = Database::connect();
        $builder = $db->table('mahasiswa'); 

        $builder->insert([
            'nama'              => $this->request->getPost('nama'),
            'nim'               => $this->request->getPost('nim'),
            'kelas'             => $this->request->getPost('kelas'),
            'matakuliah'        => $this->request->getPost('matakuliah'),
            'dosen_pengampu'    => $this->request->getPost('dosen_pengampu'),
            'asisten_praktikum' => $this->request->getPost('asisten_praktikum'),
        ]);

        return redirect()->to('/form')->with('success', 'Data berhasil disimpan ke database!');
    }

    public function data()
    {
        $db = Database::connect();
        $builder = $db->table('mahasiswa');

        $query = $builder->get();
        $data['list_data_mahasiswa'] = $query->getResult();

        return view('view_data', $data);
    }
}