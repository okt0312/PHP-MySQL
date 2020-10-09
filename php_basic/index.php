<?
    require_once('lib/print.php');
    require_once('view/top.php');
?> 
    <a href="create.php">creat</a>
    <?
        if(isset($_GET['id']))
        {
    ?>
            <a href="update.php?id=<?=$_GET['id']?>">update</a>
            <form action="delete_process.php" method="POST">
                <input type="hidden" name="id" value="<?=$_GET['id']?>">
                <input type="submit" value='delete'>
            </form>
    <?
        }
    ?>
    <h2>
        <? print_title(); ?>
    </h2>   
    <? print_description(); ?>

<?
    require_once('view/bottom.php');
?>