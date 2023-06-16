<?php
    $db_name = 'mysqk:host=localhost;dbname=shop_db';
    $db_user = 'root';
    $db_pass = '';

    $conn = new PDO($db_name, $db_user, $db_password);

    function unique_id(){
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $chars_length = strlen($chars);
        $randomString = '';
        for($i = 0; $i < 10; $i++){
            $randomString .= $chars[mt_rand(0, $chars_length - 1)];
        }
        return $randomString;
    }
?>