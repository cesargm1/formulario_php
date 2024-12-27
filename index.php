<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php


$nombre = $_POST['nombre'] ?? '';
$apellido = $_POST['apellido'] ?? '';
$edad = $_POST['edad'] ?? '';
$password = $_POST['password'] ?? '';
// $colors = $_REQUEST['color'] ?? [];

include 'validator.php';
?>

<body>
    <h1 class="body__h1">Formulario</h1>
    <form class="body__form" action="createDb.php" method="post">

        <label class="form__label">
            introduce tu nombre
            <input type="text" name="nombre" value="<?php echo $nombre ?>" class="label__input"></input>
        </label>

        <label class="form__label">
            introduce tu apellido
            <input type="text" name="apellido" value="<?php echo $apellido ?>" class="label__input"></input>
        </label>

        <label class="form__label">
            introduce tu edad
            <input type="number" name="edad" value="<?php echo $edad ?>" class="label__input">
            </input>
        </label>


        <label class="form__label">
            introduce tu contraseña
            <input type="password" name="password" value="<?php echo $password ?>" class="label__input">
            </input>
        </label>


        <h2 class="form__h2">Elije tu color favorito</h2>

        <label class="form__label">
            Verde
            <input type="checkbox" name="color[]" value="verde" class="label__input">
            </input>
        </label>

        <label class="form__label">
            Rojo
            <input type="checkbox" name="color[]" value="rojo" class="label__input">
            </input>
        </label>

        <label class="form__label">
            Azul
            <input type="checkbox" name="color[]" value="azul" class="label__input">
            </input>
        </label>
        <section class="form__section">
            <button class="form__reset" type="reset">restablecer</button>
            <button class="form__submit" type="submit" name="submit" value="enviar">enviar</button>
        </section>
    </form>
</body>

</html>