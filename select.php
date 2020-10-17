<?
$conn = mysqli_connect('localhost', 'root', 'qwe123', 'opentutorials');

// 1row
$sql = "SELECT * FROM topic WHERE id = 5";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

echo '<h2>' .$row['title']. '</h2>';
echo $row['description'];
echo "<h1>multi row</h1>";

// all row
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
{
    echo '<h2>'.$row['title'].'</h2>';
    echo $row['description'];   
}
?>