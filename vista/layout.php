<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./webroot/style.css">
    <title>Domotica en el Claudio</title>
</head>
<body>
    <header>
        <?
        if(estaValidado()){
            ?>
            <form action="./index.php" method="POST"> 
                <input type="submit" name="logout" class="btn btn-outline-primary me-2" value="Logout">
            </form>
            <?
        }
        ?>
    </header>
    <main>
        <?
        require_once $_SESSION['vista'];
        ?>
    </main>
</body>
</html>