<?
    $result = unlink('data/'.$_POST['id']);
    header('Location: /php_basic/index.php?id='.$_POST['id']);
?>