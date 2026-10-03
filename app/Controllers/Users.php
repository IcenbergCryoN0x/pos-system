<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $users = $userModel->findAll();

        return view('users/index', [
            'users' => $users
        ]);
    }

    public function newUser()
    {
        return view('users/new');
    }

    public function create()
    {
        $rules = [
            'username'  => 'required|is_unique[users.username]',
            'full_name' => 'required|min_length[2]'
        ];

        if (! $this->validate($rules)) {
            return view('users/new', [
                'validation' => $this->validator
            ]);
        }

        $userModel = new UserModel();

        $userModel->insert([
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
            'avatar'    => null,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/users');
    }

    public function edit($id)
    {
        $userModel = new UserModel();

        $user = $userModel->find($id);

        if (! $user) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('users/edit', [
            'user' => $user
        ]);
    }

    public function update($id)
    {
        $userModel = new UserModel();

        $user = $userModel->find($id);

        if (! $user) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'username'  => 'required',
            'full_name' => 'required|min_length[2]'
        ];

        if (! $this->validate($rules)) {
            return view('users/edit', [
                'user' => $user,
                'validation' => $this->validator
            ]);
        }

        $username = $this->request->getPost('username');

        $duplicate = $userModel
            ->where('username', $username)
            ->where('id !=', $id)
            ->first();

        if ($duplicate) {
            return view('users/edit', [
                'user' => $user,
                'customError' => 'That username is already in use.'
            ]);
        }

        $data = [
            'username'  => $username,
            'full_name' => $this->request->getPost('full_name')
        ];

        $file = $this->request->getFile('avatar');

        if ($file && $file->getError() !== UPLOAD_ERR_NO_FILE) {
            $fileRules = [
                'avatar' => 'uploaded[avatar]|is_image[avatar]|mime_in[avatar,image/jpeg,image/png]|max_size[avatar,2048]'
            ];

            if (! $this->validate($fileRules)) {
                return view('users/edit', [
                    'user' => $user,
                    'validation' => $this->validator
                ]);
            }

            $newName = $file->getRandomName();
            $uploadPath = FCPATH . 'uploads/avatars/';

            $image = \Config\Services::image();

            $image->withFile($file->getTempName())
                  ->fit(200, 200, 'center')
                  ->save($uploadPath . $newName);

            $data['avatar'] = $newName;
        }

        $userModel->update($id, $data);

        return redirect()->to('/users');
    }
}