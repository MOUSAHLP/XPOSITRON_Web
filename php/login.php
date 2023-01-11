<?php
include 'php/login-tool.php';
?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8" />
   <link rel="stylesheet" href="css/loginstyle.css">
   <link rel="shortcut icon" href="images/positron2.png" type="image/png" />
   <title>X-POSITRON-login</title>
   <style type="text/css">

   </style>
</head>

<body>
   <form method="POST">
      <img src="images/university.png" class="university" alt="university">
      <div class="form">
         <h1>X-POSITRON</h1>
         <img src="images/positron2.png">
         <h2>login</h2>

         <input type="text" name="username" placeholder="Username" minlength="3" maxlength="20" required auto-focus pattern="[A-Za-z\s]+" class="input">
         <div class="acception">يرجى ادخال الأحرف الأنكليزية فقط</div>
         <input type="password" name="password" placeholder="password" minlength="4" maxlength="12" required pattern="[A-Za-z0-9]+" class="input">
         <div class="acception">يرجى ادخال الأحرف الأنكليزية و الأرقام فقط</div>
         <div class="check">
            <input type="checkbox" id="checkbox" name="checkbox" checked>
            <label for="checkbox"></label>
            <span>Keep me <br> logged in</span>
         </div>
         <input type="submit" value="send" name="send">
      </div>
      <p class="not">Dont Have An Account ? signup <a href="signup.php">here</a></p>
   </form>
   <div class="notfound">
      <p>أسم المستخدم أو كلمة المرور خاطئة</p>

   </div>
</body>

</html>
<?php
if (isset($nf)) {
   if ($nf === true) {
      echo $not_found;
   }
}
?>