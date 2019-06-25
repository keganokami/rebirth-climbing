<?php

session_start();
require_once('./dbconnect.php');

if (isset($_SESSION['id'])) {
    $del_post_id = $_REQUEST['id'];

    $messages = $db->prepare('SELECT * FROM posts WHERE id=?');
    $messages->execute(array($del_post_id));
    $message = $messages->fetch();

    if ($_SESSION['id'] === $message['member_id']) {
        
        $del = $db->prepare('DELETE FROM posts WHERE id=?');
        $del->execute(array($del_post_id));
    } else {  
        echo '<script>alert("指定されたURLパラメータは不正です。")</script>';
        
    }
    header('Location: post.php');
}




