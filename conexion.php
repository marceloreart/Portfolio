<?php class conexion
{
    #atributos que son propios del objeto
    private $servidor = "localhost"; #"us-cdbr-east-06.cleardb.net";
    private $usuario = "root"; #"b829175b2a2548";
    private $pass = ""; #"a7c7540b";
    private $conexion; #objeto de tipo pdo, de la clase propia de php
    private $base = "tpcodoacodo"; #"heroku_1df097a8a254b6d";

    public function __construct()
    {
        try {
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=$this->base", $this->usuario, $this->pass);
            #ACTIVAMOS LOS ERRORES Y LAS EXCEPTIONES
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            return "Falla de Conexión" . $e;
        }
    }

    #creo un metodo de ejecucion a sql de insert, update, delete   
    public function ejecutar($sql)
    {
        #Execute una consulta de sql
        $this->conexion->exec($sql);
        #esto nos da el valor de id insertado
        return $this->conexion->lastInsertId();
    }
    public function consultar($sql)
    { # select 
        #ejecuta la consulta y nos devuelve la info de la base
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        #retorna todos los registros de la consulta sql
        return $sentencia->fetchAll();
        /*1ro agarra nuestra sentencia de sql y lo mete adentro de un objeto 
         2do agarra el objeto y ejecuta la sentencia de sql que devuelve o no filas de base de datos 
         3ro fetchall() nos devuelve un array con las filas del select  */
    }
}
