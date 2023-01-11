<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/nav.css">

    <style type="text/css">
        
    </style>
</head>

<body>

    <nav>
        <div class="tools">

            <img src="../images/menu1.png" class="menu">
            <div class="sortingBox">
                <form method="GET">
                    <button type="submit" name="sort" value="all">all Files</button>
                    <button type="submit" name="sort" value="0">First Year</button>
                    <button type="submit" name="sort" value="1">second Year</button>
                    <button type="submit" name="sort" value="2">third Year</button>
                    <button type="submit" name="sort" value="3">foruth Year</button>
                    <button type="submit" name="sort" value="4">fifth Year</button>
                </form>
            </div>
            <img src="../images/add.png" class="add">
            <form method="GET" class="sortId">
                <button type="submit" name="sortId">
                    <img src="../images/sort-id.png" class="add">
                </button>
            </form>
            <?php
            require "php/sortId.php";
            ?>
        </div>
        <span>All Files</span>
    </nav>



    <div class="form">
        <form method="GET">
            <div class="title">Edit / Delete File</div>
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

                <div class="input-container ic2">
                    <input id="folder" name="folder" class="input" type="text" placeholder=" " />
                    <div class="cut "></div>
                    <label for="folder" class="placeholder">Folder</label>
                </div>
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
                <button type="submit" name="delete" class="submit delete">Delete</button>
                <button type="submit" name="save" class="submit">Save</button>
            </div>
        </form>
        <div class="close"><img src="../images/close.png"></div>
    </div>

    <?php
    require "addFile.php";
    require "php/drawer.php";
    ?>

    <div class="container">

        <table class="table">
            <thead>
                <th>id</th>
                <th>subject</th>
                <th>fileName</th>
                <th>date</th>
                <th>folder</th>
                <th>fileSize</th>
                <th>url</th>
                <th>change</th>
            </thead>
            <tbody>
                <?php
                require "../php/config.php";

                if (isset($_GET["save"]) || isset($_GET["delete"])) {
                    require "php/savedeletFile.php";
                }


                $allFilesYear = [
                    "firstYearFiles",
                    "secondYearFiles",
                    "thirdYearFiles",
                    "fourthYearFiles",
                    "fifthYearFiles"
                ];

                for ($i = 0; $i < 5; $i++) {
                    $allFiles = $data_base->prepare("SELECT * FROM $allFilesYear[$i]");
                    $allFiles->execute();
                    if (isset($_GET["sort"]) && $_GET["sort"] != $i && $_GET["sort"] != "all") {
                        continue;
                    }

                    foreach ($allFiles as $file) {
                        echo '
                    
                <tr>
                    <td data-label="id">' . $file["id"] . '</td>
                    <td data-label="subject">' . $file["subject"] . '</td>
                    <td data-label="fileName">' . $file["fileName"] . '</td>
                    <td data-label="date">' . $file["date"] . '</td>
                    <td data-label="folder">' . $file["folder"] . '</td>
                    <td data-label="fileSize">' . $file["fileSize"] . '</td>
                    <td data-label="url">' . $file["url"] . '</td>
                    <td data-label="year" style="display:none;">' . $file["year"] . '</td>
                    <td data-label="tableYear" style="display:none;">' . strval( $i + 1) . '</td>
                    <td data-label="change"><button onclick="showForm(this)">Change</button></td>
                </tr>
               
                ';
                    }
                }



                ?>
            </tbody>
        </table>

    </div>




    <script>
        // menu
        let menuImg = document.querySelector("nav img");
        let sortingBox = document.querySelector("nav .sortingBox form");
        menuImg.onclick = function() {
            sortingBox.classList.toggle("show");
        };

        let form = document.querySelector(".form");
        let inputs = document.querySelectorAll(".input-container .input");

        // to show form
        function showForm(button) {
            form.classList.toggle("show");
            let children = button.parentElement.parentElement.children;

            [...children].forEach(td => {
                inputs.forEach(input => {
                    if (input.id == td.dataset.label) {
                        input.value = td.innerText;
                    }
                });
            });
        };

        //close button
        let close = document.querySelector(".form .close img");
        close.onclick = function() {
            form.classList.toggle("show");
        };
    </script>
    <script src="js/table.js"></script>

</body>

</html>


<!-- <div class="file">
                <div class="info">
                    <span>'.$file["fileName"].'</span>
    
                </div>
                <div class="info">
                    <span>id : '.$file["id"].'</span>
                    <span>السنة : '.$i + 1 .'</span>
    
                </div>
                <div class="info">
                    <span>'.$file["subject"].'</span>
                    <span>'.number_format($file["fileSize"] / 1024 / 1024,1,'.','') .' (MB)</span>
                </div>
                <div class="info">
                    <span>'.$file["folder"].'</span>
              </div>
    
                <button> حذف الملف</button>
            </div> -->