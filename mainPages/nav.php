<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="Keywords" content="X-POSITRON , xpositron , syria , damascus ,ece , university,syria university ,damascus university ,comunication , hamak , همك ,الاتصالات,دورات, هندسة الأتصالات , سوريا , دمشق ,كلية الهمك , مواد الهمك ,مواد هندسة الاتصالات , قسم هندسة الاتصالات , جامعة دمشق , شرح مواد, جامعة,الجامعة,اول يوم جامعة,اول يوم جامعه,جامعه,جامعة عريقة,جامعة قديمة,جامعات,جامعة زالنجي,جامعة تاريخية,جامعة المنصورة,طلاب جامعة زويل,شنطة الجامعة,فلوق الجامعة,أيام الجامعة,أول يوم جامعة!,منح جامعة امريكا,حقيبة الجامعة,نصائح للجامعة,يوم في الجامعة,أول يوم جامعة في دبي,مشترياتي للجامعة">
	<meta name="author" content="EM Industry">
	<meta name="description" content="موقع لشرح مواد قسم هندسة الاتصالات و الالكترونيات وتحميل المحاضرات و الدورات و مساعدة الطلاب">
	<meta property="og:title" content="X-POSITRON">
	<meta property="og:description" content="موقع لشرح مواد قسم هندسة الاتصالات و الالكترونيات وتحميل المحاضرات و الدورات و مساعدة الطلاب">
	<meta property="og:image" content="images/positron2.png">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="315">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main/nav.css">
	<link rel="shortcut icon" href="images/positron2.png" type="image/png" />
	<link rel="icon" href="images/positron2.png" type="image/png" />
	<link rel="shortcut" href="images/positron2.png" type="image/png" />
	<link rel="apple-touch-icon" href="images/positron2.png" type="image/png" />

	<title>X-POSITRON</title>
	<style type="text/css">

	</style>
	<script type="text/javascript">

	</script>
</head>

<body>

	<!-- start nav -->
	<nav>
		<div class="navbar navbar-expand-lg navbar-light ">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					<!-- <img src="images/menu2.png"> -->
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link mainpage" href="index.php" >الصفحة الرئيسية</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="firstYear.php">السنة الأولى</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="secondYear.php">السنة الثانية</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="thirdYear.php">السنة الثالثة</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="fourthYear.php">السنة الرابعة</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="fifthYear.php">السنة الخامسة</a>
						</li>


					</ul>
				</div>
			</div>
		</div>
		<a class="question" href="questions.php">الأسئلة <br>الشائعة</a>
		<a class="advices" href="advices.php"> قسم<br>النصائح</a>
		

	</nav>
	<!-- end nav -->

	<script>

	</script>
	<?php
	function setYear($year)
	{

		echo '
			<script>
	
			function setActive(year) {
	
				var lis = document.querySelectorAll(".nav-link");
				lis.forEach(element => {
					element.classList.remove("activate");
				});
	
				lis.forEach((element, i) => {
					if (i == year) {
						element.classList.add("activate");
					}
				});
			}
			setActive(' . $year . ');
			</script>
					';
	}
	?>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>