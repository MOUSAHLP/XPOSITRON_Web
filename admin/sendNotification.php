<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/popup.css" rel="stylesheet">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/nav.css">

    <style type="text/css">
        .table td[data-label="url"],
        .table td[data-label="token"],
        .table td[data-label="userImage"] {
            overflow-wrap: anywhere;
        }

        .input-container {
            height: 100px;
        }

        .input.token {
            width: 200%;
        }

        @media(min-width : 992px) {

            .grid {
                grid-template-columns: repeat(1, minmax(100px, 1fr));
            }

            .input-container {
                height: 60px;
            }

            .input.token {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<?php
        require "php/drawer.php";
    ?>
    <nav>
        <div class="tools">
            <img src="../images/add.png" class="add">
        </div>
        <span>Send Notification</span>
    </nav>

    <div class="form notification">
        <form method="GET">
            <div class="title">Send A Notification</div>
            <div class="grid">
                <div class="input-container ic1">
                    <input id="id" name="id" class="input" type="number" placeholder=" " />
                    <div class="cut"></div>
                    <label for="id" class="placeholder">Id</label>
                </div>
                <div class="input-container ic2">
                    <input id="title" name="title" class="input" type="text" placeholder=" " />
                    <div class="cut"></div>
                    <label for="title" class="placeholder">Title</label>
                </div>
                <div class="input-container ic2">
                    <input id="body" name="body" class="input" type="text" placeholder=" " />
                    <div class="cut "></div>
                    <label for="body" class="placeholder">Body</label>
                </div>
                <div class="input-container ic2">
                    <input id="img" name="img" class="input" type="text" placeholder=" " />
                    <div class="cut "></div>
                    <label for="img" class="placeholder">Img</label>
                </div>
                <div class="input-container ic2">
                    <input id="token" name="token" class="input token" type="text" placeholder=" " />
                    <div class="cut "></div>
                    <label for="token" class="placeholder">Token</label>
                </div>
            </div>
            <div class="actions">
                <button type="submit" name="submit" class="submit">Send</button>
            </div>
        </form>
        <div class="close"><img src="../images/close.png"></div>
    </div>

    <div class="container">

        <table class="table">
            <thead>
                <th>id</th>
                <th>username</th>
                <th>password</th>
                <th>year</th>
                <th>date</th>
                <th>userImage</th>
                <th>verified</th>
                <th>token</th>
                <th>change</th>
            </thead>
            <tbody>
                <?php
                require "../php/config.php";

                $users = $data_base->prepare("SELECT * FROM users");
                $users->execute();

                foreach ($users as $user) {
                    $token = $data_base->prepare("SELECT * FROM token WHERE id_user = " . $user['id'] . " ");
                    $token->execute();
                    // $token = $token->fetch(PDO::FETCH_ASSOC);
                    $finalTokens = [];
                    while ($row = $token->fetch(PDO::FETCH_ASSOC)) {

                        $finalTokens[] = $row["token"];
                    }

                    $tokenUser = implode("<br>", $finalTokens);

                    echo '
                                <tr>
                                    <td data-label="id">' . $user["id"] . '</td>
                                    <td data-label="username">' . $user["username"] . '</td>
                                    <td data-label="password">' . $user["password"] . '</td>
                                    <td data-label="year">' . $user["year"] . '</td>
                                    <td data-label="date">' . $user["date"] . '</td>
                                    <td data-label="userImage">' . $user["userImage"] . '</td>
                                    <td data-label="verified">' . $user["verified"] . '</td>
                                    <td data-label="token">' . $tokenUser . '</td>
                                    <td data-label="change"><button onclick="showForm(this)">send</button></td>
                                </tr>
                          ';
                }

                ?>
            </tbody>
        </table>

    </div>
    
    <script>
        // to show form
        let form = document.querySelector(".form.notification");
        let input = document.querySelector(".input-container .input.token");

        function showForm(button) {
            form.classList.toggle("show");
            let children = button.parentElement.parentElement.children;
            [...children].forEach(td => {
                if (input.id == td.dataset.label) {
                    input.value = td.innerText;
                }
            });
        };

        //close button
        let close = document.querySelector(".form .close img");
        close.onclick = function() {
            form.classList.toggle("show");
        };

        let sendToAll = document.querySelector("nav img");
        sendToAll.onclick = function() {
            form.classList.toggle("show");
        };
    </script>
</body>

</html>
<?php
require '../php/config.php';
require_once '../flutter/notification.php';
if (isset($_GET["submit"])) {
    $userTokens = explode("<br>", $_GET["token"]);
    for ($i = 0; $i < sizeof($userTokens); $i++) {
        sendGCM(
            $_GET["id"],
            $_GET["title"],
            $_GET["body"],
            $_GET["img"],
            $userTokens[$i]
        );
    }
}
?>