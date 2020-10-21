<?
$conn = mysqli_connect('localhost', 'root', 'qwe123', 'opentutorials');

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = "";
while($row = mysqli_fetch_array($result))
{   
    // <li><a href="index.php?id=5">MySQL</a></li>
    $list .= "<li><a href=\"index.php?id=".$row['id']."\">".$row['title']."</a></li>";
}

$article = array(
    'title'=>'Welcome',
    'description'=>'Hello, web'
);
if(isset($_GET['id']))
{
    $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM topic WHERE id = $filtered_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $article = array(
        'title'=>$row['title'],
        'description'=>$row['description']
    );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <?=$list?>
    </ol>
    <a href="create.php">create</a>
    <h2><?=$article['title']?></h2>
    <?=$article['description']?>
</body>
</html>