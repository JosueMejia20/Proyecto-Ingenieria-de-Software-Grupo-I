<?php
class Controllers {
    public function landing() {
        include __DIR__ . "/views/landing.php";
    }

    public function formulario() {
        include __DIR__ . "/views/admision_formulario.php";
    }

    public function revisores() {
        echo "Vista de revisores";
    }

    public function esutidantesrender() {
        echo "Vista de estudiantes";
    }

    public function verEstudiante($id) {
        echo "Perfil del estudiante con ID: " . htmlspecialchars($id);
        // incluir vista si es necesario
    }
}
