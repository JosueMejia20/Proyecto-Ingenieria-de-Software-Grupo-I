<?php
class Controllers {
    public function landing(){
        http_response_code(200);
        include __DIR__. "/views/landing.php";
    }

    public function formulario(){
        http_response_code(200);
        include __DIR__. "/../Proyecto/views/admision_formulario.php";
    }

    public function revisores(){
        http_response_code(200);
        include __DIR__. "/views/revisores.php";
    }

    public function esutidantesrender(){
        http_response_code(200);
        include __DIR__. "/views/estudiantes.php";
    }
}
