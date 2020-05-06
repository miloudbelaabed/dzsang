
<?php

class connection
{
private static $dsn = 'mysql:dbname=dzblood;host=127.0.0.1';
private static $user = 'root';
private static $password = '';

    public static function connect(){
        try {
            $pdo = new PDO(self::$dsn, self::$user, self::$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
            // $count = $pdo->exec("INSERT INTO volunteer (full_name,email,phone,password,town,wilaya_id) VALUES ('$f','$e','$p','123456','5','1')") or die(print_r($db->errorInfo(), true));
        } catch (PDOException $e){
            echo "INSERTED FAILER: " .$e->getMessage();
        }
    return false;
    }

}

?>