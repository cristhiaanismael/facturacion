<?php
namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
    protected $table      = 'clientes';         // Nombre de la tabla en tu BD
    protected $primaryKey = 'id_cliente';               // Llave primaria

    protected $returnType     = 'array';        // Formato de retorno: 'array' o 'object'
   // protected $useSoftDeletes = false;          // Puedes ponerlo en true si tienes campo 'deleted_at'

    protected $allowedFields = [ 'nombre', 'direccion', 'telefono', 'email', 'rfc', 'fecha_registro', 'activo']; // Campos que se pueden insertar/actualizar

    /*protected $useTimestamps = true;            // Si tu tabla tiene 'created_at' y 'updated_at'
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';*/

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
