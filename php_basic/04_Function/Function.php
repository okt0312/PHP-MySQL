<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1>Function</h1>
    <?
        $str = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam, 
        suscipit delectus iure placeat cumque incidunt, amet eligendi quas ullam itaque quidem. 
        Ipsa magnam a laboriosam commodi natus odit quae ab?";
        echo $str;
    ?>
    <h2>strlen()</h2>
    <?
        echo strlen($str); // 문자열 길이
    ?>

    <h2>nl2br</h2>
    <?
        echo nl2br($str); // 줄바꿈
    ?>
</body>
</html>