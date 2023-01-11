<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ar">

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
	<link rel="stylesheet" href="css/main.css">
	<link rel="shortcut icon" href="images/positron2.png" type="image/png" />
	<link rel="icon" href="images/positron2.png" type="image/png" />
	<link rel="shortcut" href="images/positron2.png" type="image/png" />
	<link rel="apple-touch-icon" href="images/positron2.png" type="image/png" />

	<title>X-POSITRON</title>
	<style type="text/css"></style>
	<script type="text/javascript">

	</script>
</head>

<body>
	<?php
	if (isset($_COOKIE['username_cookie'])) {
		$name = $_COOKIE['username_cookie'];
		echo "<div class='welcome'> welcome $name </div>";
	} elseif (isset($_SESSION['username_session'])) {
		$name = $_SESSION['username_session'];
		echo "<div class='welcome'> welcome $name </div>";
	} elseif (isset($_POST['user'])) {
		$name = $_POST['user'];
		echo "<div class='welcome'> welcome $name </div>";
	} else {
		// 	echo "<div class='register'><p> أنت لست مسجل بالموقع (لذلك لا يمكنك التحميل)<br>
		// 	لأنشاء حساب أنقر <a href='signup1.php'>هنا</a>      ( لديك حساب ؟ سجل <a href='login1.php'>هنا</a> )</p></div>";
		echo '<div class="register">
					
					<img src="images/warning-login.png" alt="warning" class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
		
				<div style="min-height: 120px;">
					<div class="collapse collapse-horizontal" id="collapseWidthExample">
						<div class="card card-body" >
						أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)<br>
					 	لأنشاء حساب أنقر <a href="signup.php">هنا</a>  <br>    لديك حساب ؟ سجل <a href="login.php">هنا</a> 						</div>
					</div>
				</div>
			</div>';
	}
	if (isset($_SESSION['username_session']) && $_SESSION['username_session'] == "hetteh") {
		echo '<style type="text/css">.surprise{display: flex;}</style>';
	}
	?>
	<div class="surprise">
		<p>على فكرة نحنا يلي ساوينا الموقع</p>
	</div>
	<div class="parent">
		<span id="home"></span>
		<nav>
			<div class="navbar navbar-expand-lg navbar-light ">
				<div class="container-fluid">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link activate" href="index.php">1st year</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">2nd year</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">3rd year</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">4th year</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">5th year</a>
							</li>
							

						</ul>
					</div>
				</div>
			</div>
			<div class="logout">
				<a href="php/logout.php" class="out">
					<img src="images/logout.png" alt="logout">
					<div class="lo">Logout</div>
				</a>

			</div>
			<a class="question" href="questions.php">الأسئلة <br>الشائعة</a>

		</nav>
		<a href="#home"><img src="images/up-black.png" class='home' alt="jump up"></a>
		<header>
			<p>WELCOME TO <br><span>X-POSITRON</span></p>
			<q>YOU CANNOT HAVE A<br><span>POSITIVE LIFE</span><br>AND A<br> <span><del>NEGATIVE MIND</del></span></q>
			<img src="images/positron2.png" alt="x-positron">
		</header>
		<div class="container">
			<aside>
				<img src="images/menu 3.png" class="button" alt="transport">
				<div class="links">
					<div class="fst">
						<span>فصل أول</span>
						<ul>
							<li><a href="#math1-dire">رياضيات 1</a></li>
							<li><a href="#physics1-dire">فيزيا 1</a></li>
							<li><a href="#mechanic-dire">ميكانيك هندسي</a></li>
							<li><a href="#art-dire">رسم </a></li>
							<li><a href="#E1-dire">انكليزي 1</a></li>
							<li><a href="#arabic-dire">عربي</a></li>
							<li><a href="#culture-dire">ثقافة</a></li>
						</ul>

					</div>
					<hr>
					<div class="sst">
						<span>فصل ثاني</span>
						<ul>
							<li><a href="#math2-dire">رياضيات 2</a></li>
							<li><a href="#physics2-dire">فيزيا 2</a></li>
							<li><a href="#principle-dire">أسس كهرباء</a></li>
							<li><a href="#entrance-dire">مدخل للحاسوب</a></li>
							<li><a href="#workshops-dire">ورشات</a></li>
							<li><a href="#chemic-dire">كيميا</a></li>
							<li><a href="#E2-dire">انكليزي 2</a></li>
						</ul>
					</div>
				</div>
			</aside>
			<section>
				<div class="article hint" style=" height:auto;  padding: 10px 15px 0px 10px ; margin-top:150px;">
					<h1 class="title first" style="box-shadow: none;height:100px; display: flex; flex-direction: row;justify-content: center;align-items: center;"> ما هو <span class="x-gold"> X-POSITRON </span></h1>
					<p class="content start">بموقعنا هاد منشرح كل مادة من مواد قسم هندسة الاتصالات و الألكترون للخمس سنين كلها (هلأ في بس للسنة الأولى و إنشاء الله السنين الجاية منشرح باقي السنين ) ومنرفع روابط لتحميل المحاضرات ، ملحقات ، الكتب ، الدورات مشان نساعدكم بالدراسة ونسهل عليكم مشواركم وتكون احلى خمس سنين بحياتكون ويعم السلام والسعادة و الأفراح بالكون

					</p>
					<p class="content start">_ و انشاء الله ما منقصر عليكم بشي واذا في سؤال أو انتقاد أو اي شي بدكون تتواصلوا معنا مشانو باخر الصفحة في قسم للتواصل معنا <a href="#contact" id="hint-dire"> هنا</a></p>
				</div>
				<div class="article hint " id="hint">
					<button type="button" id="hint1" onclick="hint(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapsehint" aria-expanded="false" aria-controls="collapseExample" style="height:0px;">
						<h1 class="title first hint">لمحة عن الجامعة
							<img src="images/down-arrow.png" id="dbarrow-hint" class="dbarrow">

						</h1>
					</button>
					<script>
						function hint(button) {
							if (button.classname == 'visible') {
								var title = document.getElementsByClassName("title first hint")[0].setAttribute("style", " height:150px; box-shadow: 7px 7px 30px 0px var(--secondary-color);");
								var article = document.getElementById("hint");
								article.setAttribute("style", "height:0px; padding:  0px ;");
								var arrow = document.getElementById("dbarrow-hint");
								arrow.setAttribute("style", "transform: rotate(0deg);");

								var btn1 = document.getElementById("hint1");
								btn1.classname = "";
								var btn1 = document.getElementById("hint2");
								btn1.classname = "";
								window.location.href = '#hint-dire';

							} else {
								var title = document.getElementsByClassName("title first hint")[0].setAttribute("style", " height:100px; box-shadow:none;");
								var article = document.getElementById("hint");
								article.setAttribute("style", "height:auto; padding: 10px 15px 0px 10px ;");
								var arrow = document.getElementById("dbarrow-hint");
								arrow.setAttribute("style", "transform: rotate(90deg);");

								var btn1 = document.getElementById("hint1");
								btn1.classname = "visible";
								var btn1 = document.getElementById("hint2");
								btn1.classname = "visible";
								window.location.href = '#hint-dire';


							}
						}
					</script>
					<button type="button" id="hint2" onclick="hint(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapsehint" aria-expanded="false" aria-controls="collapsehint" style="background-color:transparent;border:none; color:white;text-align: right; padding:10px 15px 0px 10px ">
						<div class="collapse" id="collapsehint">
							<p class="content start ">حقبة جديدة ومرحلة جديدة بحياتكم وحلوة بإذن الله متل ما بتعرفو صرتو جامعة وخايفين وصار في مسؤولية جديدة عليكم ومدري شو بس انتو قدا،هلأ الحياة الجامعية متل ما بيقولو من احلى فترات الحياة الي بعمركم ما رح تنسوها بس بدها تعب وجهد وطبعا سهر ليالي كتير بس اخر شي بتذوقو لذة النجاح انشالله،نحنا بالجامعة عنا كل المواد بتنقسم نظري و عملي العملي تقريبا بكون بين ال 20 و 30 علامة من 100 و الباقي نظري ولحتى تنجح بالمادة لازم يكون مجموع النظري والعملي فوق ال 60 ولح نشرح شلون بكون العملي بكل مادة .</p>
							<p class="content start ">_ملاحظة : جميع الروابط مرفوعة عالميديا فاير و بعضها مضغوطة لذلك يجب فك الضغط اولا للأستخدام</p>

						</div>
					</button>
				</div>
				<div class="article hint" id="apartment">
				<span id="apartment-dire"style="    position: absolute;top: -200px;"></span>

					<button type="button" id="apartment1" onclick="apartment(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapseapartment" aria-expanded="false" aria-controls="collapseExample" style="height:0px;">

						<h1 class="title first apartment">نبذة عن القسم
							<img src="images/down-arrow.png" id="dbarrow-apartment" class="dbarrow">

						</h1>

					</button>
					<script>
						function apartment(button) {
							if (button.classname == 'visible') {
								var title = document.getElementsByClassName("title first apartment")[0].setAttribute("style", " height:150px; box-shadow: 7px 7px 30px 0px var(--secondary-color);");
								var article = document.getElementById("apartment");
								article.setAttribute("style", "height:0px; padding:  0px ;");
								var arrow = document.getElementById("dbarrow-apartment");
								arrow.setAttribute("style", "transform: rotate(0deg);");

								var btn1 = document.getElementById("apartment1");
								btn1.classname = "";
								var btn1 = document.getElementById("apartment2");
								btn1.classname = "";
								window.location.href = '#apartment-dire';

							} else {
								var title = document.getElementsByClassName("title first apartment")[0].setAttribute("style", " height:100px;    box-shadow:none;");
								var article = document.getElementById("apartment");
								article.setAttribute("style", "height:auto; padding: 10px 15px 0px 10px ;");
								var arrow = document.getElementById("dbarrow-apartment");
								arrow.setAttribute("style", "transform: rotate(90deg);");


								var btn1 = document.getElementById("apartment1");
								btn1.classname = "visible";
								var btn1 = document.getElementById("apartment2");
								btn1.classname = "visible";
								window.location.href = '#apartment-dire';

							}
						}
					</script>
					<button type="button" id="apartment2" onclick="apartment(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapseapartment" aria-expanded="false" aria-controls="collapsehint" style="background-color:transparent;border:none; color:white;text-align: right; padding:10px 15px 0px 10px ">
						<div class="collapse" id="collapseapartment">

							<p class="content start ">هندسة الإلكترونيات والاتصالات <br><br>

								تُتْبَعُ هندسة الاتصالات أو الإلكترون والاتصالات بنحو عام إلى الهندسة الكهربائية، ويُعنى هذا الاختصاص بدراسة طيف واسع من المفهومات النظرية والتطبيقات العملية. مدة الدراسة في الجامعات الحكومية السورية كباقي الهندسات 5 سنوات على الأقل...</p>
							<p class="content start ">• ما أهمية هندسة الإلكترون والاتصالات؟<br><br>

								انظر حولك في المنزل، كل جهاز تستخدمه تقريبًا من التلفزيون إلى سخان الميكروويف إلى الهاتف النقال إلى الحاسوب إلى الكاميرا الرقمية إلى الراوتر إلى المكيف إلى الإنفرتر الذي يسهل حياتك حين ينقطع التيار الكهربائي، يعتمد على الإلكترونيات.</p>
							<p class="content start ">أكثر من ذلك، يأمِّن مهندسو الاتصالات تواصلك مع العالم؛ إذ يضعون التصاميم والخطط التنفيذية لشبكات الاتصالات الأرضية والخليوية والفضائية، التي تنقل البيانات الصوتية أو بيانات الوسائط المتعددة التي تتيح لك متابعة المسلسلات على التلفاز ومشاهدة فيديو على اليوتيوب والاتصال بأقربائك وأصدقائك على سكايب مثلًا، وفي قراءة هذا المقال أيضًا، وبسبب ارتباطها بتواصل المجتمع البشري ورفاهيته تعد هذه الهندسة من أكثر المجالات سرعة في النمو الاقتصادي والأكاديمي حول العالم.</p>
							<p class="content start ">• ما هي المجالات التي تُدرَّس في هندسة الإلكترون والاتصالات؟<br><br>

								يمكن -في رأيي المتواضع- أن نُطلِق على هندسة الإلكترون والاتصالات لقب الهندسة الفضفاضة، فالدراسة لهذا الاختصاص تتضمن مجالًا واسعًا للغاية من التخصصات الفرعية، ولا بُدَّ أن ننوه بأن التفاصيل الآتية مأخوذة من المنهاج الخاص في جامعة دمشق لكن معظم الجامعات السورية الأخرى تنحو المنحى نفسه في طريقة توزيع المواد. </p>
							<p class="content start ">يبدأ الدارسون السنتين الأولَيَيْن بدراسة العلوم الأساسية من فيزياء ورياضيات ورسم هندسي، يقضي الدارسون -أيضًا- في هاتين السنتين وقتًا في دراسة مواد مكملة (كيمياء، عربي، قومية، إنكليزي ...)، إضافة إلى أساسيات القوانين الكهربائية والدارات الكهربائية وأسس الإلكترونيات. يُركَّز أكثر في خلال السنتين التي تليهما على الدارات الإلكترونية وعلم أنصاف النواقل والدارات المتكاملة والدارات المنطقية والمعالجات والخوارزميات وبنى المعطيات والتطرق إلى البرمجة الحاسوبية وأساسيات هندسة الاتصالات ومعالجة الإشارة التماثلية والرقمية والتحكم.</p>
							<p class="content start ">وفي السنة الأخيرة تركز المناهج على تقنيات الاتصالات الحديثة في مجال الاتصالات الفضائية والاتصالات الخليوية ونظرية المعلومات والتلفزة والشبكات الحاسوبية. </p>
							<p class="content start ">تتألف معظم المواد من قسم نظري يحظى غالبًا بـ 70 بالمئة من العلامة، وقسم عملي تخصص له غالبًا 30 بالمئة من العلامة. تُعطى علامة القسم النظري حسب الأداء في الامتحان، والقسم العملي تعتمد علاماته على الحضور والمذاكرات والوظائف والمخابر وحلقات البحث (ليس كل ما سبق، بل بعضه، بحسب المادة)</p>
							<p class="content start ">• ما الصعوبات الأساسية في الدراسة؟<br><br>

								ليست جميع المواد سهلة الفهم، الدوام طويل نسبيًّا، فترة الدراسة (5 سنوات) ليست قصيرة، وفيها في عديد من الأماكن الحشو الذي يشعر الطالب معه بأنه يهدر وقتًا على أشياء لا تفيده.</p>
							<p class="content start ">تتطلب دراسة الهندسة بنحو عام تركيبة مرنة للدماغ وقدرة على تحليل المشكلات وهامشًا من الإبداع والابتكار لتوفير الحلول لهذه المشكلات، وبسبب الأنظمة التعليمية الجامعية في بلدنا التي تعاني من ضعف التطور، فإن أثر هذه الميزة ضعيف أيضًا، والاتجاه السائد هو نحو الحفظ ودراسة المواد بهدف النجاح بها فقط، إضافة إلى أن ضعف التشجيع وإعداد المناهج لكثير من المواد يزيد أهمية قضية الاعتماد على الذات، ففي عالم الإنترنت لا يوجد حدود للمعلومات ولا شيء يستطيع منع الطالب من التعلم إذا رغب بذلك.</p>
							<p class="content start ">• ما المهارات التي يكتسبها الطالب في الجامعة؟<br><br>

								يظن كثير من الطلاب أن تخرجهم من الجامعة يوفر لهم المعرفة، والحقيقة أن ما تقوم به الكلية لا يتعدى فك أمية الطالب في مجال الهندسة، فهي توفر لك اطلاعًا أوليًّا على المواد المدروسة، وعليك أنت أن تُنمي معارفك في المجال الذي تراه مناسبًا لتوجهاتك، سواءً كان ذلك خلال فترة دراستك (عن طريق توجهاتك وهواياتك) أم بعد التخرج (عن طريق العمل الذي تُقبل فيه).</p>
							<p class="content start ">• ما هي فرص العمل بعد التخرج؟<br><br>

								كما ذكرنا سابقًا تُعطيك هندسة الاتصالات أفضلية في العمل على مستويين، أولًا المجال الواسع من التخصصات التي تغطيها، وثانيًا النمو الاقتصادي الكبير والمتسارع الذي يشهده عالم التكنولوجيا..</p>

						</div>
					</button>
				</div>
				<div class="h">
					<h1 id="hfir">مواد الفصل الأول</h1>
					<span id="math1-dire"></span>

				</div>
				<div class="article math" id="math1">
					<button type="button" id="mathbtn1" onclick="math1(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapsemath1" aria-expanded="false" aria-controls="collapseExample" style="height:0px;">
						<h1 class="title math1">رياضيات 1
							<img src="images/down-arrow.png" id="dbarrow-math1" class="dbarrow">

						</h1>

					</button>
					<script>
						function math1(button) {
							if (button.classname == 'visible') {
								var title = document.getElementsByClassName("title math1")[0].setAttribute("style", " height:150px; box-shadow: 7px 7px 30px 0px var(--secondary-color);");
								var article = document.getElementById("math1");
								article.setAttribute("style", "height:0px; padding:  0px ;");
								var arrow = document.getElementById("dbarrow-math1");
								arrow.setAttribute("style", "transform: rotate(0deg);");

								var btn1 = document.getElementById("mathbtn1");
								btn1.classname = "";
								var btn1 = document.getElementById("mathbtn2");
								btn1.classname = "";
								window.location.href = '#math1-dire';

							} else {
								var title = document.getElementsByClassName("title math1")[0].setAttribute("style", " height:100px;    box-shadow:none;");
								var article = document.getElementById("math1");
								article.setAttribute("style", "height:auto; padding: 10px 15px 0px 10px ;");
								var arrow = document.getElementById("dbarrow-math1");
								arrow.setAttribute("style", "transform: rotate(90deg);");

								var btn1 = document.getElementById("mathbtn1");
								btn1.classname = "visible";
								var btn1 = document.getElementById("mathbtn2");
								btn1.classname = "visible";
								window.location.href = '#math1-dire';

							}
						}
					</script>
					<div class="collapse" id="collapsemath1">

						<button type="button" id="mathbtn2" onclick="math1(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapsemath1" aria-expanded="false" aria-controls="collapsehint" style="background-color:transparent;border:none; color:white;text-align: right; padding:10px 15px 0px 10px ">
							<p class="content">هي المادة حلوة سلسة وكتير حلوة مالا صعبة بس بدك تنتبه منا فيا نكشات بس درسا كل محاضرة بمحاضرتا بترفع بكل سهولة ومعدل كمان ان شاء الله. هلأ هي المادة مندرس فيا المصفوفات سهلة ومافيا شي ومناخد المتتاليات نفسا الي اخدناها بالبكالوريا ومندرس المتتالية العددية و المتسلسلات العددية يعني المتسلسلات بأنواعها ومندرس شوية عن الدوال والاشتقاق سهلة ما ؟ ^_^، كلو اخدينو بالبكالوريا بس كم شغلة جديدة </p>
							<p class="content">_ هي المادة مالها مخبر يعني بدكون تعملو مذاكرة لتحددو علامة العملي</p>
							<hr>
							<h2>روابط التحميل</h2>

						</button>
						<div class="download">
							<?php
							if (isset($_COOKIE['username_cookie']) || isset($_SESSION['username_session'])) {
								echo '<a href="https://download1497.mediafire.com/b565ypezlpug/oeykah8f93glhyf/%D9%85%D8%AD%D8%A7%D8%B6%D8%B1%D8%A7%D8%AA+%D8%B11+%28X-POSITRON%29.zip">المحاضرات</a>
										<a href="https://download1335.mediafire.com/386px4yw3keg/5n3ro2rnbo242th/%D9%83%D8%AA%D8%A7%D8%A8+%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6%D9%8A%D8%A7%D8%AA+1+%28X-POSITRON%29.pdf">الكتب</a>
										<a href="https://download1319.mediafire.com/b02jg2ldgqfg/2qmvbi7ty99z9ur/%D8%AF%D9%88%D8%B1%D8%A7%D8%AA+%D8%B11+%28X-POSITRON%29.zip">دورات</a>
									';
							} else {
								echo '	
									<a   data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>المحاضرات</a>
									<a
									data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>الكتب</a>
									<a 
									data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>دورات</a>
								';
							}
							?>

						</div>
					</div>
					<span id="physics1-dire"></span>
					<img src="images/math1.png" alt="math1">

				</div>
				<div class="article physics" id="physics1">
					<button type="button" id="physicsbtn1" onclick="physics1(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapsephysics1" aria-expanded="false" aria-controls="collapseExample" style="height:0px;">
						<h1 class="title physics1">فيزيا 1
							<img src="images/down-arrow.png" id="dbarrow-physics1" class="dbarrow">

						</h1>
					</button>
					<script>
						function physics1(button) {
							if (button.classname == 'visible') {
								var title = document.getElementsByClassName("title physics1")[0].setAttribute("style", " height:150px; box-shadow: 7px 7px 30px 0px var(--secondary-color);");
								var article = document.getElementById("physics1");
								article.setAttribute("style", "height:0px; padding:  0px ;");
								var arrow = document.getElementById("dbarrow-physics1");
								arrow.setAttribute("style", "transform: rotate(0deg);");

								var btn1 = document.getElementById("physicsbtn1");
								btn1.classname = "";
								var btn1 = document.getElementById("physicsbtn2");
								btn1.classname = "";
								window.location.href = '#physics1-dire';

							} else {
								var title = document.getElementsByClassName("title physics1")[0].setAttribute("style", " height:100px;    box-shadow:none;");
								var article = document.getElementById("physics1");
								article.setAttribute("style", "height:auto; padding: 10px 15px 0px 10px ;");

								var arrow = document.getElementById("dbarrow-physics1");
								arrow.setAttribute("style", "transform: rotate(90deg);");

								var btn1 = document.getElementById("physicsbtn1");
								btn1.classname = "visible";
								var btn1 = document.getElementById("physicsbtn2");
								btn1.classname = "visible";
								window.location.href = '#physics1-dire';

							}
						}
					</script>
					<div class="collapse" id="collapsephysics1">

						<button type="button" id="physicsbtn2" onclick="physics1(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapsephysics1" aria-expanded="false" aria-controls="collapsehint" style="background-color:transparent;border:none; color:white;text-align: right; padding:10px 15px 0px 10px ">
							<p class="content">_هلأ نحنا بالمادة الأصعب بالفصل الاول متل ما بينقال بس هي سهلة وما بدا شي بس بدا دراسة وتركيز عالي وتحضر كل محاضرة بمحاضرتا وتحاول تحل اكتر عدد من المسائل كل ما حليت اكتر كل ما بتفهم شلون الترتيب تبعن،</p>
							<p class="content"> _هلأ بيقسمولنا النظري للمادة لجزئين جزء مناخد فيه فيزياء الميكانيك بيحكي عن الضغط وحالاتو وعن النواسات الي اخدناها بالبكالوريا بس مناخد جديد النواسات المتخامدة ،</p>
							<p class="content"> _وجزء ضوئية مناخد فيه انواع الضوء وانعكاسه وانكساره والتداخل واخر شي استقطابه ،</p>
							<p class="content">_والعملي منروح عشي اسمو مخبر فيزيا موجود ببناء العلوم الاساسية تاني طابق بتروحو اول مرة بيعطوكن شي اسمو ارتياب وبيفرزوكم فئات فئة A و فئة B لان هاد المخبر اسبوع اي اسبوع لا وعلى حسبها بيعطوكم التجارب ، لازم تروحو عند دفرنت او ابو اديب تشترو دفتر فيزيا عملي لان بدكم تحضرو تجاربكم عليه ، بتجي عوقت فئتكم محضرين تجربتكم وبتفوتو على المخبر بجي المعيد وبيشرحلكم عن التجربة وبيسئلكم عنا يعني لازم تكونو حافظين وبيقلكم شلون تساوو التجربة وبتكتبو شو طلع معكم بالتجربة بالدفتر الي حكينا عنو ، هاد العملي عليه 30 علامة( 20 علامة للمخبر و10 من المذاكرة يلي بيعملا الدكتور ) وانتو بدكم 60 لتنجحو يعني مناح ال 30 مو هيك.</p>
							<hr>
							<h2>روابط التحميل</h2>
						</button>

						<div class="download">
							<?php
							if (isset($_COOKIE['username_cookie']) || isset($_SESSION['username_session'])) {
								echo '
										<a download href="https://download1076.mediafire.com/mhu0aryhdxzg/6xi2ksh6q9m0388/%D9%85%D8%AD%D8%A7%D8%B6%D8%B1%D8%A7%D8%AA+%D9%811+%28X-POSITRON%29.zip">محاضرات</a>
										<a href="https://download1521.mediafire.com/h9lsb29jxyvg/mhxhyphilox9v44/%D9%85%D8%AE%D8%A8%D8%B1+%D9%81%D9%8A%D8%B2%D9%8A%D8%A71%28X-POSITRON%29.zip"> المخبر</a>
										<a href="https://download944.mediafire.com/onwjsp8lmhbg/7w4ws9hukjxght2/%D9%83%D8%AA%D8%A8+%D9%81%D9%8A%D8%B2%D9%8A%D8%A7+1+%28X-POSITRON%29.zip">الكتب</a>
										<a href="https://download1336.mediafire.com/ymxs6wekjhog/s5yux2868zdx84g/%D8%AF%D9%88%D8%B1%D8%A7%D8%AA+%D9%811+%28X-POSITRON%29.zip">دورات</a>
										<a href="https://download1495.mediafire.com/uwbtrqhti9sg/8lrizs6yfv0cs2b/%D9%85%D9%84%D8%AD%D9%82+%D9%81%D9%8A%D8%B2%D9%8A%D8%A71++%D8%B6%D9%88%D8%A6%D9%8A%D8%A9+2020%28X-POSITRON%29.pdf">ملحق فيزيا1 ضوئية</a>

									';
							} else {
								echo '
									<a  data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>محاضرات</a>
								<a  data-toggle="tooltip" 
								data-placement="top" 
								data-trigger="click"
								data-bs-html="true" 
								title="
								<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
								</div> " 
								> المخبر</a>
								<a  data-toggle="tooltip" 
								data-placement="top" 
								data-trigger="click"
								data-bs-html="true" 
								title="
								<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
								</div> " 
								>الكتب</a>
								<a   data-toggle="tooltip" 
								data-placement="top" 
								data-trigger="click"
								data-bs-html="true" 
								title="
								<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
								</div> " 
								>ملحق فيزيا1 ضوئية</a>
								<a   data-toggle="tooltip" 
								data-placement="top" 
								data-trigger="click"
								data-bs-html="true" 
								title="
								<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
								</div> " 
								>دورات</a>';
							}

							?>
						</div>
					</div>
					<span id="mechanic-dire"></span>


					<img src="images/physics1.png" alt="physics1">

				</div>
				<div class="article mechanic" id="mechanic">
					<button type="button" id="mechanicbtn1" onclick="mechanic(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapsemechanic" aria-expanded="false" aria-controls="collapseExample" style="height:0px;">
						<h1 class="title mechanic">ميكانيك هندسي
							<img src="images/down-arrow.png" id="dbarrow-mechanic" class="dbarrow">

						</h1>
					</button>

					<script>
						function mechanic(button) {
							if (button.classname == 'visible') {
								var title = document.getElementsByClassName("title mechanic")[0].setAttribute("style", " height:150px; box-shadow: 7px 7px 30px 0px var(--secondary-color);");
								var article = document.getElementById("mechanic");
								article.setAttribute("style", "height:0px; padding:  0px ;");
								var arrow = document.getElementById("dbarrow-mechanic");
								arrow.setAttribute("style", "transform: rotate(0deg);");

								var btn1 = document.getElementById("mechanicbtn1");
								btn1.classname = "";
								var btn1 = document.getElementById("mechanicbtn2");
								btn1.classname = "";
								window.location.href = '#mechanic-dire';
							} else {
								var title = document.getElementsByClassName("title mechanic")[0].setAttribute("style", " height:100px;    box-shadow:none;");
								var article = document.getElementById("mechanic");
								article.setAttribute("style", "height:auto; padding: 10px 15px 0px 10px ;");

								var arrow = document.getElementById("dbarrow-mechanic");
								arrow.setAttribute("style", "transform: rotate(90deg);");

								var btn1 = document.getElementById("mechanicbtn1");
								btn1.classname = "visible";
								var btn1 = document.getElementById("mechanicbtn2");
								btn1.classname = "visible";
								window.location.href = '#mechanic-dire';

							}
						}
					</script>
					<div class="collapse" id="collapsemechanic">

						<button type="button" id="mechanicbtn2" onclick="mechanic(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapsemechanic" aria-expanded="false" aria-controls="collapsehint" style="background-color:transparent;border:none; color:white;text-align: right; padding:10px 15px 0px 10px ">
							<p class="content">مادة مو صعبة متل مو مبين اسمها بس طبعا هاد ما يعني انو نتركا لأخر الفصل لتنزنق فيها اكيد بدا دراسة وشغل، شو مناخد فيها؟ : مناخد فيها القوى وكيف بتأثر بالأجسام بالسكون و الحركة وكيف نسقط القوى على المحاور الأحداثية وكيف نحسب سرعة وتسارع الأجسام</p>
							<p class="content">_ هي المادة مالها مخبر يعني بدكون تعملو مذاكرة لتحددو علامة العملي</p>
							<hr>
							<h2>روابط التحميل</h2>

						</button>
						<div class="download">
							<?php
							if (isset($_COOKIE['username_cookie']) || isset($_SESSION['username_session'])) {
								echo '
										<a href="https://download1484.mediafire.com/rpqvwayap1fg/y0mm6wb5oqwevuk/%D9%83%D8%AA%D8%A7%D8%A8+%D8%A7%D9%84%D9%85%D9%8A%D9%83%D8%A7%D9%86%D9%8A%D9%83+%D8%A7%D9%84%D9%87%D9%86%D8%AF%D8%B3%D9%8A+%28X-POSITRON%29.pdf">الكتاب</a>
										<a href="https://download1518.mediafire.com/9y0uqmtdkayg/qx1gn2x30f1phf7/%D9%85%D9%84%D8%A7%D8%AD%D9%82+%D9%85%D9%8A%D9%83%D8%A7%D9%86%D9%8A%D9%83+%D9%87%D9%86%D8%AF%D8%B3%D9%8A%28X-POSITRON%29+.zip">ملاحق</a>
										<a href="https://download1327.mediafire.com/5dvirtsd6byg/v31bmdrqdbbvtm1/%D9%85%D8%B3%D8%A7%D8%A6%D9%84+%D8%A5%D8%B6%D8%A7%D9%81%D9%8A%D8%A9+%D9%85%D9%8A%D9%83%D8%A7%D9%86%D9%8A%D9%83+%D9%87%D9%86%D8%AF%D8%B3%D9%8A%28X-POSITRON%29+.zip">مسائل أضافية</a>
										<a href="https://download1491.mediafire.com/2yie9rq4kngg/6f00p7gi7w1r7lz/%D8%AF%D9%88%D8%B1%D8%A7%D8%AA+%D9%85%D9%8A%D9%83%D8%A7%D9%86%D9%8A%D9%83+%D9%87%D9%86%D8%AF%D8%B3%D9%8A+%28X-POSITRON%29.zip">دورات</a>';
							} else {
								echo '	<a data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>الكتاب</a>
									<a data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>ملاحق</a>
									<a data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>مسائل أضافية</a>
									<a data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>دورات</a>';
							}

							?>
						</div>
					</div>
					<span id="art-dire"></span>

					<img src="images/mechanic.png" alt="mechanic">

				</div>
				<div class="article art" id="art">
					<button type="button" id="artbtn1" onclick="art(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapseart" aria-expanded="false" aria-controls="collapseExample" style="height:0px;">
						<h1 class="title art">رسم
							<img src="images/down-arrow.png" id="dbarrow-art" class="dbarrow">

						</h1>
					</button>

					<script>
						function art(button) {
							if (button.classname == 'visible') {
								var title = document.getElementsByClassName("title art")[0].setAttribute("style", " height:150px; box-shadow: 7px 7px 30px 0px var(--secondary-color);");
								var article = document.getElementById("art");
								article.setAttribute("style", "height:0px; padding:  0px ;");
								var arrow = document.getElementById("dbarrow-art");
								arrow.setAttribute("style", "transform: rotate(0deg);");

								var btn1 = document.getElementById("artbtn1");
								btn1.classname = "";
								var btn1 = document.getElementById("artbtn2");
								btn1.classname = "";
								window.location.href = '#art-dire';
							} else {
								var title = document.getElementsByClassName("title art")[0].setAttribute("style", " height:100px;    box-shadow:none;");
								var article = document.getElementById("art");
								article.setAttribute("style", "height:auto; padding: 10px 15px 0px 10px ;");

								var arrow = document.getElementById("dbarrow-art");
								arrow.setAttribute("style", "transform: rotate(90deg);");
								var btn1 = document.getElementById("artbtn1");
								btn1.classname = "visible";
								var btn1 = document.getElementById("artbtn2");
								btn1.classname = "visible";
								window.location.href = '#art-dire';

							}
						}
					</script>
					<div class="collapse" id="collapseart">


						<button type="button" id="artbtn2" onclick="art(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapseart" aria-expanded="false" aria-controls="collapsehint" style="background-color:transparent;border:none; color:white;text-align: right; padding:10px 15px 0px 10px ">
							<p class="content">_ اجينا عالمادة الممتعة يلي بتحس حالك فيها مهندس كبير وما حدا قدك طبعا المادة كلها رسم يعني من الاخر مادة ما رح تمل منا الا اذا الدكتور اخد ال4 ساعات كلها،</p>
							<p class="content">_مكان الحضور بيكون بمبني اسمو مبنى الورشات B هاد ورا بناء الطبية (المبنى الاحمر) بتروحو عبناء الورشات B تاني طابق وفي هنيك مراسم بتشوف بالبرنامج اي مرسم لازم تحضرو فيه ،</p>
							<p class="content">_علامة العملي بتنقسم عالحضور والوظايف الي بيطلبا منك الدكتور والمذاكرة الي بيعملا بعد ما يعلمك شلون المشاريع بتنرسم ،</p>
							<p class="content">_ الأدوات الي بدكم ياها
								هلأ اول شي بدكم ياه دفتر اسمو دفتر كارويات اي كارويات هاد بيجي مقسم بيساعدك بالرسم وبدكم مسطرة بسموها مسطرة T لان شكلها متل ال T و المثلثات القائمة بيكونو زواياه التانية 60 و 45 هي بتساعدكم بالرسم بس مو كتير ضرورية وبدكم لزيق نوعو شو ما كان يكون المهم لزيق مشان تلزقو مشاريعكم عليها لان بيطلب منكم كراتين A3 للمشاريع بعدين وهو بيطلب منكم نوطة لان بيعطي وظايف عليها والمشاريع النهائية عليها نحنا رح نرفعلكم ياها محلولة pdf انشالله وطبعا مو محتاج قلك قلم ومحاية .</p>
							<hr>
							<h2>روابط التحميل</h2>

						</button>
						<div class="download">
							<?php
							if (isset($_COOKIE['username_cookie']) || isset($_SESSION['username_session'])) {
								echo '
										<a href="https://download1321.mediafire.com/q1hwrikmzbhg/xr5ahylh0c4fpnt/%D8%AD%D9%84+%D8%A7%D9%84%D9%86%D9%88%D8%B7%D8%A9+%28X-POSITRON%29.zip">حل النوطة</a>
										<a href="https://download1075.mediafire.com/ynyctlmz3p3g/02nm8z9ll2f3e3j/%D8%AF%D9%88%D8%B1%D8%A7%D8%AA+%D8%B1%D8%B3%D9%85+%D9%87%D9%86%D8%AF%D8%B3%D9%8A%28X-POSITRON%29.zip">دورات</a>';
							} else {
								echo '<a  data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>حل النوطة</a>
									<a  data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>دورات</a>';
							}

							?>

						</div>
					</div>
					<span id="E1-dire"></span>

					<img src="images/pencil.png" alt="art">

				</div>
				<div class="article E" id="E1">

					<button type="button" id="E1btn1" onclick="E1(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapseE1" aria-expanded="false" aria-controls="collapseExample" style="height:0px;">

						<h1 class="title E1">انكليزي 1
							<img src="images/down-arrow.png" id="dbarrow-E1" class="dbarrow">

						</h1>
					</button>
					<script>
						function E1(button) {
							if (button.classname == 'visible') {
								var title = document.getElementsByClassName("title E1")[0].setAttribute("style", " height:150px; box-shadow: 7px 7px 30px 0px var(--secondary-color);");
								var article = document.getElementById("E1");
								article.setAttribute("style", "height:0px; padding:  0px ;");

								var arrow = document.getElementById("dbarrow-E1");
								arrow.setAttribute("style", "transform: rotate(0deg);");

								var btn1 = document.getElementById("E1btn1");
								btn1.classname = "";
								var btn1 = document.getElementById("E1btn2");
								btn1.classname = "";
								window.location.href = '#E1-dire';
							} else {
								var title = document.getElementsByClassName("title E1")[0].setAttribute("style", " height:100px;    box-shadow:none;");
								var article = document.getElementById("E1");
								article.setAttribute("style", "height:auto; padding: 10px 15px 0px 10px ;");

								var arrow = document.getElementById("dbarrow-E1");
								arrow.setAttribute("style", "transform: rotate(90deg);");
								var btn1 = document.getElementById("E1btn1");
								btn1.classname = "visible";
								var btn1 = document.getElementById("E1btn2");
								btn1.classname = "visible";
								window.location.href = '#E1-dire';

							}
						}
					</script>
					<div class="collapse" id="collapseE1">

						<button type="button" id="E1btn2" onclick="E1(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapseE1" aria-expanded="false" aria-controls="collapsehint" style="background-color:transparent;border:none; color:white;text-align: right; padding:10px 15px 0px 10px ">
							<p class="content">هلأ نحنا بالجامعة مناخذ لغة اجنبية يعني مو ضروري انكليزي يمكن تكون فرنسي يمكن روسي او اي لغة تانية على حسب انت شو مفاضل 'وانت عم تفاضل للجامعة بيسألوك اي لغة بدك وانت بتنقي' هلأ نحنا هون لح نحكي ونرفع روابط بس للأنكليزي ليش؟ لأنو انا شخصيا عندي انكليزي والشعب كلو انكليزي وانت عالأغلب انكليزي ف مشان هيك اما بالنسبة للناس اللي ما عندها انكليزي ف انا اسف بس لاقي ملفات لح حاول ارفعها انشاء الله</p>
							<p class="content">_شلون ندرسا ؟<br>في طريقتين اما انك تحضر مع الدكتور كل المحاضرات وتدرسا أو انك ما تحضر ولا محاضرة ولا تعذب حالك اخر الفصل بينزل ملحق للمادة بتدرسو و انشالله بتنجح وبترفعا معدل كمان ولح نرفع الملحق تبع سنتنا pdf بأذن الله</p>
							<p class="content">_هي المادة اتمتة يعني الأسئلة كلها اختر اجابة بالامتحان وما فيها عملي يعني الامتحان من 100 لتنجح بدك 60</p>
							<hr>
							<h2>روابط التحميل</h2>

						</button>
						<div class="download">
							<?php
							if (isset($_COOKIE['username_cookie']) || isset($_SESSION['username_session'])) {
								echo '
										<a href="https://download1078.mediafire.com/3dllk9h2cdtg/t2l6aqtatoqzs5g/%D9%85%D9%84%D8%A7%D8%AD%D9%82%28X-POSITRON%29+E1.zip">ملاحق</a>
										<a href="https://download1503.mediafire.com/078tmqj69z1g/l1i819d42rcmnmt/%D8%AF%D9%88%D8%B1%D8%A7%D8%AA+%28X-POSITRON%29+E1.zip">دورات</a>';
							} else {
								echo '<a  data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>ملاحق</a>
									<a  data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>دورات</a>
							';
							}

							?>
						</div>
					</div>
					<span id="arabic-dire"></span>

					<img 
					
					src="images/E1.png"
					
					alt="E1">

				</div>
				<div class="article arabic" id="arabic">
					<button type="button arabic" id="arabicbtn1" onclick="arabic(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapsearabic" aria-expanded="false" aria-controls="collapseExample" style="height:0px;">

						<h1 class="title arabic">عربي
							<img src="images/down-arrow.png" id="dbarrow-arabic" class="dbarrow">

						</h1>
					</button>
					<script>
						function arabic(button) {
							if (button.classname == 'visible') {
								var title = document.getElementsByClassName("title arabic")[0].setAttribute("style", " height:150px; box-shadow: 7px 7px 30px 0px var(--secondary-color);");
								var article = document.getElementById("arabic");
								article.setAttribute("style", "height:0px; padding:  0px ;");

								var arrow = document.getElementById("dbarrow-arabic");
								arrow.setAttribute("style", "transform: rotate(0deg);");

								var btn1 = document.getElementById("arabicbtn1");
								btn1.classname = "";
								var btn1 = document.getElementById("arabicbtn2");
								btn1.classname = "";
								window.location.href = '#arabic-dire';
							} else {
								var title = document.getElementsByClassName("title arabic")[0].setAttribute("style", " height:100px;    box-shadow:none;");
								var article = document.getElementById("arabic");
								article.setAttribute("style", "height:auto; padding: 10px 15px 0px 10px ;");

								var arrow = document.getElementById("dbarrow-arabic");
								arrow.setAttribute("style", "transform: rotate(90deg);");

								var btn1 = document.getElementById("arabicbtn1");
								btn1.classname = "visible";
								var btn1 = document.getElementById("arabicbtn2");
								btn1.classname = "visible";
								window.location.href = '#arabic-dire';

							}
						}
					</script>
					<div class="collapse" id="collapsearabic">

						<button type="button" id="arabicbtn2" onclick="arabic(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapsearabic" aria-expanded="false" aria-controls="collapsehint" style="background-color:transparent;border:none; color:white;text-align: right; padding:10px 15px 0px 10px ">
							<p class="content">مين منا ما بيعرف يحكي عربي <br> هي المادة الي بترفعا بدون ما تحضر ولا محاضرة بترفعا معدل كمان ، هي المادة أتمتة بين ال50 و ال60 سؤال يعني سهلة ومافيا شي</p>
							<p class="content">_مناخد فيا قصيدتين ودرس العدد والمعدود من التاسع ومناخد المعاجم وانواعا وتواريخا وكتّاب المعاجم وطبعا الإعراب.</p>
							<hr>
							<h2>روابط التحميل</h2>

						</button>
						<div class="download">
							<?php
							if (isset($_COOKIE['username_cookie']) || isset($_SESSION['username_session'])) {
								echo '
										<a href="https://download1493.mediafire.com/0sohdml25srg/ox32wh5bfdsnzi0/%D9%85%D9%84%D8%A7%D8%AD%D9%82+%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A+%28X-POSITRON%29.zip">ملاحق</a>
										<a href="https://download1486.mediafire.com/eoz0ytdajetg/e93lt5zcoiati5e/%D8%AF%D9%88%D8%B1%D8%A7%D8%AA+%D8%B9%D8%B1%D8%A8%D9%8A+%28X-POSITRON%29.zip">دورات</a>';
							} else {
								echo '<a  data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>ملاحق</a>
									<a  data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>دورات</a>';
							}

							?>
						</div>
					</div>
					<span id="culture-dire"></span>

					<img src="images/arabic.png" alt="arabic">

				</div>
				<div class="article culture" id="culture">
					<button type="button culture" id="culturebtn1" onclick="culture(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapseculture" aria-expanded="false" aria-controls="collapseExample" style="height:0px;">

						<h1 class="title culture">ثقافة
							<img src="images/down-arrow.png" id="dbarrow-culture" class="dbarrow">

						</h1>
					</button>
					<script>
						function culture(button) {
							if (button.classname == 'visible') {
								var title = document.getElementsByClassName("title culture")[0].setAttribute("style", " height:150px; box-shadow: 7px 7px 30px 0px var(--secondary-color);");
								var article = document.getElementById("culture");
								article.setAttribute("style", "height:0px; padding:  0px ;");

								var arrow = document.getElementById("dbarrow-culture");
								arrow.setAttribute("style", "transform: rotate(0deg);");

								var btn1 = document.getElementById("culturebtn1");
								btn1.classname = "";
								var btn1 = document.getElementById("culturebtn2");
								btn1.classname = "";
								window.location.href = '#culture-dire';
							} else {
								var title = document.getElementsByClassName("title culture")[0].setAttribute("style", " height:100px;    box-shadow:none;");
								var article = document.getElementById("culture");
								article.setAttribute("style", "height:auto; padding: 10px 15px 0px 10px ;");


								var arrow = document.getElementById("dbarrow-culture");
								arrow.setAttribute("style", "transform: rotate(90deg);");

								var btn1 = document.getElementById("culturebtn1");
								btn1.classname = "visible";
								var btn1 = document.getElementById("culturebtn2");
								btn1.classname = "visible";
								window.location.href = '#culture-dire';

							}
						}
					</script>
					<div class="collapse" id="collapseculture">

						<button type="button" id="culturebtn2" onclick="culture(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapseculture" aria-expanded="false" aria-controls="collapsehint" style="background-color:transparent;border:none; color:white;text-align: right; padding:10px 15px 0px 10px ">
							<p class="content">مادة مالا علاقة بلياقة ولا بفرعنا ولا بالهندسة ولا بأي شي بس مادة سهلة بتترفع من أول سنة بتحكي المادة عن تاريخ الأمة العربية والحروب اللي صارت مع الكيان الصهيوني (يعني مو ثقافة يعني تاريخ )</p>
							<p class="content">_طيب ليش عم ناخد هيك شي؟<br> مشانك انت كمهندس تكون بتعرف كلشي يعني مو معقول انت مهندس بتعرف توصل دارات وتحل اي معادلة بس ما بتعرف ايمتى حرب تشرين التحريرية</p>
							<p class="content">_كيف مندرسا؟<br>متل الأنكليزي كمان في ملحق بينزل اخر الفصل قبل الامتحان بشوي بتدرس منو وبتنجح وبترفعا انشالله نحنا لح نرفع ملحق سنتنا pdf بتشوفو اكيد في اشياء مشتركة من سنتنا</p>
							<p class="content">_هي المادة كمان اتمتة متل الأنكليزي و ما فيها عملي يعني الأمتحان النظري من 100</p>
							<hr>
							<h2>روابط التحميل</h2>

						</button>
						<div class="download">
							<?php
							if (isset($_COOKIE['username_cookie']) || isset($_SESSION['username_session'])) {
								echo '
										<a href="https://download1591.mediafire.com/6yqsyibvwrzg/e2numsbukppj154/%D9%85%D9%84%D8%A7%D8%AD%D9%82+%D8%A7%D9%84%D8%AB%D9%82%D8%A7%D9%81%D8%A9%28X-POSITRON%29.zip">ملاحق</a>
										<a href="https://download1079.mediafire.com/v8q38hucetag/4gakff3a6a2yzu3/%D9%86%D9%88%D8%B7%D8%A9+%D8%A7%D9%84%D8%AB%D9%82%D8%A7%D9%81%D8%A9+%28X-POSITRON%29.pdf">نوطة</a>
										<a href="https://download1591.mediafire.com/x2wat4tvwp2g/ihci13jylm60hq5/%D9%85%D9%84%D9%81%D8%A7%D8%AA+%D8%A5%D8%B6%D8%A7%D9%81%D9%8A%D8%A9+%28X-POSITRON%29.zip">ملفات أضافية</a>
										<a href="https://download1582.mediafire.com/gjnwc6mey1kg/j4anbvbdfdrax6f/%D8%AF%D9%88%D8%B1%D8%A7%D8%AA+%D8%AB%D9%82%D8%A7%D9%81%D8%A9%28X-POSITRON%29+.zip">دورات</a>';
							} else {
								echo '<a  data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>ملاحق</a>
									<a  data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>نوطة</a>
									<a  data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>ملفات أضافية</a>
									<a  data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>دورات</a>
								';
							}

							?>
						</div>
					</div>

					<img src="images/culture.png" alt="culture">

				</div>
				<div class="h">
					<h1 id="hsec">مواد الفصل الثاني</h1>
					<span id="math2-dire"></span>

				</div>
				<div class="article math2" id="math2">
					<button type="button math2" id="math2btn1" onclick="math2(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapsemath2" aria-expanded="false" aria-controls="collapseExample" style="height:0px;">

						<h1 class="title math2">رياضيات 2
							<img src="images/down-arrow.png" id="dbarrow-math2" class="dbarrow">

						</h1>
					</button>

					<script>
						function math2(button) {
							if (button.classname == 'visible') {
								var title = document.getElementsByClassName("title math2")[0].setAttribute("style", " height:150px; box-shadow: 7px 7px 30px 0px var(--secondary-color);");
								var article = document.getElementById("math2");
								article.setAttribute("style", "height:0px; padding:  0px ;");

								var arrow = document.getElementById("dbarrow-math2");
								arrow.setAttribute("style", "transform: rotate(0deg);");

								var btn1 = document.getElementById("math2btn1");
								btn1.classname = "";
								var btn1 = document.getElementById("math2btn2");
								btn1.classname = "";
								window.location.href = '#math2-dire';
							} else {
								var title = document.getElementsByClassName("title math2")[0].setAttribute("style", " height:100px;    box-shadow:none;");
								var article = document.getElementById("math2");
								article.setAttribute("style", "height:auto; padding: 10px 15px 0px 10px ;");

								var arrow = document.getElementById("dbarrow-math2");
								arrow.setAttribute("style", "transform: rotate(90deg);");

								var btn1 = document.getElementById("math2btn1");
								btn1.classname = "visible";
								var btn1 = document.getElementById("math2btn2");
								btn1.classname = "visible";
								window.location.href = '#math2-dire';

							}
						}
					</script>
					<div class="collapse" id="collapsemath2">

						<button type="button" id="math2btn2" onclick="math2(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapsemath2" aria-expanded="false" aria-controls="collapsehint" style="background-color:transparent;border:none; color:white;text-align: right; padding:10px 15px 0px 10px ">
							<p class="content">مادة متل كل مادة من مواد الرياضيات اذا درست كل محاضرة بمحاضرتا بتنجح ما درست سلملي عالشهدا يلي معك</p>
							<p class="content">_شو مناخد فيها؟ <br> بتنقسم لقسمين<br> أول قسم عن التكامل كيف نكامل اي شكل من أشكال التوابع (تآلفي ، كسري ، جذري ، مثلثي ، لوغارتمي ، آسي ..آلخ) ومنحكي عالتكامل المحدد وتطبيقاتو (حساب مساحة ، حساب حجم ، حساب طول منحني ، حساب حجم منحني "اي حجم منحني" ، حساب مركز ثقل المستوي)</p>
							<p class="content">_ثاني قسم بيحكي عن المعادلات التفاضلية شو هي وكيف منحلا وحكي بيملل وما بينفهم<br>طيب منشرحا نحنا شوي <br>المعادلات التفاضلية هي معادلات تحوي مشتق اما مشتق المتغير اما مشتق التابع او التنين <br>كيف منحلا ؟<br>هيك حتاخدو بالمحاضرات اكيد مالح اشرحها هون</p>
							<p class="content">_هي المادة مالا مخبر (بظن بتعرفو) يعني علامة العملي من المذاكرة (كمان بظن بتعرفو) الدكتور بحدد امتى (كمان بظن.....)والعلامة من 20 (العملي)</p>
							<hr>
							<h2>روابط التحميل</h2>

						</button>
						<div class="download">
							<?php
							if (isset($_COOKIE['username_cookie']) || isset($_SESSION['username_session'])) {
								echo '
										<a href="https://download1349.mediafire.com/sud1l8tbepjg/67xmfou0ulrun7b/%D9%85%D8%AD%D8%A7%D8%B6%D8%B1%D8%A7%D8%AA+%D8%B12%28X-POSITRON%29.zip
										">المحاضرات</a>
										<a href="https://download1980.mediafire.com/6wukvkf9dqfg/vpbido8c3qk496j/%D9%83%D8%AA%D8%A7%D8%A8+%D8%B1%D9%8A%D8%A7%D8%B6%D9%8A%D8%A7%D8%AA+2%28X-POSITRON%29+.pdf
										">كتاب</a>
										<a href="https://download1076.mediafire.com/me679efusswg/erm7hvefxxt2m9n/%D9%86%D9%88%D8%B7%D8%A9+%D8%B12%28X-POSITRON%29.zip
										">نوطة</a>
										<a href="https://download849.mediafire.com/meyt1uh3zukg/4qmicdt07keuflq/%D8%AF%D9%88%D8%B1%D8%A7%D8%AA+%D8%B12%28X-POSITRON%29.zip
										">دورات</a>
										';
							} else {
								echo '	<a 
									data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>المحاضرات</a>
									<a 
									data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>كتاب</a>
									<a 
									data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>نوطة</a>
									<a 
									data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>دورات</a>
								';
							}

							?>

						</div>
					</div>
					<span id="physics2-dire"></span>

					<img src="images/math2.png" alt="math2">

				</div>
				<div class="article physics2" id="physics2">
					<button type="button physics2" id="physics2btn1" onclick="physics2(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapsephysics2" aria-expanded="false" aria-controls="collapseExample" style="height:0px;">
						<h1 class="title physics2">فيزيا 2
							<img src="images/down-arrow.png" id="dbarrow-physics2" class="dbarrow">

						</h1>
					</button>
					<script>
						function physics2(button) {
							if (button.classname == 'visible') {
								var title = document.getElementsByClassName("title physics2")[0].setAttribute("style", " height:150px; box-shadow: 7px 7px 30px 0px var(--secondary-color);");
								var article = document.getElementById("physics2");
								article.setAttribute("style", "height:0px; padding:  0px ;");

								var arrow = document.getElementById("dbarrow-physics2");
								arrow.setAttribute("style", "transform: rotate(0deg);");

								var btn1 = document.getElementById("physics2btn1");
								btn1.classname = "";
								var btn1 = document.getElementById("physics2btn2");
								btn1.classname = "";
								window.location.href = '#physics2-dire';
							} else {
								var title = document.getElementsByClassName("title physics2")[0].setAttribute("style", " height:100px;    box-shadow:none;");
								var article = document.getElementById("physics2");
								article.setAttribute("style", "height:auto; padding: 10px 15px 0px 10px ;");

								var arrow = document.getElementById("dbarrow-physics2");
								arrow.setAttribute("style", "transform: rotate(90deg);");

								var btn1 = document.getElementById("physics2btn1");
								btn1.classname = "visible";
								var btn1 = document.getElementById("physics2btn2");
								btn1.classname = "visible";
								window.location.href = '#physics2-dire';

							}
						}
					</script>
					<div class="collapse" id="collapsephysics2">

						<button type="button" id="physics2btn2" onclick="physics2(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapsephysics2" aria-expanded="false" aria-controls="collapsehint" style="background-color:transparent;border:none; color:white;text-align: right; padding:10px 15px 0px 10px ">
							<p class="content">هلأ نحنا بالمادة الأصعب بالفصل جزء تاني <br> هي المادة أمتع وأحلى من الفيزيا1 بكتير بس كمان متل ما حكينا بالفيزيا1 بدا تركيز وتحضر كل محاضرة بمحاضرتا وبترفعا معدل كمان،</p>
							<p class="content">_ هون بقسمولنا النظري ل3 أجزاء <br> جزء مناخد فيا الكهربا الساكنة والحقل الكهربائي وقوانيو والكمون الكهربائي والقوى المغناطيسية ،</p>
							<p class="content">_وجزء ضوئية متل الفيزيا1 بس مناخد فيه الليزر وتطبيقاتو،</p>
							<p class="content">_وجزء اسمو الفيزياء الحديثة مناخد فيه النسبية و علم الكم ،</p>
							<p class="content">_والعملي متل الفيزيا1 بالضبط بس بتجارب الفصل التاني يعني تجارب الفصل الاولى مو متل الفصل التاني بيتغيرو بس نفس النظام ونفس الادوات يعني ما بتشترو شي جديد ابدا،</p>
							<p class="content">_متل ما قلنا العملي عليه 30 علامة 20 منا للمخبر و 10 للمذاكرة يلي بيعملا الدكتور، <br> والنظري 70 بالامتحان الاخير .</p>
							<hr>
							<h2>روابط التحميل</h2>

						</button>
						<div class="download">
							<?php
							if (isset($_COOKIE['username_cookie']) || isset($_SESSION['username_session'])) {
								echo '
										<a href="https://download848.mediafire.com/xnkra3elh63g/mhmml9h5sboyudv/%D9%85%D8%AD%D8%A7%D8%B6%D8%B1%D8%A7%D8%AA+%D9%812+%28X-POSITRON%29.zip
										">المحاضرات</a>
										<a href="https://download937.mediafire.com/znnio7sqvfyg/5fxqkmt2q8ax5eq/%D9%83%D8%AA%D8%A7%D8%A8+%D9%81%D9%8A%D8%B2%D9%8A%D8%A7+2+%D9%86%D8%B8%D8%B1%D9%8A%28X-POSITRON%29.pdf
										">كتاب نظري</a>
										<a href="https://download1076.mediafire.com/6mmqx6u47ahg/l7oxo9vpwbd39hn/%D8%AA%D8%AC%D8%A7%D8%B1%D8%A8+%D9%85%D8%AE%D8%A8%D8%B1+%D8%A7%D9%84%D9%81%D9%8A%D8%B2%D9%8A%D8%A7%28X-POSITRON%29.zip
										">تجارب مخبر الفيزيا</a>
										<a href="https://download1589.mediafire.com/mnoq4c7b414g/zp3tfgeksaf8zcq/%D8%AF%D9%88%D8%B1%D8%A7%D8%AA+%D9%812%28X-POSITRON%29.zip
										">دورات</a>
										';
							} else {
								echo '	
									<a 
									data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>المحاضرات</a>
									<a 
									data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>كتاب نظري</a>
									<a 
									data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>تجارب مخبر الفيزيا</a>
									<a 
									data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>دورات</a>
								';
							}

							?>


						</div>
					</div>
					<span id="principle-dire"></span>

					<img src="images/physics2.png" alt="physics2">

				</div>
				<div class="article principle" id="principle">
					<button type="button principle" id="principlebtn1" onclick="principle(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapseprinciple" aria-expanded="false" aria-controls="collapseExample" style="height:0px;">

						<h1 class="title principle">أسس كهربائية
							<img src="images/down-arrow.png" id="dbarrow-principle" class="dbarrow">

						</h1>
					</button>
					<script>
						function principle(button) {
							if (button.classname == 'visible') {
								var title = document.getElementsByClassName("title principle")[0].setAttribute("style", " height:150px; box-shadow: 7px 7px 30px 0px var(--secondary-color);");
								var article = document.getElementById("principle");
								article.setAttribute("style", "height:0px; padding:  0px ;");

								var arrow = document.getElementById("dbarrow-principle");
								arrow.setAttribute("style", "transform: rotate(0deg);");

								var btn1 = document.getElementById("principlebtn1");
								btn1.classname = "";
								var btn1 = document.getElementById("principlebtn2");
								btn1.classname = "";
								window.location.href = '#principle-dire';
							} else {
								var title = document.getElementsByClassName("title principle")[0].setAttribute("style", " height:100px;    box-shadow:none;");
								var article = document.getElementById("principle");
								article.setAttribute("style", "height:auto; padding: 10px 15px 0px 10px ;");

								var arrow = document.getElementById("dbarrow-principle");
								arrow.setAttribute("style", "transform: rotate(90deg);");

								var btn1 = document.getElementById("principlebtn1");
								btn1.classname = "visible";
								var btn1 = document.getElementById("principlebtn2");
								btn1.classname = "visible";
								window.location.href = '#principle-dire';

							}
						}
					</script>
					<div class="collapse" id="collapseprinciple">

						<button type="button" id="principlebtn2" onclick="principle(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapseprinciple" aria-expanded="false" aria-controls="collapsehint" style="background-color:transparent;border:none; color:white;text-align: right; padding:10px 15px 0px 10px ">
							<p class="content">هي المادة الي بتدخلكم باجواء الهندسة والكهربا وبتخليك تحب وتتعمق بفرعك اكتر واكتر ،</p>
							<p class="content">_المادة هي الها مخبر عليه 20 علامة سهلين مناخدن ومنمشي <br>شلون مناخدن؟<br> بتعملو تجارب متل تجارب مخبر الفيزيا تماما بس قصة تانية يعني كهربا وتوصيل دارات وهكذا ...،<br> موجودين التجارب بالروابط هنن بقلولكم التجربة الي رح تاخدوها التجارب بسيطة والدكاترة شرحن حلو وسلس ،<br> مكان المخبر موجود بقبو بناء الطاقة،<br>اخر شي بيعملوا امتحان يعني لازم تتدرسو منيح وتفهمو تجاربكم،</p>
							<p class="content">_الجزء النظري الي فيو حسابات دقيقة وقوانين جديدة عليكم ،<br>مناخد فيه كيف تحل دارة كهربائية(يعني توجد مقاومات - تيارات - توترات - سعات مكثفات ....) للدارة ،<br> المادة بتغير مفهومكم شوي عن الكهربا والدارات وبتخليكم تفكرو بطريقة تانية .</p>
							<hr>
							<h2>روابط التحميل</h2>

						</button>
						<div class="download">
							<?php
							if (isset($_COOKIE['username_cookie']) || isset($_SESSION['username_session'])) {
								echo '
										<a href="https://download1979.mediafire.com/m9iiv38n0ccg/i4mmheuzolzxwha/%D9%86%D9%88%D8%B7+%D8%A7%D8%B3%D8%B3+%D8%A7%D9%84%D9%83%D9%87%D8%B1%D8%A8%D8%A7%28X-POSITRON%29.zip
										">نوط </a>
										<a href="https://download1594.mediafire.com/wnubh2jkrmog/j4ctyanyvtxa7wt/%D8%AF%D9%88%D8%B1%D8%A7%D8%AA+%D8%A7%D8%B3%D8%B3+%D9%83%D9%87%D8%B1%D8%A8%D8%A7%28X-POSITRON%29.zip
										">دورات</a>
										<a href="https://download1580.mediafire.com/m3mm580oiaig/09fc47ajsmkz41o/%D9%85%D8%AE%D8%A8%D8%B1+%D8%A7%D9%84%D8%A3%D8%B3%D8%B3%28X-POSITRON%29.zip
										">مخبر ألاسس</a>
										';
							} else {
								echo '	
								<a 
								data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>نوط </a>
								<a data-toggle="tooltip" 
								data-placement="top" 
								data-trigger="click"
								data-bs-html="true" 
								title="
								<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
								</div> " 
								>دورات</a>
								<a 
								data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>مخبر ألاسس</a>
								';
							}

							?>

						</div>
					</div>
					<span id="entrance-dire"></span>

					<img src="images/electricPrinciple.png" alt="electricPrinciple">

				</div>
				<div class="article entrance" id="entrance">
					<button type="button entrance" id="entrancebtn1" onclick="entrance(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapseentrance" aria-expanded="false" aria-controls="collapseExample" style="height:0px;">

						<h1 class="title entrance">مدخل للحاسوب
							<img src="images/down-arrow.png" id="dbarrow-entrance" class="dbarrow">

						</h1>
					</button>
					<script>
						function entrance(button) {
							if (button.classname == 'visible') {
								var title = document.getElementsByClassName("title entrance")[0].setAttribute("style", " height:150px; box-shadow: 7px 7px 30px 0px var(--secondary-color);");
								var article = document.getElementById("entrance");
								article.setAttribute("style", "height:0px; padding:  0px ;");

								var arrow = document.getElementById("dbarrow-entrance");
								arrow.setAttribute("style", "transform: rotate(0deg);");

								var btn1 = document.getElementById("entrancebtn1");
								btn1.classname = "";
								var btn1 = document.getElementById("entrancebtn2");
								btn1.classname = "";
								window.location.href = '#entrance-dire';
							} else {
								var title = document.getElementsByClassName("title entrance")[0].setAttribute("style", " height:100px;    box-shadow:none;");
								var article = document.getElementById("entrance");
								article.setAttribute("style", "height:auto; padding: 10px 15px 0px 10px ;");

								var arrow = document.getElementById("dbarrow-entrance");
								arrow.setAttribute("style", "transform: rotate(90deg);");

								var btn1 = document.getElementById("entrancebtn1");
								btn1.classname = "visible";
								var btn1 = document.getElementById("entrancebtn2");
								btn1.classname = "visible";
								window.location.href = '#entrance-dire';

							}
						}
					</script>
					<div class="collapse" id="collapseentrance">

						<button type="button" id="entrancebtn2" onclick="entrance(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapseentrance" aria-expanded="false" aria-controls="collapsehint" style="background-color:transparent;border:none; color:white;text-align: right; padding:10px 15px 0px 10px ">
							<p class="content">مادة سهلة بسيطة بتحسسك بالأمان بهالفصل قدام المواد التانية بتترفع بدون دراسة على ما قد هي سهلة</p>
							<p class="content">_شو مناخد فيها؟ <br>من اسمها "مدخل" مندخل لعالم الكمبيوتر من شو بيتكوّن شلون بيشتغل وشلون بتشتغل كل قطعة فيه ومناخد فيها انظمة العد (الثنائي ، الثماني ، السداسي عشر ، ...) ومنروح منشوف الخوارزميات</p>
							<p class="content">_هالمادة معها مخبر موجود ببناء الأتصالات اول طابق بتروح بتقعد على كمبيوتر بتلعب دق كونتر مع الشباب وبتنبسط وبتروح بترجع على ملل المحاضرات عم امزح مناخد فيه اول شي عن نظام الويندوز كيف تشتغل عليه ومفاهيم اساسية لازم تكون تعرفها بعدين منتعرف على برنامج الوورد والأكسيل والباوربوينت وكيف نشتغل عليهن</p>
							<p class="content">_علامة العملي لهلمادة بس بالمخبر ( الا اذا حب دكتور النظري يعمل مذاكرة ) بيعملو مذاكرة و كل مذاكرة بتكون على قسم ( ويندوز ، وورد ، اكسيل ، باوربوينت )</p>

							<hr>
							<h2>روابط التحميل</h2>

						</button>
						<div class="download">
							<?php
							if (isset($_COOKIE['username_cookie']) || isset($_SESSION['username_session'])) {
								echo '
										<a href="https://download1591.mediafire.com/vcsm649b2gkg/5yo3t05hxvl3o83/%D9%85%D8%AD%D8%A7%D8%B6%D8%B1%D8%A7%D8%AA+%D9%85%D8%AF%D8%AE%D9%84+%D8%A5%D9%84%D9%89+%D8%A7%D9%84%D8%AD%D8%A7%D8%B3%D9%88%D8%A8%28X-POSITRON%29.zip
										">المحاضرات</a>
										<a href="https://download1593.mediafire.com/xi9uvvwaxjdg/tqkf8vpwefdixak/%D9%85%D8%AF%D8%AE%D9%84+%D8%A7%D9%84%D9%89+%D8%A7%D9%84%D8%AD%D8%A7%D8%B3%D9%88%D8%A8++%D8%B9%D9%85%D9%84%D9%8A%28X-POSITRON%29.zip
										">مخبر المدخل</a>
										<a href="https://download1326.mediafire.com/euedbezo8x5g/c5c4vj03catwo7l/%D8%AF%D9%88%D8%B1%D8%A7%D8%AA+%D9%85%D8%AF%D8%AE%D9%84+%D8%A7%D9%84%D9%89+%D8%A7%D9%84%D8%AD%D8%A7%D8%B3%D9%88%D8%A8+%28X-POSITRON%29.zip
										">دورات</a>
									';
							} else {
								echo '
								<a 
								data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>المحاضرات</a>
								<a 
								data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>مخبر المدخل</a>
								<a 
								data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>دورات</a>';
							}

							?>

						</div>
					</div>
					<span id="workshops-dire"></span>

					<img src="images/entrance.png" alt="entrance">

				</div>
				<div class="article workshops" id="workshops">
					<button type="button workshops" id="workshopsbtn1" onclick="workshops(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapseworkshops" aria-expanded="false" aria-controls="collapseExample" style="height:0px;">
						<h1 class="title workshops">ورشات
							<img src="images/down-arrow.png" id="dbarrow-workshops" class="dbarrow">

						</h1>
					</button>

					<script>
						function workshops(button) {
							if (button.classname == 'visible') {
								var title = document.getElementsByClassName("title workshops")[0].setAttribute("style", " height:150px; box-shadow: 7px 7px 30px 0px var(--secondary-color);");
								var article = document.getElementById("workshops");
								article.setAttribute("style", "height:0px; padding:  0px ;");

								var arrow = document.getElementById("dbarrow-workshops");
								arrow.setAttribute("style", "transform: rotate(0deg);");

								var btn1 = document.getElementById("workshopsbtn1");
								btn1.classname = "";
								var btn1 = document.getElementById("workshopsbtn2");
								btn1.classname = "";
								window.location.href = '#workshops-dire';
							} else {
								var title = document.getElementsByClassName("title workshops")[0].setAttribute("style", " height:100px;    box-shadow:none;");
								var article = document.getElementById("workshops");
								article.setAttribute("style", "height:auto; padding: 10px 15px 0px 10px ;");

								var arrow = document.getElementById("dbarrow-workshops");
								arrow.setAttribute("style", "transform: rotate(90deg);");

								var btn1 = document.getElementById("workshopsbtn1");
								btn1.classname = "visible";
								var btn1 = document.getElementById("workshopsbtn2");
								btn1.classname = "visible";
								window.location.href = '#workshops-dire';

							}
						}
					</script>
					<div class="collapse" id="collapseworkshops">
						<button type="button" id="workshopsbtn2" onclick="workshops(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapseworkshops" aria-expanded="false" aria-controls="collapsehint" style="background-color:transparent;border:none; color:white;text-align: right; padding:10px 15px 0px 10px ">
							<p class="content">وصلنا عالورشات المادة يلي كلا عملي وشغل <br> بتستغرب بتقول ورشات شغل ووسخ وفوتة تحت السيارات ؟ <br> طبعا هي مو هيك ابدا ، <br> مكان الورشات بيكون ببناء الورشات بجنب مكتبة ديفرنت تقريبا ،<br> هلأ في 6 ورشات كل وحدة شكل وكل وحدة شغل غير حنشرح كل وحدة ، <br>هلأ كل شعبة بقسموا 6 فئات وبقلب الورشة الوحدة بيقسموكن فئات كمان (على حسب الورشة ) ، <br> كل ورشة يمكن تطلب منكم تقرير ركزو معي منيح اذا طلب تقرير سلموه التقرير ، واذا ما طلب لا تعذبو حالكم ابدا ، يمكن اخر الورشات يعملولكم مقابلة (قلت يمكن لان بوقتي ما ساوو) فانتو وحظكم ، هلأ هنشرح شو هي ال 6 ورشات وشو بتساوو فيها</p>
							<p class="content">1- ورشة السباكة والنماذج <br> هي الورشة بتنقسم قسمين قسم نماذج وقسم سباكة متل مو واضح بالاسم <br> النماذج : بتقولبو نموذج من الخشب ليستخدم بالسباكة يعني بدلو عبعض <br> السباكة: هي قلها قصة ، بيعلمكم كيف تستفادو من قطعة الخشب الي من النماذج بأنكم تقولبو من الرمل هاد النموذج مشان صب الحديد وتشكيل الحديد ، بس طبعا ما رح تصبو حديد وبس هي هية السباكة والنماذج .</p>
							<p class="content">2- ورشة الصفائح واللحام <br> كمان قسمين قسم صفائح وقسم لحام <br> الصفائح :بيعطيكم صفيحة كبير وبيطلب منكم تقسموها بقياسات هو بيطلبا منكم ، كل واحد منكم بياخد 3 قطع صغار (تنتين اكبر من التالتة) وبيقلكم تتنو كل وحدة بمكان معين مو حيلا وبتوصلون مع بعض بالتنيات (الصغير بتكون صلة وصل بين القطعتين الاكبر ) وبعد ما توصلون بيعطوكم مطارق وبتبلشو ضرب بهلقطع اي اي ضرب <br>اللحام : هي بتلحمو مكان الضرب مشان ما تعد تفك مع انو ما رح تفك بعد كل هلضرب بس بتلحمو (ملاحظة صغيرة "يمكن ما تلحمو") قال خطر وبدا اقنعة وأدوات و و .... وبس هي هية الصفائح واللحام .</p>
							<p class="content">3- ورشة الخراطة والتسوية <br> كمان بتنقسم قسمين ... <br> التسوية : بيحكيلكم عن أدوات الخراطة (البياكوليس شلون بيقيس ، والمكرومتر ) بيعلمكم كيف تشتغلو فيهم صح وتقرأ القياسات صح (ملاحظة صغيرة "في تجربة بمخبر الفيزيا 1 اسما على ما أذكر قياسات هيك شي بس متذكر انو اول تجربة هية ") المهم الي عمل هي التجربة بيكون سهل عليه التسوية <br> الخراطة : بتنزلو عالمخارط بيقسموكن فئات كل فئة عمخرطة وبيعطيكم اسطوانة من الحديد وبيعطيكم رسمة بدكم تخرطو الاسطوانة متل الرسمة يلي هي بتشبه البرغي تقريبا بيعطيكم قياسات وبعلمكم كيف تشتغلو وبيترككم تشتغلو كل واحد شوي وكل واحد شوي هييك لتخلصو وبورجوه ياها وهي هية الخراطة والتسوية .</p>
							<p class="content">4- ورشة التمديدات الكهربائية <br> واخيرا بلشنا بالكهربا جونا وملعبنا ، هي الورشة ما بتنقسم قسمين لان الاسم مو قسمين <br> هي الورشة مو بمكان الورشات هي الورشة بقبو بناء الطاقة اول ما تفوتو علورشة بيطلبو منكم ترسمو 4 دارات كل دارة مهمتا شكل ، بعد ما تخلصو رسم بيجي الدكتور وبيشرح وظيفة كل دارة ووين بتستخدم وكيف بتشتغل ، هي الورشة ما فيا عملي (يمكن على حظكم تتغير ) وبس هي هية ورشة التمديدات الكهربائية .</p>
							<p class="content">5-ورشة كهربا السيارات <br> الاسم شو بيوحي اي صح مالا قسمين <br> هي الورشة بعلموكم كيف محرك السيارة بيشتغل و ان كان بنزين وان كان ديزل وبقلولكم الفرق بيناتهم لا تخافو سهلة ، بقلولكم أسماء أجزاء السيارة ووظيفة كل جزء ، وبيورجوكم كيف الاجزاء مترابطين (هو حرفيا بشغل سيارة قدامكم اجزائها الداخلية مبينة ) هي هية ورشة كهربا السيارات .</p>
							<p class="content">6- ورشة كهرباء منزلية <br> مو قسمين<br> أمتع ورشة بلنسبة الي لان سهلة وبسيطة وشغلا حلو <br> اول ما تفوتو على الورشة بتلاقو مولدات كبير انتو كونو سريعين ولحقو اول كم مولد المهم بيعطيكم دفة خشبة مع لمبات ومفك وبينسه وقاطع (سويتش تبع الon والoff) ، <br> بيقلكم اول شي توصلو لمبة وحدة مع المنبع والقاطع ، <br> تاني شي توصلو لمبتين عالتسلسل ، <br> آخر شي توصلو لمبتين علتفرع ،<br> شفتو ما احلاها وهي هية ورشة كهرباء منزلية .</p>

							<hr>
							<h2>روابط التحميل</h2>

						</button>
						<div class="download">
							<?php
							if (isset($_COOKIE['username_cookie']) || isset($_SESSION['username_session'])) {
								echo '
										<a href="https://download1640.mediafire.com/5zjruwwutkhg/ffgkgwbbif7i45u/%D9%88%D8%B1%D8%B4%D8%A7%D8%AA+%D8%AA%D8%AE%D8%B5%D8%B5%D9%8A%D8%A9%28X-POSITRON%29.zip
										">التجارب</a>
										';
							} else {
								echo '<a 
									data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>التجارب</a>
									';
							}

							?>
						</div>
					</div>
					<span id="chemic-dire"></span>

					<img src="images/workshops.png" alt="workshops">

				</div>
				<div class="article chemic" id="chemic">
					<button type="button chemic" id="chemicbtn1" onclick="chemic(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapsechemic" aria-expanded="false" aria-controls="collapseExample" style="height:0px;">

						<h1 class="title chemic">كيمياء
							<img src="images/down-arrow.png" id="dbarrow-chemic" class="dbarrow">

						</h1>
					</button>
					<script>
						function chemic(button) {
							if (button.classname == 'visible') {
								var title = document.getElementsByClassName("title chemic")[0].setAttribute("style", " height:150px; box-shadow: 7px 7px 30px 0px var(--secondary-color);");
								var article = document.getElementById("chemic");
								article.setAttribute("style", "height:0px; padding:  0px ;");

								var arrow = document.getElementById("dbarrow-chemic");
								arrow.setAttribute("style", "transform: rotate(0deg);");

								var btn1 = document.getElementById("chemicbtn1");
								btn1.classname = "";
								var btn1 = document.getElementById("chemicbtn2");
								btn1.classname = "";
								window.location.href = '#chemic-dire';
							} else {
								var title = document.getElementsByClassName("title chemic")[0].setAttribute("style", " height:100px;    box-shadow:none;");
								var article = document.getElementById("chemic");
								article.setAttribute("style", "height:auto; padding: 10px 15px 0px 10px ;");

								var arrow = document.getElementById("dbarrow-chemic");
								arrow.setAttribute("style", "transform: rotate(90deg);");

								var btn1 = document.getElementById("chemicbtn1");
								btn1.classname = "visible";
								var btn1 = document.getElementById("chemicbtn2");
								btn1.classname = "visible";
								window.location.href = '#chemic-dire';

							}
						}
					</script>
					<div class="collapse" id="collapsechemic">

						<button type="button" id="chemicbtn2" onclick="chemic(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapsechemic" aria-expanded="false" aria-controls="collapsehint" style="background-color:transparent;border:none; color:white;text-align: right; padding:10px 15px 0px 10px ">
							<p class="content">هي المادة بينقال عنا "ممتعة و مو ممتعة" <br> مو ممتعة بقسمها النظري يلي بيحكي عن الترموديناميك والغازات (تقريبا نفسا يلي بالبكالوريا ) وعن الكهركيميا وشغلات بتملل <br> ممتعة بقسمها العملي لأنو بتحس حالك كيميائي كبير وانت لابس المريول الأبيض (بقلولكم جيبوه بس مو ضروري) عم تعمل التجارب يلي بمخبر <br>طيب شو هنن التجارب</p>
							<p class="content">1_معايرة : نفسا يلي بالبكالوريا بس هون منطبقا عملي منعاير حمض قوي (حمض كلور الماء) مع اساس قوي(هيدروكسيد الصوديوم) <br></p>
							<p class="content">2_تحديد القساوة الكلية للماء: منعاير الماء بمحلول EDTA (مابعرف شو هو بالضبط) لنشوف كمية الكلس يلي بالماء حتى نعرف اذا هاد الماء بينشرب ولا لا (بيطلع بينشرب شربوه لا تخافو)</p>
							<p class="content">3_معايرة حمض الحماض مع فوق منغنات البوتاسيوم : معايرة عادية ما فيها شي بس انو المشعر هو فوق منغنات البوتاسيوم نفسو ومعادلاتها اكسدة وارجاع</p>
							<p class="content">4_معايرة كبريتات الحديدي مع ثنائي كرومات البوتاسيوم : كمان معايرة عادية بس هون المشعر خارجي (ما منحطو بالمحلول)</p>
							<p class="content">5_تعيين معامل التوزع الأنحلالي لليود بين الماء ورباعي كلور الكربون : هي التجربة مو معايرة (واضح من اسمها) منحدد فيها نسبة انحلال اليود بالمركبات</p>
							<p class="content">6_تعيين حرارة تعديل تفاعل حمض مع أساس : هي التجربة لنقيس كمية الحرارة المنطلقة من تفاعل حمض مع أساس (واضح من أسمها)</p>
							<p class="content">7_تحديد القلوية الكلية و الجزئية للماء : بهي التجربة منقيس نسبة الهيدروكسيد و الكربونات و البيكربونات بالماء ليش؟<br> مشان نحسب قلوية الماء (واضحة صح)</p>
							<p class="content">_لح نحط رابط كل ملخصات التجارب وكيفية العمل تحت</p>
							<p class="content">_المخبر موجود ببناء العلوم الأساسية اخر الطابق الأول (نفس الطابق مع مخبر الفيزيا)</p>
							<p class="content">_علامة العملي بتنقسم 10 علامات بمذاكرة الدكتور <br> و 20 علامة من المخبر</p>
							<hr>
							<h2>روابط التحميل</h2>

						</button>
						<div class="download">
							<?php
							if (isset($_COOKIE['username_cookie']) || isset($_SESSION['username_session'])) {
								echo '
										<a href="https://download1076.mediafire.com/vdziiaz5keag/3t8vk5k5d977q3y/%D9%85%D8%AD%D8%A7%D8%B6%D8%B1%D8%A7%D8%AA+%D9%83%D9%8A%D9%85%D9%8A%D8%A7+%28X-POSITRON%29.zip
										">المحاضرات</a>
										<a href="https://download1083.mediafire.com/8v57dqr9pqag/gresx27nc869x63/%D9%83%D8%AA%D8%A8+%D9%83%D9%8A%D9%85%D9%8A%D8%A7+%28X-POSITRON%29.zip
										">كتب</a>
										<a href="https://download847.mediafire.com/ri406esqndfg/07at9ri0ubbfjwi/%D8%AF%D9%88%D8%B1%D8%A7%D8%AA+%D9%83%D9%8A%D9%85%D9%8A%D8%A7%28X-POSITRON%29.zip
										">دورات</a>
										<a href="https://download1582.mediafire.com/bnd03b0mkhag/dls6r2p9kyawzky/%D9%85%D8%AE%D8%A8%D8%B1+%D8%A7%D9%84%D9%83%D9%8A%D9%85%D9%8A%D8%A7+%28X-POSITRON%29.zip
										">تجارب المخبر</a>
																			';
							} else {
								echo '<a
									data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									 >المحاضرات</a>
									<a
									data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									 >كتب</a>
									<a 
									data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>دورات</a>
									<a 
									data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>تجارب المخبر</a>
									';
							}

							?>

						</div>
					</div>
					<span id="E2-dire"></span>

					<img src="images/chemic.png" alt="chemic">

				</div>
				<div class="article E2" id="E2">
					<button type="button E2" id="E2btn1" onclick="E2(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapseE2" aria-expanded="false" aria-controls="collapseExample" style="height:0px;">
						<h1 class="title E2">انكليزي 2
							<img src="images/down-arrow.png" id="dbarrow-E2" class="dbarrow">

						</h1>
					</button>
					<script>
						function E2(button) {
							if (button.classname == 'visible') {
								var title = document.getElementsByClassName("title E2")[0].setAttribute("style", " height:150px; box-shadow: 7px 7px 30px 0px var(--secondary-color);");
								var article = document.getElementById("E2");
								article.setAttribute("style", "height:0px; padding:  0px ;");

								var arrow = document.getElementById("dbarrow-E2");
								arrow.setAttribute("style", "transform: rotate(0deg);");

								var btn1 = document.getElementById("E2btn1");
								btn1.classname = "";
								var btn1 = document.getElementById("E2btn2");
								btn1.classname = "";
								window.location.href = '#E2-dire';
							} else {
								var title = document.getElementsByClassName("title E2")[0].setAttribute("style", " height:100px;    box-shadow:none;");
								var article = document.getElementById("E2");
								article.setAttribute("style", "height:auto; padding: 10px 15px 0px 10px ;");

								var arrow = document.getElementById("dbarrow-E2");
								arrow.setAttribute("style", "transform: rotate(90deg);");

								var btn1 = document.getElementById("E2btn1");
								btn1.classname = "visible";
								var btn1 = document.getElementById("E2btn2");
								btn1.classname = "visible";
								window.location.href = '#E2-dire';

							}
						}
					</script>
					<div class="collapse" id="collapseE2">
						<button type="button" id="E2btn2" onclick="E2(this)" class="visible" data-bs-toggle="collapse" data-bs-target="#collapseE2" aria-expanded="false" aria-controls="collapsehint" style="background-color:transparent;border:none; color:white;text-align: right; padding:10px 15px 0px 10px ">
							<p class="content">متل الانكليزي 1 ما في شي جديد بدك تحضر المحاضرات وبدك ما تحضر اخر الفصل بينزل ملحق شامل بتدرسو و بترفعا انشالله</p>
							<p class="content">_كمان هي المادة اتمتة وما فيها عملي</p>
							<hr>
							<h2>روابط التحميل</h2>

						</button>
						<div class="download">
							<?php
							if (isset($_COOKIE['username_cookie']) || isset($_SESSION['username_session'])) {
								echo '
										<a href="https://download1501.mediafire.com/alh966plo17g/2a14fyrb8wtdw6l/%D9%85%D9%84%D8%A7%D8%AD%D9%82+E2+%28X-POSITRON%29.zip
										">ملاحق</a>
										<a href="https://download1518.mediafire.com/mb8gdaxswywg/ny5kdn3o1q6seig/%D8%AF%D9%88%D8%B1%D8%A7%D8%AA+E2+%28X-POSITRON%29.zip
										">دورات</a>	';
							} else {
								echo '	<a data-toggle="tooltip" 
									data-placement="top" 
									data-trigger="click"
									data-bs-html="true" 
									title="
									<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
									</div> " 
									>ملاحق</a>
											<a data-toggle="tooltip" 
											data-placement="top" 
											data-trigger="click"
											data-bs-html="true" 
											title="
											<div class=' . 'btn-tooltip' . '>	أنت لست مسجل بالموقع <br>(لذلك لا يمكنك التحميل)
											</div> " 
											>دورات</a>
									';
							}

							?>
						</div>
					</div>
					<img src="images/E2.png" alt="E2">

				</div>

			</section>

		</div>
		<footer>
			<div class="qoute">
				<p>nothing is <br><del>immpossible</del><br> the word itself says <br><strong>Im possible</strong></p>
			</div>
			<div class="contact-us" id="contact">
				<img src="images/positron2.png" alt="x-positron">
				<h2>Contact With US</h2>
				<form action="php/send.php" method="post">
					<div class="form2">
						<?php
						if (isset($_COOKIE['username_cookie'])) {
							echo '<input type="text" name="name-contact-us" placeholder="Username" value=' . $_COOKIE['username_cookie'] . ' pattern="[A-Za-z\s]+" minlength="2" maxlength="30" required readonly class="input readonly">';
						} elseif (isset($_SESSION['username_session'])) {
							echo '<input type="text" name="name-contact-us" placeholder="Username" value=' . $_SESSION['username_session'] . ' pattern="[A-Za-z\s]+" minlength="2" maxlength="30" required readonly class="input readonly">';
						} else {
							echo '<input type="text" name="name-contact-us" placeholder="Username" pattern="[A-Za-z\s]+" minlength="2" maxlength="30" required auto-focus class="input">';
						}
						?>
						<div class="acception">يرجى ادخال الأحرف الأنكليزية فقط</div>

						<input type="email" name="email-contact-us" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="email" required class="input">
						<input type="text area" name="text-contact-us" placeholder="write a Message" minlength="2" required class="input text">
						<input type="submit" value="send" name="contact-us">
					</div>
				</form>
			</div>
			<div class="rights">
				<img src="images/copyright.png" alt="copyright">
				<span>ALL RIGHTS RECEIVED 2021</span>
				<?php
					if(isset($_COOKIE['username_cookie'])&&$_COOKIE['username_cookie']=="test"){
						echo '<a href="https://www.hitwebcounter.com" target="_blank">
						<img src="https://hitwebcounter.com/counter/counter.php?page=7896622&style=0036&nbdigits=6&type=page&initCount=0" title="Free Counter" Alt="web counter"   border="0" /></a>  ';
					}
				?>
						</div>
		</footer>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
		$(function() {
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script>
	
</body>

</html>