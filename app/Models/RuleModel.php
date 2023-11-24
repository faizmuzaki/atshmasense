<?php

namespace App\Models;

use CodeIgniter\Model;

class RuleModel extends Model
{
    protected $table            = 'rule';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['rule_code', 'id_symptoms', 'id_type'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    public function saveRule($data)
    {
        $this->insert($data);
    }
    public function getRule($id = null)
    {
        if ($id != null) {
            return $this->select("rule.rule_code, MAX(disease.type_name) AS type_name, REPLACE(GROUP_CONCAT(CONCAT(symptoms.symptoms_code, ' - ', symptoms.symptoms_name) SEPARATOR ' <br> '), ',', '') AS all_symptoms")
                ->join('symptoms', 'symptoms.symptoms_code=rule.id_symptoms')
                ->join('disease', 'disease.type_code=rule.id_type')
                ->where('rule.rule_code', $id)
                ->groupBy('rule.rule_code')
                ->find();
        }

        return $this->select('rule.*, symptoms.symptoms_name, disease.type_name')
            ->join('symptoms', 'symptoms.symptoms_code=rule.id_symptoms')
            ->join('disease', 'disease.type_code=rule.id_type')
            ->groupBy('rule.rule_code')
            ->findAll();
    }
    public function getSymptomsByRule($id = null)
    {
        return $this->select('rule.*, symptoms.symptoms_name,symptoms.symptoms_code, disease.type_name')
            ->join('symptoms', 'symptoms.symptoms_code=rule.id_symptoms')
            ->join('disease', 'disease.type_code=rule.id_type')
            ->where('rule.rule_code', $id)
            ->find();
    }
    public function updateSymptomsByRule($id = null, $symptoms = null)
    {
        return $this->select('rule.*, symptoms.symptoms_name,symptoms.symptoms_code, disease.type_name')
            ->join('symptoms', 'symptoms.symptoms_code=rule.id_symptoms')
            ->join('disease', 'disease.type_code=rule.id_type')
            ->where('rule.rule_code', $id)
            ->where('symptoms.symptoms_code', $symptoms)
            ->find();
    }
    public function updateRule($data, $id)
    {
        return $this->update($id, $data);
    }
    public function findRulesBySymptoms($fact)
    {
        return $this->where('id_symptoms', $fact)->findAll();
    }
    public function getRules()
    {
        return $this->select('rule.*, symptoms.symptoms_name, disease.type_name')
            ->join('symptoms', 'symptoms.symptoms_code=rule.id_symptoms')
            ->join('disease', 'disease.type_code=rule.id_type')
            ->findAll();
    }
}
