<?php

namespace App\Controllers;

class Sucursales extends BaseController
{
    public function getAll()
    {

        // En un controlador
        $sucursalM = new \App\Models\SucursalModel();
        $listado  = $sucursalM->findAll();

        return $this->response->setJSON([
                    'data'   => $listado,
                ]);
     
    }

      
}
