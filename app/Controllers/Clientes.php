<?php

namespace App\Controllers;

class Clientes extends BaseController
{
    public function list()
    {
        $clientes=[];

        //hacer la consula a la bd


        $response = [
            'status' => true,
            'data'   => $clientes,
            'msj'    => 'Clientes encontrados correctamente.'
        ];

        return $this->response->setJSON($response);
      
    }

 
}
