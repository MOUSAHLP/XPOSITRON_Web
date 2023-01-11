<?php

require "../php/config.php";



        date_default_timezone_set("Asia/Damascus");
        $date =  strval(Date("Y-m-d H:i:s"));

        $table = "";
        switch ($_GET["tableYear"]) {
            case "1":
                $table = "firstYearFiles";
                break;
            case "2":
                $table = "secondYearFiles";
                break;
            case "3":
                $table = "thirdYearFiles";
                break;
            case "4":
                $table = "fourthYearFiles";
                break;
            case "5":
                $table = "fifthYearFiles";
                break;
        }
    if(isset($_GET["save"])){
        $save=$data_base->prepare("UPDATE `$table` SET `subject`='".$_GET["subject"]."'
        ,`fileName`='".$_GET["fileName"]."',
        `year`='".$_GET["year"]."',
        `date`='".$date."'
        ,`folder`='".$_GET["folder"]."',
        `fileSize`='".$_GET["fileSize"]."'
        ,`url`='".$_GET["url"]."'
         WHERE id = ".$_GET["id"]."");
        $save->execute();
    }
    else if(isset($_GET["delete"])){

        $delete=$data_base->prepare("DELETE FROM `$table` WHERE id = ".$_GET["id"]."");
        $delete->execute();


    }
