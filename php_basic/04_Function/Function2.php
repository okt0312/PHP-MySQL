<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?
        function basic()
        {
            print("test string1<br>");
            print("test string2<br>");
        }
        basic();
    ?>

    <h2>parameter &amp; argument</h2>
    <?
        function sum($left, $right)
        {
            print($left + $right."<br>");
        }
        sum(2, 4);
    ?>

    <h2>return</h2>
    <?
        function sum2($left, $right)
        {
            return $left + $right;
        }

        print(sum2(2, 4));
    ?>
</body>
</html>