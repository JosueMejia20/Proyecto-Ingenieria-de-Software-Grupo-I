<?php
class Controllers {
    public function landing(){
        http_response_code(200);
        include ROOT_PATH . "/views/landing.php";
    }

    public function formulario(){
        http_response_code(200);
        include ROOT_PATH . "/views/admision_formulario.php";
    }

    public function revisores(){
        http_response_code(200);
        include ROOT_PATH . "/views/revisores.php";
    }

    public function esutidantesrender(){
        http_response_code(200);
        include ROOT_PATH . "/views/estudiantes.php";
    }
}
