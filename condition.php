<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Conditions <h1>

    <?php
    $a = 5;
    $b = 4; 

    if ($a==$b)
        writeLine("pareil");
    else
        WriteLine("pas pareil");
    if ($a != $b)
        WriteLine("different");
    else 
        WriteLine("pareil");
    if ($a > $b)
        WriteLine("$a>$b");
    else 
        WriteLine('$b<$a');
    ?>
</body>
</html>


