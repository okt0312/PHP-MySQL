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

$update_link = "";
$delete_link = "";
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

    $update_link = "<a href='update.php?id=".$_GET['id']."'>update</a>";
    $delete_link = "
        <form action='process_delete.php' method='post'>
            <input type='hidden' name='id' value='".$_GET['id']."'>
            <input type='submit' value='delete'>
        </form>
    ";
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
    <?=$update_link?>
    <?=$delete_link?>
    <h2><?=$article['title']?></h2>
    <?=$article['description']?>
</body>
</html>