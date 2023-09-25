<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1>Function</h1>
    <?php
    $str =" Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Odit voluptates iure ut quasi rerum velit tempora et neque impedit 
        officiis, expedita reprehenderit rem amet exercitationem. Nisi voluptatum
        praesentium obcaecati fugiat.";
        echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
    echo strlen($str);
    ?>
    <h2>nl2br</h2>
    <?php
    echo nl2br($str);
    ?>
</body>
</html>