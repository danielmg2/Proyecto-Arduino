
<?
    if (isset($_REQUEST['enviar'])) {
        $user = $_REQUEST['user'];
        $pass = $_REQUEST['pass'];
        if (empty($user)) {
            $_SESSION['error'] = "Debe rellenar el nombre";
        } elseif (empty($pass)) {
            $_SESSION['error'] = "Debe rellenar la contraseña";
        } else {


            $usuario = UsuarioDAO::valida($user, $pass);
            
            if (($usuario != null)) {
                $_SESSION['validado'] = true;
                $_SESSION['user'] = $user;
                $_SESSION['id'] = $usuario->id;
                $_SESSION['nombre'] = $usuario->nombre;
                // $_SESSION['perfil'] = $usuario->perfil;
                $_SESSION['vista'] = $vistas['home'];
                $_SESSION['controlador'] = $controladores['home'];
                $_SESSION['pagina'] = 'home';     
                require  $_SESSION['controlador'];
            }
        }
    }

