<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Cross Site Scripting</h1>
    <?php
    echo htmlspecialchars"<script>alert("babo");</script>";
    ?>
</body>
</html>