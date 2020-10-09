<?
    function print_title()
    {
        if(isset($_GET['id']))
        {
            echo $_GET['id']; 
        }
        else
        {
            echo "Welcome";
        }      
    }

    function print_list()
    {
        $list = scandir('data');
        $i = 0;
        while($i < count($list))
        {
            if($list[$i] != '.')
            {
                if($list[$i] != '..')
                {
                    echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>";
                }
            }
            $i++;
        }
    }

    function print_description()
    {
        if(isset($_GET['id']))
        {
            echo file_get_contents("data/".$_GET['id']); // 파일 불러오기
        }
        else
        {
            echo "Hello, PHP";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?print_title();?>
    </title>
</head>
<body>
    <h1>WEB</h1>
    <ol>
        <? print_list(); ?>
    </ol>    
    <a href="create.php">creat</a>
    <?
        if(isset($_GET['id']))
        {
    ?>
            <a href="update.php?id=<?=$_GET['id']?>">update</a>
    <?
        }
    ?>
    <h2>
        <? print_title(); ?>
    </h2>   
    <? print_description(); ?>
</body>
</html>