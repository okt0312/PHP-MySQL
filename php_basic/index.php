<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web</title>
</head>
<body>
    <h1>WEB</h1>
    <ol>
        <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JavaScript">JavaScript</a></li>
    </ol>    
    <h2>
        <?
            echo $_GET['id'];
        ?>
    </h2>   
    <?
        echo file_get_contents("data/".$_GET['id']); // 파일 불러오기
    ?>
</body>
</html>