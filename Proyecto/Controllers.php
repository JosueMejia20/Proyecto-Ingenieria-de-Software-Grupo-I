<?php 
class Controllers{
    public function landing(){
        http_response_code(200);
        include __DIR__."/views/landing.php";
    }

    public function formulario(){
        http_response_code(200);
        include __DIR__."/views/admision_formulario.php";
    }

    public function revisores(){
        http_response_code(200);
        include __DIR__."/views/revisores.php";
    }

    public function esutidantesrender(){
        http_response_code(200);
        include __DIR__."/views/estudiante.php";
    }

    public function renderAdmissionsChecking(){
        http_response_code(200);
        include __DIR__."/views/solicitud.php";
    }

    public function renderReviewersLogin(){
        http_response_code(200);
        include __DIR__."/views/loginRevisores.php";
    }

    public function renderReviewersHome(){
        http_response_code(200);
        include __DIR__."/views/revisores.php";
    }


}
?>