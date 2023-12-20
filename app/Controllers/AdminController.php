<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DiseaseModel;
use App\Models\RuleModel;
use App\Models\SymptomsModel;

class AdminController extends BaseController
{
    public $userModel, $diseaseModel, $symptomsModel, $ruleModel;
    public function __construct()
    {
        $this->userModel = new \Myth\Auth\Models\UserModel();
        $this->diseaseModel = new DiseaseModel();
        $this->symptomsModel = new SymptomsModel();
        $this->ruleModel = new RuleModel();
    }
    public function index()
    {
        $data = [
            'users' => $this->userModel->getUser(),
            'rule' => $this->ruleModel->getRule(),
            'disease' => $this->diseaseModel->getDisease(),
        ];
        return view('admin/index', $data);
    }
    public function create()
    {
        return view('admin/create_user');
    }
    public function detail($id)
    {
        $data = [
            'users' => $this->userModel->getUser($id),
        ];
        return view('admin/detail', $data);
    }
    public function update($id)
    {
        $data = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email')
        ];
        $result = $this->userModel->updateUser($data, $id);
        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal mengubah data');
        }

        return redirect()->to(base_url('/'));
    }
    public function disease()
    {
        $data = [
            'disease' => $this->diseaseModel->getDisease(),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/disease', $data);
    }
    public function storeDisease()
    {
        if (!$this->validate([
            'type_code' => [
                'rules' => 'required|is_unique[disease.type_code]',
                'errors' => [
                    'required' => '{field} harus di isi.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'type_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.'
                ]
            ],
            'type_description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/admin/disease'))->withInput()->with('validation', $validation);
        }
        $this->diseaseModel->saveDisease([
            'type_code' => $this->request->getVar('type_code'),
            'type_name' => $this->request->getVar('type_name'),
            'type_description' => $this->request->getVar('type_description'),
        ]);
        return redirect()->to(base_url('admin/disease'));
    }
    public function show($id)
    {
        $data = [
            'disease' => $this->diseaseModel->getDisease(),
            'showDisease' => $this->diseaseModel->getDisease($id),
        ];
        return view('admin/edit_disease', $data);
    }
    public function updateDisease($id)
    {
        $data = [
            'type_code' => $this->request->getVar('type_code'),
            'type_name' => $this->request->getVar('type_name'),
            'type_description' => $this->request->getVar('type_description'),
        ];
        $result = $this->diseaseModel->updateDisease($data, $id);
        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal mengubah data');
        }

        return redirect()->to(base_url('/admin/disease'));
    }
    public function symptoms()
    {
        $data = [
            'symptoms' => $this->symptomsModel->getSymptoms(),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/symptoms', $data);
    }
    public function storeSymptoms()
    {
        if (!$this->validate([
            'symptoms_code' => [
                'rules' => 'required|is_unique[symptoms.symptoms_code]',
                'errors' => [
                    'required' => '{field} harus di isi.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'symptoms_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/admin/symptoms'))->withInput()->with('validation', $validation);
        }
        $this->symptomsModel->saveSymptoms([
            'symptoms_code' => $this->request->getVar('symptoms_code'),
            'symptoms_name' => $this->request->getVar('symptoms_name'),
        ]);
        return redirect()->to(base_url('admin/symptoms'));
    }
    public function showSymptoms($id)
    {
        $data = [
            'symptoms' => $this->symptomsModel->getSymptoms(),
            'showSymptoms' => $this->symptomsModel->getSymptoms($id),
        ];
        return view('admin/edit_symptoms', $data);
    }
    public function updateSymptoms($id)
    {
        $data = [
            'symptoms_code' => $this->request->getVar('symptoms_code'),
            'symptoms_name' => $this->request->getVar('symptoms_name'),
        ];
        $result = $this->symptomsModel->updateSymptoms($data, $id);
        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal mengubah data');
        }

        return redirect()->to(base_url('/admin/symptoms'));
    }
    public function rule()
    {
        $data = [
            'rule' => $this->ruleModel->getRule(),
            'symptoms' => $this->symptomsModel->getSymptoms(),
            'disease' => $this->diseaseModel->getDisease(),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/rule', $data);
    }
    public function storeRule()
    {
        if (!$this->validate([
            'rule_code' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'id_symptoms' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.'
                ]
            ],
            'id_type' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/admin/rule'))->withInput()->with('validation', $validation);
        }
        $this->ruleModel->saveRule([
            'rule_code' => $this->request->getVar('rule_code'),
            'id_symptoms' => $this->request->getVar('id_symptoms'),
            'id_type' => $this->request->getVar('id_type'),
        ]);
        return redirect()->to(base_url('admin/rule'));
    }
    public function showRule($id)
    {
        $data = [
            'showRule' => $this->ruleModel->getRule($id),
            'rule' => $this->ruleModel->getSymptomsByRule($id),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/show_rule', $data);
    }
    public function updateRule($rule, $symptoms)
    {
        $data = [
            'rule' => $this->ruleModel->getSymptomsByRule($rule),
            'show' => $this->ruleModel->updateSymptomsByRule($rule, $symptoms),
            'symptoms' => $this->symptomsModel->getSymptoms(),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/edit_rule', $data);
    }
    public function updatesRule($id)
    {
        $data = [
            'rule_code' => $this->request->getVar('rule_code'),
            'id_symptoms' => $this->request->getVar('symptoms_code'),
        ];
        $result = $this->ruleModel->updateRule($data, $id);
        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal mengubah data');
        }

        return redirect()->to(base_url('/admin/show/' . $this->request->getVar('rule_code') . '/'));
    }
    public function article()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'http://localhost/asthmasense/public/api/article');
        return view('admin/article', [
            'article' => json_decode($response->getBody(), true),
        ]);
    }
    public function editAriticle($id)
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'http://localhost/asthmasense/public/api/article/' . $id);
        return view('admin/edit_article', [
            'article' => json_decode($response->getBody(), true),
        ]);
    }
    public function createArticle()
    {
        return view('admin/create_article');
    }
    public function storeArticle()
    {
        $client = \Config\Services::curlrequest();
        $file = $this->request->getFile('image');
        $cfile = new \CURLFile($file->getRealPath(), $file->getMimeType(), $file->getFilename());
        $client->request('POST', 'http://localhost/asthmasense/public/api/article', [
            'multipart' => [
                'title' => $this->request->getVar('title'),
                'content' => $this->request->getVar('content'),
                'image' => $cfile,
            ]
        ]);
        return redirect()->to(base_url('/admin/article'))->with('message', 'Berhasil menambah data');
    }
    public function updateArticle($id)
    {
        $client = \Config\Services::curlrequest();
        $file = $this->request->getFile('image');
        $cfile = new \CURLFile($file->getRealPath(), $file->getMimeType(), $file->getFilename());
        $client->request('POST', 'http://localhost/asthmasense/public/api/article/' . $id, [
            'multipart' => [
                'title' => $this->request->getVar('title'),
                'content' => $this->request->getVar('content'),
                'image' => $cfile,
                '_method' => 'PUT'
            ]
        ]);
        return redirect()->to(base_url('/admin/article'))->with('message', 'Berhasil mengubah data');
    }
    public function deleteArticle($id)
    {
        $client = \Config\Services::curlrequest();
        $client->request('DELETE', 'http://localhost/asthmasense/public/api/article/' . $id);
        return redirect()->to(base_url('/admin/article'))->with('error', 'Berhasil menghapus data');
    }
}
