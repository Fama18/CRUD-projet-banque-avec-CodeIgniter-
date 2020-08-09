<?php namespace App\Models;
//use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class MoralModel extends Model
{
    protected $table = 'clientmoral';

    protected $allowedFields = ['nomEntreprise', 'AdresseEntreprise','RaisonSocial', 'numIdent'];
}