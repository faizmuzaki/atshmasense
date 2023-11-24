<?php

namespace App\Models;

use CodeIgniter\Model;

class DiseaseModel extends Model
{
    protected $table            = 'disease';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['type_code', 'type_name', 'type_description'];

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

    public function saveDisease($data)
    {
        $this->insert($data);
    }
    public function getDisease($id = null)
    {
        if ($id != null) {
            return $this->select('disease.*')->find($id);
        }
        return $this->select('disease.*')->findAll();
    }
    public function updateDisease($data, $id)
    {
        return $this->update($id, $data);
    }
}
