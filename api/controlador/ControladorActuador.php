<?
class ControladorActuador extends ControladorPadre{
    //busca en la base de datos
    public function controlar(){
            //lo que me ha pasado
        $metodo = $_SERVER['REQUEST_METHOD'];
        switch($metodo){
            case 'GET':
                $this->buscar();
                break;
            case 'POST':
                $this->insertar();
                break;
            default:
                ControladorPadre::respuesta('',array('HTTP/1.1 400 No se usado el metodo correcto'));
                break;
            }
            
    }
    public function buscar(){
        $parametros= $this->parametros();
        $recurso= self::recurso();

        if (count($recurso)==2){
            //si solo hay ""/actuador 
            if(!$parametros){

                $lista = ActuadorDao::findAll();

                $data=json_encode($lista);
                self::respuesta(
                    $data,
                    array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                );
            }else{
                if(isset($_GET['fecha1']) && isset($_GET['fecha2']) && count($_GET)==2){
                    
                        $lista = ActuadorDao::findByDays($_GET['fecha1'],$_GET['fecha2']);
                        $datos = json_encode($lista);
                        self::respuesta(
                            $datos,
                            array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                        );

            }
        }

        }elseif(count(self::recurso())==3){

            if(is_int($recurso[2])){
            $actuador= ActuadorDao::findById($recurso[2]);
            $data=json_encode($actuador);
            $last_error = json_last_error_msg();
                self::respuesta(
                    $data,
                    array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                );
            }else{
                if(!$parametros){
                    $actuador = ActuadorDao::findByRecurso($recurso[2]);
                    $data=json_decode($actuador);
                    self::respuesta(
                        $data,
                        array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                    );
                }else{
                    if(isset($_GET['fecha1']) && isset($_GET['fecha2']) && count($_GET)==2){

                        $actuador= ActuadorDao::findRecursoByDays($recurso[2],$_GET['fecha1'],$_GET['fecha2']);
                        $data=json_encode($actuador);
                        self::respuesta(
                            $data,
                            array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                        );                
                    }
                }
            }
        }
    }

    public function insertar(){
        //lo que me llega aqui es por porst
        $body = file_get_contents(('php://input'));
        $dato= json_decode($body,true);//me llega un objeto estandar
        if(isset($dato['id_arduino']) && isset($dato['actuador']) && isset($dato['mensaje']) && isset($dato['fecha'])){
            $actuador = new Actuador(null,$dato['id_arduino'],$dato['actuador'],$dato['mensaje'],$dato['fecha']);
            if(ActuadorDao::insert($actuador)){
                //ha ido todo bien
                self::respuesta(
                    '',
                    array('Content-Type: application/json', 'HTTP/1.1 201 Creado')
                );
            }
            
        }else{
            self::respuesta(
                '',
                array('Content-Type: application/json', 'HTTP/1.1 400 Error JSON no tiene formato correcto, en envio de datos')
            );
        }
        
   }
}
