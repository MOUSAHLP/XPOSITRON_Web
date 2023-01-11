<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        *{
            box-sizing: border-box;

        }
        .drawer {
            height: 100vh;
            width: 300px;
            background-color: white;
            position: fixed;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
            padding: 20px;
            font-size: 18px;
            left: -301px;
            z-index: 100000000;
            transition: 0.6s;
        }

        .drawer.show {
            left: 0px;
        }

        .box {
            width: 100%;
            background-color: white;
            padding: 20px;
            color: #10cab7;
            border: #10cab7 2px solid;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
            transition: 0.3s;
            text-decoration: none;
        }

        .box:hover {
            background-color: #10cab7;
            color: white;
        }

        .toggle-button {
            position: absolute;
            left: 300px;
            display: flex;
            color: white;
            overflow: hidden;
            background-color: #2196f3;
            padding: 10px 50px 10px 10px;
            cursor: pointer;
        }

        .toggle-button span {
            width: 0px;
            height: 0px;
            border-style: solid;
            border-width: 40px;
            border-color: transparent white transparent transparent;
            position: absolute;
            right: -1px;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>

<body>
    <div class="drawer">
        <div class="toggle-button">
            Drawer<span></span>
        </div>
        <a class="box" href="getFiles.php">Add Files</a>
        <a class="box" href="addPost.php">Add Post</a>
        <a class="box" href="sendNotification.php">Send Notification</a>
    </div>
    <script>
        let toggle = document.querySelector(".toggle-button");
        let drawer = document.querySelector(".drawer");
        toggle.onclick = function() {
            drawer.classList.toggle("show");
        };
    </script>
</body>

</html>