<?
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>

<form action="./index.php" method="post">
    <input type="text" name="user" id="user" placeholder="Usuario" class="text">
    <input type="password" name="pass" id="pass" placeholder="Contraseña" class="text">
    <input type="submit" value="Enviar" name="enviar" id="pass">
</form>
