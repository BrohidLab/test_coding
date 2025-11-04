<?php namespace App\Controllers;

use App\Models\BukuTamuModels;
use Config\Services;

class BukuTamuController extends BaseController
{
    public function index()
    {
        return view('bukutamu/form');
    }

    public function simpan()
    {
        helper(['form']);
        $validation = Services::validation();

        $rules = [
            'nama'  => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'pesan' => 'required|min_length[5]'
        ];

        if (!$this->validate($rules)) {
            return view('bukutamu/form', ['validation' => $this->validator]);
        }

        $model = new BukuTamuModels();
        $model->save([
            'nama'   => $this->request->getPost('nama'),
            'email'  => $this->request->getPost('email'),
            'pesan'  => $this->request->getPost('pesan')
        ]);

        return redirect()->to('/')->with('success', 'Terima kasih! Pesan Anda telah disimpan.');
    }
}