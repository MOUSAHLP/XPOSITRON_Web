<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-POSITRON-AddFile</title>
    <style type="text/css">
        .form.add {
            right: 150%;
        }

        .form.add.show {
            right: 50%;
        }

        select {
            height: 50px;
            margin-top: 38px;
            background-color: #303245;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px;
            width: 100%;
            text-align: center;
            z-index: 2;
        }
    </style>

</head>

<body>
    <div class="form add">
        <form method="GET">
            <div class="title">Add a New File</div>
            <div class="grid">
                <div class="input-container ic1">
                    <input id="id" name="id" class="input" type="number" placeholder=" " />
                    <div class="cut"></div>
                    <label for="id" class="placeholder">Id</label>
                </div>
                <div class="input-container ic2">
                    <input id="subject" name="subject" class="input" type="text" placeholder=" " />
                    <div class="cut"></div>
                    <label for="subject" class="placeholder">Subject</label>
                </div>
                <div class="input-container ic2">
                    <input id="fileName" name="fileName" class="input" type="text" placeholder=" " />
                    <div class="cut "></div>
                    <label for="fileName" class="placeholder">FileName</label>
                </div>
                <div class="input-container ic2">
                    <input id="year" name="year" class="input" type="number" placeholder=" " />
                    <div class="cut "></div>
                    <label for="year" class="placeholder">Year</label>
                </div>
                <select name="sortYear">
                    <option value="1">1st Year</option>
                    <option value="2">2nd Year</option>
                    <option value="3">3rd Year</option>
                    <option value="4">4th Year</option>
                    <option value="5">5th Year</option>
                </select>
                <div class="input-container ic2">
                    <input id="fileSize" name="fileSize" class="input" type="number" lang="en" placeholder=" " />
                    <div class="cut "></div>
                    <label for="fileSize" class="placeholder">FileSize</label>
                </div>
            </div>
            <div class="input-container ic2">
                <input id="url" name="url" class="input" type="text" placeholder=" " />
                <div class="cut "></div>
                <label for="url" class="placeholder">Url</label>
            </div>
            <div class="input-container" style="display :none;">
                <input id="tableYear" name="tableYear" class="input" type="text" placeholder=" " />
                <div class="cut "></div>
                <label for="tableYear" class="placeholder">tableYear</label>
            </div>
            <div class="actions">
                <div class="input-container ic2">
                    <input id="folder" name="folder" class="input" type="text" placeholder=" " />
                    <div class="cut "></div>
                    <label for="folder" class="placeholder">Folder</label>
                </div>
                <button type="submit" name="submit" class="submit">Add</button>
            </div>
        </form>
        <div class="close"><img src="../images/close.png"></div>
    </div>
    <script>
        let formAdd = document.querySelector(".form.add");
        let addImage = document.querySelector("nav img.add");

        // to show form
        addImage.onclick = function(button) {
            formAdd.classList.toggle("show");
        };

        //close button
        let closeAdd = document.querySelector(".form.add .close img");
        closeAdd.onclick = function() {
            formAdd.classList.toggle("show");
        };
    </script>
</body>

</html>


<?php

require "../php/config.php";


if (isset($_GET["submit"])) {
    addFile();
}


?>

<?php
// functions
function addFile()
{

    require "../php/config.php";
    if ($data_base) {
        $subject = $_GET["subject"];

        $fileName = $_GET["fileName"];

        $sortYear = $_GET["sortYear"];

        $year = $_GET["year"];

        $size = $_GET["fileSize"];

        $url = $_GET["url"];

        $id = $_GET["id"];

        $folder = $_GET["folder"];

        date_default_timezone_set("Asia/Damascus");
        $date =  strval(Date("Y-m-d H:i:s"));

        $table = "";
        switch ($sortYear) {
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


        if ($folder == "") {
            $folder = null;
        }


        // $fileName = iconv("windows-1256","utf-8",$fileName);


        // ALTER TABLE `firstyearfiles` CHANGE `id` `id` INT(11) NOT NULL;

        // ALTER TABLE `firstyearfiles` DROP PRIMARY KEY;

        // ALTER TABLE `firstyearfiles` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`);
        
        if ($id == ""  && $table != "") {
            
            
            $sql_insert = $data_base->prepare("INSERT INTO $table (subject, fileName , year, fileSize , date, folder, url) VALUES ('$subject',
        '$fileName',
        '$year',
        '$size',
        '$date',
        '$folder',
        '$url')");
            $sql_insert->execute();
        }

            if ($id != ""  && $table != "") {
                //remove auto increament
                $remove_auto_increament = $data_base->prepare("ALTER TABLE `$table` CHANGE `id` `id` INT(11) NOT NULL;");
                $remove_auto_increament->execute();

                //remove PRIMARY key
                $remove_PRIMARY_key = $data_base->prepare("ALTER TABLE `$table` DROP PRIMARY KEY;");
                $remove_PRIMARY_key->execute();

                //increas   All   Ids
                $increasAllIds = $data_base->prepare("UPDATE `$table` SET `id`= id + 1 WHERE id >= '$id'");
                $increasAllIds->execute();

                $sql_insert = $data_base->prepare("INSERT INTO $table (id,subject, fileName , year, fileSize , date, folder, url) VALUES (
        '$id',
        '$subject',
        '$fileName',
        '$year',
        '$size',
        '$date',
        '$folder',
        '$url')");
                $sql_insert->execute();

                //add PRIMARY key
                $add_PRIMARY_key = $data_base->prepare("ALTER TABLE `$table` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`);");
                $add_PRIMARY_key->execute();
            }
        
    }
}

?>