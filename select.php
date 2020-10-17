<?
$conn = mysqli_connect('localhost', 'root', 'qwe123', 'opentutorials');

$sql = "SELECT * FROM topic WHERE id = 5";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

echo '<h1>' .$row['title']. '</h1>';
echo $row['description'];
?>