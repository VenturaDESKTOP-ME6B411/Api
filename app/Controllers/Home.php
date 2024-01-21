<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }


public function test1(){


    $variable= array(

        "id"=>"11",
        "nombres"=>"Manuel Geovanny",
        "apellidos"=>"Bravo Pico",
        "cedula"=>"1234567890"


    );


return $this->response->setJson($variable);
}

public function test2(){


    $variable= array(

        "id"=>"55555",
        "nombres"=>"Geovanny",
        "apellidos"=>"Pico",
        "cedula"=>"1234567890"


    );


return $this->response->setJson($variable);
}

public function insertar($esidon = null) {
    
    $this->db=\Config\Database::connect();
    // En algún lugar donde llamas a la función
//$this->Home->insertar($argumento);


    $query=$this->db->query("INSERT INTO public.productos
    (id, nombre, edad, salario)
    VALUES(nextval('productos_id_seq'::regclass), '', 0, 0); ");
   $resultado=$query->getResult();

   return $this->response->setJson($resultado);


}
}