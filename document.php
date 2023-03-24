<?php
session_start();
if($_SESSION["Login"]!=true){
    header("Location: form.php");
}
?>
<html>
    <head><title>Document</title></head>
    <body>
        <h1>This document is protected</h1>
        <p>You can only see it if you are logged in</p>
    </body>
</html>