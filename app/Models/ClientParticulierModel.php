<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ClientParticulierModel extends Model
{
    protected $table = 'clientparticulier';
 
    protected $allowedFields = ['idcompte' , 'nom' , 'prenom' , 'telephone' , 'genre' , 'email', 'adresse', 'profession', 'salarie', 'salarie_actuel', 'nom_employeur' , 'cni'];
}