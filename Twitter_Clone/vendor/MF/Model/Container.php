<?php

namespace MF\Model;

use App\Connection;

class Container{
    
    public static function getModel($model){

        $class = "\\App\\Models\\".ucfirst($model);

        //retornar o modelo ja instanciado, inclusive com a conexão estabelecida

        $conn = Connection::getDb();

        return new $class($conn);
    }
}

?>