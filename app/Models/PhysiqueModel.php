<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class PhysiqueModel extends Model
{
    protected $table = 'clientphysique';

    protected $allowedFields = ['numCni', 'nom','prenom', 'civilite', 'DateDeNaissance', 'adresse', 'email', 'telephone'];
}