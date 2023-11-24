<?php

namespace App\Models;

use CodeIgniter\Model;

class SymptomsModel extends Model
{
    protected $table            = 'symptoms';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['symptoms_code', 'symptoms_name'];

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
    public function saveSymptoms($data)
    {
        $this->insert($data);
    }
    public function getSymptoms($id = null)
    {
        if ($id != null) {
            return $this->select('symptoms.*')->find($id);
        }
        return $this->select('symptoms.*')->findAll();
    }
    public function updateSymptoms($data, $id)
    {
        return $this->update($id, $data);
    }
    public function findSymptoms($symptomsCode)
    {
        return $this->select('symptoms.*')->where('symptoms_code', $symptomsCode)->first();;
    }
}
