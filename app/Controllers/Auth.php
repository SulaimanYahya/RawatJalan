<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\m_Auth;

class Auth extends BaseController
{
    protected $m_Auth;
    public function __construct()
    {
        $this->m_Auth = new m_Auth();
    }

    public function index()
    {
        $data = [
            "title" => 'Admin Panel',
            "validation" => \Config\Services::validation() //Mengambil Pesan Kesalahan
        ];

        return view('v_Test', $data);
    }

    public function login()
    {
        if (!$this->validate([
            'username'        => [
                'rules' => 'required',
                'errors' => [
                    'required'  => 'Field <b>Username</b> tidak bisa kosong'
                ],
            ],
            'password'        => [
                'rules' => 'required',
                'errors' => [
                    'required'  => 'Field <b>Password</b> tidak bisa kosong'
                ],
            ]
        ])) {
            $validation = \Config\Services::validation(); //Mengambil Pesan Kesalahan
            return redirect()->to('/')->withInput()->with('validation', $validation);
        }
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $auth = $this->m_Auth->getAuth();

        if ($username == $auth['username']) {
            if ($auth['is_active'] == 1) {
                if ($password == $auth['password']) {
                    $data = [
                        'id'         => $auth['id'],
                        'name'       => $auth['name'],
                        'is_active'  => $auth['is_active']
                    ];
                    session()->set($data);
                    $this->m_Auth->save($data);
                    return redirect()->to('Dashboard');
                } else {
                    //!Password Salah
                    session()->setFlashdata('msg', "Password Salah..!!");
                    return redirect()->to('/');
                }
            } else {
                //! Username Tidak Aktif
                session()->setFlashdata('msg', "Username <b>'$username'</b> Tidak Aktif..!!");
                return redirect()->to('/');
            }
        } else {
            //! Username Tidak Ditemukan
            session()->setFlashdata('msg', "Username <b>'$username'</b> Tidak Ditemukan..!!");
            return redirect()->to('/');
        }
    }
}
