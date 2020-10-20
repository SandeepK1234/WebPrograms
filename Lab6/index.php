<html>
<head>
    <title>Prog 6</title>
    <style>
        h1,h2 {text-align: center}
    </style>
</head>
<body>
    <h1>Welcome to my webpage</h1>
    <?php
        $handle=fopen("count.txt","r");
        $count=fread($handle,10);
        fclose($handle);
        $count=intval($count);
        $count+=1;
        echo "<h2>No of the time visited is $count</h2>";
        $handle=fopen("count.txt",'w');
        $count=fwrite($handle,$count);
        fclose($handle);

    ?>
</body>
</html>

