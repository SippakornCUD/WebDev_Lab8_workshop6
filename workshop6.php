<?php include "connect.php"?>
<html>
    <head>
        <meta charset="utf-8">
        <script>
            function deleteUser(uname){
                // console.log(uname);
                // console.log(typeof(uname));
                let cf = confirm("ต้องการลบ Username : " + uname + " ใช่หรือไม่");
                if(cf==true){
                    document.location = "deleteUser.php?uname="+uname;
                }
            }
        </script>
    </head>
    <body>
        <?php
        $stmt=$pdo->prepare("SELECT * FROM member");
        $stmt->execute();

        while($row=$stmt->fetch()):
        ?>
        Username : <?=$row["username"]?><br>
        ชื่อสมาชิก : <?=$row["name"]?><br>
        ที่อยู่ : <?=$row["address"]?><br>
        <?php
        if($row["mobile"]){
            echo "เบอร์โทรศัพท์ : " . $row["mobile"];
        }else{
            echo "เบอร์โทรศัพท์ : -";
        }
        ?>
        <br>
        อีเมล์ : <?=$row["email"]?><br>
        <a href='#' onclick=deleteUser('<?=$row["username"]?>')>Delete</a>
        <hr>
        <?php endwhile;?>
    </body>
</html>