<?
    require_once('lib/print.php');
    require_once('view/top.php');
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
    <form form action="update_process.php" method="POST">
        <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
        <p>
            <input type="text" name="title" placeholder="title" value="<?print_title()?>">
        </p>
        <p>
            <textarea name="description" cols="30" rows="10" placeholder="description"><?print_description()?></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
</body>
</html>