<?
class ControladorSensor extends ControladorPadre{
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
                $lista = SensorDao::findAll();
                //print_r($lista);//tengo la lista en array, ahora debo mandar como JSON el recurso al cliente
                $data=json_encode($lista);
                self::respuesta(
                    $data,
                    array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                );
            }else{
           
                if(isset($_GET['fecha1']) && isset($_GET['fecha2']) && count($_GET)==2){
                    
                    $lista = SensorDao::findByDays($_GET['fecha1'],$_GET['fecha2']);
                    $datos = json_encode($lista);
                    self::respuesta(
                        $datos,
                        array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                    );
    
                }
            }
            
        }elseif(count(self::recurso())==3){
            //2.conciertos y despues id
            //no tenemoms en cuenta los parametros poruqe se busca por id
            if($recurso[2]=='personas'){

            }elseif($recurso[2]=='temperatura'){

            }elseif($recurso[2]=='luminosidad'){

            }elseif($recurso[2]=='humedad'){

            }else{
                $sensor= SensorDao::findById($recurso[2]);
                $data=json_encode($sensor);
                self::respuesta(
                    $data,
                    array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                );
            }
            
        }
    }

    public function insertar(){
        //lo que me llega aqui es por porst
        $body = file_get_contents(('php://input'));
        $dato= json_decode($body,true);//me llega un objeto estandar
        if(isset($dato['id_arduino']) && isset($dato['personas']) && isset($dato['fecha']) && isset($dato['temperatura']) && isset($dato['luminosidad']) && isset($dato['humedad'])){
            $sensor = new Sensor(null,$dato['id_arduino'],$dato['personas'],$dato['fecha'],$dato['temperatura'],$dato['luminosidad'],$dato['humedad']);
            if(SensorDao::insert($sensor)){
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