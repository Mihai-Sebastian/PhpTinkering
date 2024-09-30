<?php require 'resources/layout/head.blade.php'; ?>
<body>
<?php require 'resources/layout/body.blade.php'; ?>
<h1>Prova de Connexió a la Base de Dades</h1>

<form method="POST" action="">
    <button type="submit" name="connectar">Connecta't a la Base de Dades</button>
</form>

<?php
if (isset($_POST['connectar'])) {
    $servername = "localhost";
    $username = "debian-sys-maint";
    $password = "xxx";

    // Crear la connexió
    $conn = new mysqli($servername, $username, $password);

    // Comprovar la connexió
    if ($conn->connect_error) {
        die("Connexió fallida: " . $conn->connect_error);
    }
    echo "Connexió exitosa!";
}
?>
</body>
<?php require 'resources/layout/footer.blade.php'; ?>
