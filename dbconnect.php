<?php
try {
    $db = new PDO('mysql:dbname=rebirth_climbing;host=127.0.0.1; charset=utf8', 'root', 'tm383855');
    
} catch(PDOExeption $e) {
    print("接続エラー". $e->getMessage());
}
?>