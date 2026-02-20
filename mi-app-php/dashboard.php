<?php
// Arrancamos la sesión obligatoriamente
session_start();

// El guardia de seguridad: Si no tiene el brazalete (sesión), lo regresamos al login
if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Control | Sistema</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container dashboard-container">
      
        <h1 style="color: #007bff;">¡Hola, <?php echo $_SESSION['nombre_usuario']; ?>!</h1>
        <p style="color: #6c757d; margin-bottom: 20px;">Has iniciado sesión con éxito. Bienvenido a tu panel de administración.</p>
        
        <hr style="border: 0; border-top: 1px solid #eee; margin-bottom: 20px;">

        <h3 style="text-align: left; color: #333;">Opciones Disponibles:</h3>
        
        <ul class="opciones-lista">
            <li>Generar Reporte Mensual</li>
            <li>Revisar Inventario de Equipos</li>
            <li>Monitorear Nodos de Kubernetes</li>
        </ul>

        <br>
        <a href="logout.php" style="text-decoration: none;">
            <button class="btn btn-danger">Cerrar Sesión Segura</button>
        </a>
    </div>
</body>
</html>