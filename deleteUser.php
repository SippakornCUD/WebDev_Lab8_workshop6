<?php include "connect.php"?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $stmt=$pdo->prepare("DELETE FROM member WHERE username = ?");
        $stmt->bindParam(1,$_GET["uname"]);
        if($stmt->execute()){
            header("location:workshop6.php");
        }
        ?>
    </body>
</html>