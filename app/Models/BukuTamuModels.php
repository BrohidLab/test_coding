<?php namespace App\Models;

use CodeIgniter\Model;

class BukuTamuModels extends Model
{
    protected $table = 'tamu';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'email', 'pesan', 'tanggal'];
}