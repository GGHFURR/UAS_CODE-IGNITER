<?php

namespace App\Controllers;

class kontakkami extends BaseController
{
    protected $kontakkamiModel;

    public function __construct()
    {
        $this->kontakkamiModel = new \App\Models\kontakkamiModel();
    }

    public function admin()
    {
        $kontakkami = $this->kontakkamiModel->findAll();

        $data = [
            'kontakkami' => $kontakkami
        ];

        return view('kontakkami/admin', $data);
    }

    public function contact()
    {
        return view('kontakkami/contact');
    }

    public function save()
    {
        $this->kontakkamiModel->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'subjek' => $this->request->getVar('subjek'),
            'pesan' => $this->request->getVar('pesan')
        ]);

        session()->setFlashdata('message', 'Pesan anda berhasil di simpan');

        return redirect()->to('/kontakkami/admin');
    }
}
