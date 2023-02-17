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
        //Puede pasar: 1 o 2 
        $recurso= self::recurso();

        //1.recurso -concietos y nada despues
        if (count($recurso)==2){
            //si solo hay conciertos devuelve dos, el de antes de la barra y el de espues
            if(!$parametros){
                //Listar sin parametros
                $lista = ActuadorDao::findAll();
                //print_r($lista);//tengo la lista en array, ahora debo mandar como JSON el recurso al cliente
                $data=json_encode($lista);
                self::respuesta(
                    $data,
                    array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                );
            }
            
            //     else{
            //     if(isset($_GET['fecha']) && isset($_GET['ordenF']) && count($_GET)==2){
                    

            //     }elseif(isset($_GET['fecha']) && count($_GET)==1){

            //         $concierto = ConciertoDAO::findByFecha($_GET['fecha']);

            //         $data=json_encode($concierto);
            //         self::respuesta(
            //             $data,
            //             array('Content-Type: application/json', 'HTTP/1.1 200 OK')
            //         );
            //     }elseif(isset($_GET['ordenF']) && count($_GET)==1){
            //         //me los pide ordenadors
            //         if($_GET['ordenF'] != 'ASC' && $_GET['ordenF'] != 'DESC'){
            //             //responde error si no es ASC o DESC
            //             self::respuesta('',array('HTTP/1.1 400 El filtro debe ser ASC o DESC'));
            //         }else{
            //             $concierto = ConciertoDAO::findOrderByFecha($_GET['ordenF']);

            //             $data=json_encode($concierto);
            //             self::respuesta(
            //                 $data,
            //                 array('Content-Type: application/json', 'HTTP/1.1 200 OK')
            //             );
            //         }
            //     }else{
            //         self::respuesta('',array('HTTP/1.1 400 No se ha utilizado un filtro'));
            //     }
            // }
        }elseif(count(self::recurso())==3){
            //2.conciertos y despues id
            //no tenemoms en cuenta los parametros poruqe se busca por id

            $concierto= ActuadorDao::findById($recurso[2]);
            $data=json_encode($concierto);
                self::respuesta(
                    $data,
                    array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                );
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
        
        // $array=get_object_vars($dato);
        

        // if(ConciertoDAO::insert($dato)){
        //     //ha ido todo bien
        //     self::respuesta(
        //         '',
        //         array('Content-Type: application/json', 'HTTP/1.1 200 OK')
        //     );
        // }
        // //print_r($dato); 
   }
}
?>