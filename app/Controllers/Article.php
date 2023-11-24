<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ArticleModel;

class Article extends ResourceController
{
    use ResponseTrait;
    // all users
    public function index()
    {
        $model = new ArticleModel();
        $data['article'] = $model->orderBy('id', 'DESC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new ArticleModel();

        $path  = 'assets/uploads/img/';
        $image = $this->request->getFile('image');
        $name = $image->getRandomName();
        if ($image->move($path, $name)) {
            $image = base_url($path . $name);
        }
        $data = [
            'title' => $this->request->getVar('title'),
            'content'  => $this->request->getVar('content'),
            'image' => $image,
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data article berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
    // single user
    public function show($id = null)
    {
        $model = new ArticleModel();
        $data = $model->where('id', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($id = null)
    {
        $model = new ArticleModel();
        $path  = 'assets/uploads/img/';
        $image = $this->request->getFile('image');
        $data = [
            'title' => $this->request->getVar('title'),
            'content'  => $this->request->getVar('content'),
        ];
        if ($image->isValid()) {
            $name = $image->getRandomName();
            if ($image->move($path, $name)) {
                $path = base_url($path . $name);
                $data['image'] = $path;
            }
        }
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data article berhasil diubah.'
            ]
        ];
        return $this->respond($response);
    }
    // delete
    public function delete($id = null)
    {
        $model = new ArticleModel();
        $data = $model->where('id', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data article berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}
