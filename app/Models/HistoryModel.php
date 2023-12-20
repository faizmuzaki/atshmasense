<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoryModel extends Model
{
    protected $table            = 'history';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['history_code', 'symptoms_ask', 'symptoms_answer', 'disease', 'id_user'];

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
    public function saveHistory($data)
    {
        $this->insert($data);
    }
    public function getHistory($id = null)
    {
        return $this->where('id_user', $id)
            ->groupBy('history.history_code')
            ->findAll();
    }
    public function getLastHistory($id = null)
    {
        return $this->where('id_user', $id)
            ->orderBy('history.id', 'DESC')
            ->first();
    }

    public function getHistoryByCode($code = null)
    {
        return $this->where('history_code', $code)
            ->findAll();
    }
    public function getTotalHistory()
    {
        return $this->select('history.*')
            ->groupBy('history.history_code')
            ->findAll();
    }
}
