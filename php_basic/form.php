<?
    echo var_dump($_GET);
    file_put_contents('data/'.$_GET['title'], $_GET['description']);
?>