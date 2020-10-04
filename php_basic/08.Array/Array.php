<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <?
        $coworkers = array('a', 'b', 'c', 'd');
        echo $coworkers[1].'<br>';
        echo $coworkers[3].'<br>';
        echo var_dump(count($coworkers)).'<br>';

        array_push($coworkers, 'test');
        echo var_dump($coworkers);
    ?> 
</body>
</html>