<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errores = [];

    function validateName(string $nombre): bool
    {
        return !(trim($nombre == ''));
    }

    function validateLastName(string $apellido): bool
    {
        return !(trim($apellido == ''));
    }


    function validateAge(int $edad): int
    {
        if ($edad < 0 || null) {
            return 0;
        }
        return $edad;
    }

    function validatePassword(string $password): bool
    {
        return !(trim($password == ''));
    }

    function validateColor($color)
    {
        if ($color === null) {
            $errores[] = 'Introduce un color';
        }
    }



    if (!validateName($nombre)) {
        $errores[] = 'El campo Nombre es obligatorio.';
    }

    if (!validateLastName($apellido)) {
        $errores[] = 'El campo apellido es obligatorio.';
    }

    if (!validateAge(intval($edad))) {
        $errores[] = 'El campo de Edad debe ser un número valido.';
    }

    if (!validatePassword($password)) {
        $errores[] = 'El campo de contraseña tiene un formato no válido.';
    }

    if ($errores) {
        foreach ($errores as $error) {
            echo $error;
        }
    }
}
