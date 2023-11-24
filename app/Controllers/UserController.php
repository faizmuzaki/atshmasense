<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DiseaseModel;
use App\Models\HistoryModel;
use App\Models\RuleModel;
use App\Models\SymptomsModel;

class UserController extends BaseController
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
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'http://localhost/asthmasense/public/api/article');

        $last = $this->historyModel->getLastHistory(user_id());
        if ($last == null) {
            $data = [
                'history' => $this->historyModel->getHistory(user_id()),
                'last_history' => NULL,
                'rule' => $this->ruleModel->getRule(),
                'disease' => $this->diseaseModel->getDisease(),
                'articles' => json_decode($response->getBody(), true),
            ];
        } else {
            $data = [
                'history' => $this->historyModel->getHistory(user_id()),
                'last_history' => $this->historyModel->getHistoryByCode($last['history_code']),
                'rule' => $this->ruleModel->getRule(),
                'disease' => $this->diseaseModel->getDisease(),
                'articles' => json_decode($response->getBody(), true),
            ];
        }
        return view('user/index', $data);
    }
    public function detect()
    {
        $data = [
            'symptoms' => $this->symptomsModel->getSymptoms(),
        ];
        return view('user/detect', $data);
    }
    public function store()
    {
        $symptoms = $this->request->getVar('symptoms');
        $filteredSymptoms = array_filter($symptoms, function ($value) {
            return $value === '1';
        });

        $facts = array_keys($filteredSymptoms);
        $ruleDetected = false;
        $rulesFromDatabase = $this->ruleModel->getRule();

        foreach ($rulesFromDatabase as $rule) {
            $ruleConditions = $this->ruleModel->getSymptomsByRule($rule['rule_code']);
            $matchedConditions = 0;
            foreach ($ruleConditions as $condition) {
                if (in_array($condition['id_symptoms'], $facts)) {
                    $matchedConditions++;
                }
            }
            $detectedDisease = "";
            if ($matchedConditions === count($ruleConditions)) {
                $detectedDisease = $rule['type_name'];
                $ruleDetected = true;
                break;
            }
        }
        if (!$ruleDetected) {
            $detectedDisease = "Gejala yang Anda berikan tidak secara spesifik menunjukkan adanya asma. Namun, jika gejala terus berlanjut atau memburuk, disarankan untuk berkonsultasi dengan dokter untuk evaluasi lebih lanjut.";
        }
        $data = [
            'symptoms' => [],
            'detected_disease' => ($ruleDetected) ? $detectedDisease : "Gejala yang Anda berikan tidak secara spesifik menunjukkan adanya asma. Namun, jika gejala terus berlanjut atau memburuk, disarankan untuk berkonsultasi dengan dokter untuk evaluasi lebih lanjut.",
        ];
        $history_code = uniqid();
        foreach ($symptoms as $key => $value) {
            $booleanValue = ($value == 1) ? 'Ya' : 'Tidak';
            $symptom = $this->symptomsModel->findSymptoms($key);
            $data['symptoms'][] = [
                'symptoms_name' => $symptom['symptoms_name'],
                'boolean_value' => $booleanValue,
            ];
            $this->historyModel->saveHistory([
                'history_code' => $history_code,
                'symptoms_ask' => $symptom['symptoms_name'],
                'symptoms_answer' => $booleanValue,
                'disease' => $detectedDisease,
                'id_user' => user_id(),
            ]);
        }
        return view('/user/result', $data);
    }
    public function history()
    {
        $data = [
            'history' => $this->historyModel->getHistory(user_id()),
        ];
        return view('user/history', $data);
    }
    public function detail($history_code)
    {
        $data = [
            'history' => $this->historyModel->getHistoryByCode($history_code),
        ];
        return view('user/detail_history', $data);
    }
    public function article()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'http://localhost/asthmasense/public/api/article');
        return view('user/article', [
            'article' => json_decode($response->getBody(), true),
        ]);
    }
    public function showArticle($id)
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'http://localhost/asthmasense/public/api/article/' . $id);
        return view('user/show_article', [
            'article' => json_decode($response->getBody(), true),
        ]);
    }
}
