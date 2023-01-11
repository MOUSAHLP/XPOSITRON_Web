<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="css/main/signupstyle.css">
	<link rel="shortcut icon" href="images/positron2.png" type="image/png" />
	<title>X-POSITRON-signup</title>
	<style type="text/css">
	</style>
	<script type="text/javascript">

	</script>
</head>

<body>
	<form class="signup" method="POST" action="php/signup-tool.php">
		<img src="images/close.png" onclick='
			let signupForm = document.querySelector("form.signup");
            signupForm.style.cssText="left:150%;";
		'>
		<div class="form-signup">
			<h1>X-POSITRON</h1>
			<h2>لتحميل الملفات يجب انشاء حساب أولا</h2>
			<hr>
			<div class="text-signup">
				<input type="text" name="username" placeholder="اسم المستخدم" minlength="3" maxlength="20" required auto-focus pattern="[A-Za-z\s]+" class="input-signup">
				<div class="acception">يرجى ادخال الأحرف الأنكليزية فقط</div>
			</div>

			<div class="password-signup">
				<input type="password" name="password" placeholder="كلمة السر" minlength="4" maxlength="12" required pattern="[A-Za-z0-9]+" class="input-signup">
				<div class="acception">يرجى ادخال الأحرف الأنكليزية و الأرقام فقط</div>
			</div>
			<?php
			require "php/select.php";
			?>
			

		</div>
		<input type="button" value="ارسال" name="send" onclick="validation();">
		<p class="not-signup"><span>ملاحظة</span> : أذا كان لديك حساب من قبل أدخله هنا وسيتم تسجيل الدخول  </p>
		</div>
		<br>
		<div class="enter">
			<p>من فضلك أدخل السنة</p>
		</div>
	</form>
	<script>
		function validation() {
			let text = document.querySelector("form .form-signup .text-signup .input-signup");
			let password = document.querySelector("form .form-signup .password-signup .input-signup");
			let select = document.querySelector("select");
			let enter = document.querySelector(".enter");
			var textReg = /[A-Za-z\s]+/;
			var passwordReg = /[A-Za-z0-9]+/;
			if (!textReg.test(text.value) || text.value.length < 3) {
				text.focus();
			} else if (!passwordReg.test(password.value) || password.value.length < 4) {
				password.focus();
			} else if (select.value == 0) {
				enter.style.cssText = "display:block; animation: enter 3s ease 2s 1 normal ;";
				// this triger when animation ends
				enter.addEventListener("animationend", () => {
					enter.style.removeProperty = "animation";
					enter.style.cssText = "display:none;";
				});
			} else {
				let input = document.querySelector(".submit");
				input.click();
			}
		}
	</script>
	<?php
		function sumbitButton($year){
			echo '
				<script> 
					let input = document.createElement("input");
					input.setAttribute("type" , "submit");
					input.setAttribute("class" , "submit");
					input.style.cssText="position: absolute;visibility: hidden;";
					input.setAttribute("name" , "send'.$year.'");
					let form =document.querySelector("form.signup");
					form.appendChild(input);
				</script>
				';
		}
	?>
</body>

</html>