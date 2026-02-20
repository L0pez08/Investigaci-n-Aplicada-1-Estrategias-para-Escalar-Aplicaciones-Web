<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login del Sistema</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        
        <form action="login.php" method="POST">
            <div class="form-group">
                <label>Usuario:</label>
                <input type="text" name="usuario" placeholder="Ingresa tu usuario" required>
            </div>
            
            <div class="form-group">
                <label>Contraseña:</label>
                <input type="password" name="password" id="password" placeholder="••••••••" required>
                <span class="toggle-password" id="togglePassword">Mostrar</span>
            </div>
            
            <input type="submit" class="btn" value="Entrar">
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>