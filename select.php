<?
$conn = mysqli_connect('localhost', 'root', 'qwe123', 'opentutorials');

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);

var_dump($result -> num_rows);

?>