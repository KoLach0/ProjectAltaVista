<?php
class Database
{
    public static function StartUp()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=altavista;charset=utf8', 'root', '');


            return $pdo;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}
?>
