<?php
session_start();

// Nuestras credenciales simuladas
$usuario_valido = "admin";
$password_valida = "12345";

// Verificamos si los datos llegaron desde el formulario
if (isset($_POST['usuario']) && isset($_POST['password'])) {
    
    if ($_POST['usuario'] === $usuario_valido && $_POST['password'] === $password_valida) {
        // Éxito: Creamos sesión y redirigimos sin mostrar nada aquí
        $_SESSION['logueado'] = true;
        $_SESSION['nombre_usuario'] = $usuario_valido;
        header("Location: dashboard.php");
        exit();
    } else {
        // Falló: Activamos una variable de error para mostrar el diseño de abajo
        $error = true;
    }
} else {
    // Si entran directo por URL, los pateamos al index
    header("Location: index.php");
    exit();
}
?>

<?php if (isset($error) && $error === true): ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Error de Autenticación</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2 style="color: #000000;">¡Acceso Denegado!</h2>
        <p style="margin-bottom: 25px; color: #555;">El usuario o la contraseña que ingresaste son incorrectos.</p>
        
        <a href="index.php" style="text-decoration: none;">
            <button class="btn">Volver a intentar</button>
        </a>
    </div>
</body>
</html>
<?php endif; ?>