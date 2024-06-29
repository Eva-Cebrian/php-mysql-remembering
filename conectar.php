<?php
abstract class Conectar
{
    private $con;

    public function conectar()
    {
        try {
            $this->con = new PDO("mysql:unix_socket=/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock;dbname=CESAR-EJERCICIO", "root", "");
        } catch (PDOException $e) {
            die("error: " . $e);
        }
        return $this->con;
    }

    public function setNames()
    {
        return $this->con->query("SET NAMES 'utf8'");
    }
}

class Datos extends Conectar
{
    private $bd;

    public function __construct()
    {
        $this->bd = self::conectar();
        self::setNames();
    }

    public function getDatos($sql)
    {
        $datos = $this->bd->prepare($sql);
        $datos->execute();
        return $datos->fetchAll();
        $this->bd = null;
    }

    public function getDato($sql)
    {
        $datos = $this->bd->prepare($sql);
        $datos->execute();
        return $datos->fetch();
        $this->bd = null;
    }

    public function setDato($sql)
    {
        $datos = $this->bd->prepare($sql);
        $datos->execute();
    }
}
