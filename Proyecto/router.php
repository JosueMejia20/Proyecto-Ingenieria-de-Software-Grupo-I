<?php

require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/AdmisionesController.php';

$routes = [
    '' => function () {
        (new HomeController())->landing();
    },
    'formulario' => function () {
        (new AdmisionesController())->formulario();
    },
    'revisiones' => function () {
        (new AdmisionesController())->revisiones();
    },
];
