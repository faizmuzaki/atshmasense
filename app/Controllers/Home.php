<?php

namespace App\Controllers;

use App\Models\DiseaseModel;
use App\Models\HistoryModel;
use App\Models\RuleModel;
use App\Models\SymptomsModel;

class Home extends BaseController
{
    public $userModel, $diseaseModel, $symptomsModel, $ruleModel, $historyModel;
    public function __construct()
    {
        $this->userModel = new \Myth\Auth\Models\UserModel();
        $this->diseaseModel = new DiseaseModel();
        $this->symptomsModel = new SymptomsModel();
        $this->ruleModel = new RuleModel();
        $this->historyModel = new HistoryModel();
    }
    public function index()
    {
        if (logged_in()) {
            if (in_groups('admin')) {
                return redirect()->to(base_url('/admin'));
            } else if (in_groups('user')) {
                return redirect()->to(base_url('/user'));
            }
        } else {
            $client = \Config\Services::curlrequest();
            $response = $client->request('GET', 'http://localhost/asthmasense/public/api/article');
            $data = [
                'users' => $this->userModel->getUser(),
                'rule' => $this->ruleModel->getRule(),
                'disease' => $this->diseaseModel->getDisease(),
                'history' => $this->historyModel->getTotalHistory(),
                'articles' => json_decode($response->getBody(), true),
            ];
            return view('welcome_message', $data);
        }
    }
}
