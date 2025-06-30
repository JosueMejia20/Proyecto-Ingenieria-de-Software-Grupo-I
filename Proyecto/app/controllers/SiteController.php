<?php
class SiteController {
    public function landing() {
        require ROOT . '/views/landing.php';
    }

    public function formulario() {
        require ROOT . '/views/formulario.php';
    }

    public function verEstudiante($id) {
        echo "Estudiante con ID: $id";
    }
}
