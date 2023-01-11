<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/popup.css" rel="stylesheet">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/nav.css">

    <style type="text/css">
        .form.post {
            left: 50%;
        }

        .input-container {
            height: 100px;
        }
        .toggle-button span{
            border-color: transparent #15172b transparent transparent!important;
        }

        @media(min-width : 992px) {

            .grid {
                grid-template-columns: repeat(1, minmax(100px, 1fr));
            }

            .input-container {
                height: 60px;
            }
        }
    </style>
</head>

<body>


    <nav>
        <div class="tools">
        </div>
        <span>Add Post</span>
    </nav>

    <div class="form post">
        <form method="GET">
            <div class="title">Add Post</div>
            <div class="grid">
                <div class="input-container ic1">
                    <input id="text" name="text" class="input" type="text" placeholder=" " />
                    <div class="cut"></div>
                    <label for="text" class="placeholder">Text</label>
                </div>
                <div class="input-container ic2">
                    <input id="img1" name="img1" class="input" type="text" placeholder=" " />
                    <div class="cut "></div>
                    <label for="img1" class="placeholder">Img1</label>
                </div>
                <div class="input-container ic2">
                    <input id="img2" name="img2" class="input" type="text" placeholder=" " />
                    <div class="cut "></div>
                    <label for="img2" class="placeholder">Img2</label>
                </div>
                <div class="input-container ic2">
                    <input id="img3" name="img3" class="input" type="text" placeholder=" " />
                    <div class="cut "></div>
                    <label for="img3" class="placeholder">Img3</label>
                </div>
                <div class="input-container ic2">
                    <input id="img4" name="img4" class="input" type="text" placeholder=" " />
                    <div class="cut "></div>
                    <label for="img4" class="placeholder">Img4</label>
                </div>
                <div class="input-container ic2">
                    <input id="img5" name="img5" class="input" type="text" placeholder=" " />
                    <div class="cut "></div>
                    <label for="img5" class="placeholder">Img5</label>
                </div>
            </div>
            <div class="actions">
                <button type="submit" name="submit" class="submit">Send</button>
            </div>
        </form>
    </div>
    <?php
    require "php/drawer.php";
    ?>
</body>

</html>
<?php
require '../php/config.php';
require_once '../flutter/notification.php';
if (isset($_GET["submit"])) {

    $user_id=266;
    $text=$_GET["text"];
    $img1=$_GET["img1"];
    $img2=$_GET["img2"];
    $img3=$_GET["img3"];
    $img4=$_GET["img4"];
    $img5=$_GET["img5"];
    date_default_timezone_set("Asia/Damascus");
    $date =  strval(Date("Y-m-d H:i:s"));


    $sql_insert=$data_base->prepare("INSERT INTO posts (id_user, text , type,date , status ,img1,img2,img3,img4,img5) VALUES 
    ('$user_id','$text','X-POSITRON','$date','1','$img1','$img2','$img3','$img4','$img5')");

// INSERT INTO `posts`( `id_user`, `text`, `type`, `date`, `status`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES (266,"cdeef",'x-positron','ddwcd','1','img1','img1','img1','img1','img1')
    if($sql_insert->execute()){
    sendGCM(
        266,
        "منشور جديد",
        " تم اضافة منشور جديد من قبلنا",
        "https://xpositron.000webhostapp.com/images/positron2.png"
    );}
}
?>