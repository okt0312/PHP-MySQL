<?
    require_once('lib/print.php');
    require_once('view/top.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form form action="create_process.php" method="POST">
        <p>
            <input type="text" name="title" placeholder="title">
        </p>
        <p>
            <textarea name="description" cols="30" rows="10" placeholder="description"></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
</body>
</html>