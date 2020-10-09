<?
    echo var_dump($_POST);
    file_put_contents("data/".$_POST['title'], $_POST['description']);
    header('Location: /php_basic/index.php?id='.$_POST['title']);
?>