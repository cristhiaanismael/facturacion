<?php
namespace App\Models;

use CodeIgniter\Model;

class SucursalModel extends Model
{
    protected $table = 'sucursales'; 
    protected $primaryKey = 'id_sucursal';


    protected $allowedFields = ['nombre', 'direccion', 'telefono'];
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $createdField = 'fecha_creacion';
    protected $updatedField = 'fecha_actualizacion';

}