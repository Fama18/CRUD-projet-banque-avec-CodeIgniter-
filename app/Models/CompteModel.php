<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CompteModel extends Model
{
    protected $table = 'compte';

    protected $allowedFields = ['numagence', 'numCompte','cleRib','clientphysique'];
}