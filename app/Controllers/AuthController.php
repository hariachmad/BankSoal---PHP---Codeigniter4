<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class AuthController extends BaseController
{
    public function index()
    {
        //
    }

    public function viewRegister()
    {
        return view("auth/register");
    }

    public function register()
    {
        $authModel = new AuthModel();
        $register = $this->request->getPost("register");
        if ($register) {
            $email = $this->request->getPost("email");
            $fullname = $this->request->getPost("fullname");
            $username = $this->request->getPost("username");
            $password = $this->request->getPost("password");
            $pass_confirm = $this->request->getPost("pass_confirm");

            if ($fullname == '') {
                session()->setFlashdata('errors.fullname', "Silahkan masukan kembali Fullname");
                return redirect()->to("register");
            }

            if ($email == '') {
                session()->setFlashdata('errors.email', "Silahkan masukan email");
                return redirect()->to("register");
            }



            if ($username == '') {
                session()->setFlashdata('errors.username', "Silahkan masukan username");
                return redirect()->to("register");
            }

            if ($password == '') {
                session()->setFlashdata('errors.password', "Silahkan masukan username");
                return redirect()->to("register");
            }



            if ($pass_confirm == '') {
                session()->setFlashdata('errors.pass_confirm', "Silahkan masukan kembali Password");
                return redirect()->to("register");
            }

            if ($authModel->isEmailExists($email)) {
                session()->setFlashdata('errors.email', "Email Sudah Terdaftar Sebelumnya");
                session()->setFlashdata('errors', "Email Sudah Terdaftar Sebelumnya");
                return redirect()->to("register");
            }

            if ($authModel->isUsernameExists($username)) {
                session()->setFlashdata('errors.username', "Username Sudah Terdaftar Sebelumnya");
                session()->setFlashdata('errors', "Username Sudah Terdaftar Sebelumnya");
                return redirect()->to("register");
            }

            $data = [
                'email' => $email,
                'username' => $username,
                'fullname' => $fullname,
                'password' => $password,
            ];

            if ($authModel->registerUser($data)) {
                session()->setFlashdata('success', "Registrasi berhasil! Silakan login.");
                return redirect()->to('login');
            } else {
                session()->setFlashdata('errors', "Gagal melakukan registrasi");
                return redirect()->to('register');
            }


        }
        return view("auth/register");
    }

    public function viewLogin()
    {
        return view("auth/login");
    }

    public function login()
    {
        $authModel = new AuthModel();
        $login = $this->request->getPost("login");
        if ($login) {
            $username = $this->request->getPost("username");
            $password = $this->request->getPost("password");
            if ($username == '') {
                session()->setFlashdata('errors.login', "Silahkan masukan username");
                return redirect()->to("login");
            }

            if ($password == '') {
                session()->setFlashdata('errors.password', "Silahkan masukan username");
                return redirect()->to("login");
            }

            if ($authModel->verifyPassword($username, $password)) {
                $data = $authModel->getFullnameByUsername($username);
                session()->set(
                    [
                        "fullname" => $data["fullname"]
                    ]
                );
                return redirect()->to('bankSoal');
            }
        }
        return view("auth/login");
    }
}
