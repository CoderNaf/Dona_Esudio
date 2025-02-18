<?php

class conecction
{
    private $host = "localhost"; // recuerda cambiar por tu host
    private $username = "root";// recuerda cambiar por tu usuario
    private $password = "3312";// recuerda cambiar por tu contraseña
    public $connection;

    public function __construct(){
        try{
            $this->connection = new PDO("mysql:host=$this->host;dbname=dona_dashboard",$this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // establecemos el modo de error a excepción que nos permitirá manejar los errores pdo::ERRMODE_EXCEPTION es una constante de pdo para manejar errores ejem: si hay un error en la consulta pdo nos arrojará una excepción.
        }
        catch(PDOException $exception)
        {
            echo "Connection error: " . $exception->getMessage();
        }
    }


    public function ejecutar($query) // insertar, actualizar y eliminar, esta función ejecutará las consultas.
    {
        $this->connection->exec($query); // establecemos el juego de caracteres a utf8
        return $this->connection->lastInsertId(); // retornamos el resultado de la consulta
    }

    public function consultar($query) // esta función ejecutará las consultas de tipo select.
    {
        $result = $this->connection->prepare($query); // la consulta se almacena en la variable $result, $this es una palabra reservada que se utiliza para acceder a las propiedades de la clase. la clase en este caso es connection.
        $result->execute(); // ejecutamos la consulta
        return $result->fetchAll(PDO::FETCH_ASSOC); // retornamos el resultado de la consulta
    }
    



}
?>
