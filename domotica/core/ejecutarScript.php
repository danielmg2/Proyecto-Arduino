<?php

function compruebaBase(){
    try{
        
        $conexion = new PDO('mysql:host='.HOST.';dbname=information_schema', USER, PASS);
        $sql = "select SCHEMA_NAME FROM SCHEMATA WHERE SCHEMA_NAME = 'domotica';";
        $preparada = $conexion->prepare($sql);
        $preparada->execute();
        $preparada->bindColumn(1,$name);

        while($row =$preparada->fetch(PDO::FETCH_BOUND)){
            return $name;
        }
    
    }catch(Exception $ex){
        echo "Error:";
        print_r($ex);
    }finally{
        unset($conexion);
    }
}





function crearBase(){
    try{
        $conexion = mysqli_connect(HOST,USER,PASS);
        $script = file_get_contents('./sql/domotica.sql');
        mysqli_multi_query($conexion,$script);
        
    
    }catch(Exception $ex)
    {
        echo mysqli_connect_errno();
        echo mysqli_connect_error();
        echo $ex->getMessage();
    }finally{
        mysqli_close($conexion);
    }
}

?>