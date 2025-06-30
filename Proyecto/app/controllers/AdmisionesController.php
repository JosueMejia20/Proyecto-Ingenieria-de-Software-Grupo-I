<?php
class AdmisionesController
{
    public function formulario()
    {
        http_response_code(200);
        include __DIR__ . '/../../views/admision_formulario.php';
    }

    public function revisiones()
    {
        http_response_code(200);
        include __DIR__ . '/../../views/revisiones_admisiones.php';
    }

    public function procesarFormulario()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            $correo = $_POST['correo'] ?? '';
            $programa = $_POST['programa'] ?? '';

            // Validación básica
            if (empty($nombre) || empty($correo) || empty($programa)) {
                http_response_code(400);
                echo "Todos los campos son obligatorios.";
                return;
            }

            // Conexión a base de datos (ejemplo básico)
            $conexion = new mysqli("localhost", "usuario", "contraseña", "basededatos");

            if ($conexion->connect_error) {
                http_response_code(500);
                echo "Error de conexión a la base de datos.";
                return;
            }

            $stmt = $conexion->prepare("INSERT INTO admisiones (nombre, correo, programa) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nombre, $correo, $programa);

            if ($stmt->execute()) {
                http_response_code(200);
                echo "Solicitud enviada con éxito.";
            } else {
                http_response_code(500);
                echo "Error al procesar la solicitud.";
            }

            $stmt->close();
            $conexion->close();
        } else {
            http_response_code(405);
            echo "Método no permitido";
        }
    }
}
