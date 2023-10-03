<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_biblioteca";
try {
    $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    echo "Conexion realizada";
} catch (PDOException $e) {
    echo "<p>No se ha podido conectar a la base de datos</p>";
    exit;
}
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$stmt = $conexion->prepare("select u.nombre_usuario, u.contrasena from usuarios as u where u.nombre_usuario = :usuario and u.contrasena = :password");
$stmt->bindValue(':usuario', $usuario);
$stmt->bindValue(':password', $password);
$stmt->execute();
if ($stmt->rowCount() > 0) {
    header('Location: http://localhost/ejerciciosPHP/db_biblioteca/menu.html');
} else {
    echo "<p>No se ha encontrado ningún usuario con esos credenciales</p>";
    echo "<a href='index.html'>Volver a iniciar sesión</a>";
}
