<?php

function login($username, $password) {
global $conn_link;
$query = "SELECT * FROM users WHERE user_name='$username' and 
user_pass='$password'";
if ($result = mysqli_query($conn_link,$query))
{
if(mysqli_num_rows($result) == '1')
{
return true;
}
else
{
return false;
}
}
else
{
return false;
}
}

l

if(!preg_match('/^\D\S\[a-zA-Z]+$/',$input)) {
   // String contains not allowed characters ...
}
pattern="[A-Za-z]+"
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



By using the below code we redirect the page

$page = $_SERVER['REQUEST_URI'];
echo '<script type="text/javascript">';
echo 'window.location.href="'.$page.'";';
echo '</script ;

<p class="content start">وصلنا عالورشات المادة يلي كلا عملي وشغل <br> بتستغرب بتقول ورشات شغل ووسخ وفوتة تحت السيارات ؟ <br> طبعا هية  مو هيك ابدا ، <br> مكان الورشات بيكون ببناء الورشات بجنب مكتبة ديفرنت تقريبا ،<br>  هلأ في 6 ورشات كل وحدة شكل وكل وحدة شغل غير  حنشرح كل وحدة ، <br>هلأ كل شعبة بقسموا 6 فئات وبقلب الورشة الوحدة بيقسموكن فئات كمان (على حسب الورشة ) ، <br> كل ورشة يمكن تطلب منكم تقرير ركزو معي منيح اذا طلب تقرير سلموه التقرير ، واذا ما طلب لا تعذبو حالكم ابدا ، يمكن اخر الورشات يعملولكم مقابلة (قلت يمكن لان بوقتي ما ساوو) فانتو وحظكم ، هلأ هنشرح شو هي ال 6 ورشات وشو بتساوو فيها</p>
<p class="content start">1- ورشة السباكة والنماذج <br> هي الورشة بتنقسم قسمين قسم نماذج وقسم سباكة متل مو واضح بالاسم <br> النماذج : بتقولبو نموذج من الخشب ليستخدم بالسباكة يعني بدلو عبعض <br> السباكة: هي قلها قصة ، بيعلمكم كيف تستفادو من قطعة الخشب الي من النماذج بأنكم تقولبو من الرمل هاد النموذج مشان صب الحديد وتشكيل الحديد ، بس طبعا ما رح تصبو حديد وبس هي هية السباكة والنماذج .</p>
<p class="content start">2- ورشة الصفائح واللحام <br> كمان قسمين قسم صفائح وقسم لحام <br> الصفائح  :بيعطيكم صفيحة كبير وبيطلب منكم تقسموها بقياسات هو بيطلبا منكم ، كل واحد منكم بياخد 3 قطع صغار (تنتين اكبر من التالتة) وبيقلكم تتنو كل وحدة بمكان معين مو حيلا وبتوصلون مع بعض بالتنيات (الصغير بتكون صلة وصل بين القطعتين الاكبر ) وبعد ما توصلون بيعطوكم مطارق وبتبلشو ضرب بهلقطع اي اي ضرب <br>اللحام : هي بتلحمو مكان الضرب مشان ما تعد تفك مع انو ما رح تفك بعد كل هلضرب بس بتلحمو (ملاحظة صغيرة "يمكن ما تلحمو") قال خطر وبدا اقنعة وأدوات و و .... وبس هي هية الصفائح واللحام .</p>
<p class="content start">3- ورشة الخراطة والتسوية <br> كمان بتنقسم قسمين ... <br> التسوية :  بيحكيلكم عن أدوات الخراطة (البياكوليس شلون بيقيس ، والمكرومتر ) بيعلمكم كيف تشتغلو فيهم صح وتقرأ القياسات صح (ملاحظة صغيرة "في تجربة بمخبر الفيزيا 1 اسما على ما أذكر قياسات هيك شي بس متذكر انو اول تجربة هية ") المهم الي عمل هي التجربة بيكون سهل عليه التسوية <br> الخراطة : بتنزلو عالمخارط بيقسموكن فئات كل فئة عمخرطة وبيعطيكم اسطوانة من الحديد وبيعطيكم رسمة بدكم تخرطو الاسطوانة متل الرسمة يلي هي بتشبه البرغي تقريبا بيعطيكم قياسات وبعلمكم كيف تشتغلو وبيترككم تشتغلو كل واحد شوي وكل واحد شوي هييك لتخلصو وبورجوه ياها  وهي هية الخراطة والتسوية .</p>
<p class="content start">4- ورشة التمديدات الكهربائية <br> واخيرا بلشنا بالكهربا جونا وملعبنا ، هي الورشة ما بتنقسم قسمين  لان الاسم مو قسمين <br> هي الورشة مو بمكان الورشات هي الورشة بقبو بناء الطاقة اول ما تفوتو علورشة بيطلبو منكم ترسمو 4 دارات كل دارة مهمتا شكل ، بعد ما تخلصو رسم بيجي الدكتور وبيشرح وظيفة كل دارة ووين بتستخدم وكيف بتشتغل ،  هي الورشة ما فيا عملي (يمكن على حظكم تتغير ) وبس هي هية ورشة التمديدات الكهربائية .</p>
<p class="content start">5-ورشة كهربا السيارات <br> الاسم شو بيوحي اي صح مالا قسمين  <br> هي الورشة بعلموكم كيف محرك السيارة بيشتغل و ان كان بنزين وان كان ديزل وبقلولكم الفرق بيناتهم لا تخافو سهلة ، بقلولكم أسماء  أجزاء السيارة ووظيفة كل جزء ، وبيورجوكم كيف الاجزاء مترابطين (هو حرفيا بشغل سيارة قدامكم اجزائها الداخلية مبينة ) هي هية ورشة كهربا السيارات .</p>
<p class="content start">6- ورشة كهرباء منزلية <br> مو قسمين<br> أمتع ورشة بلنسبة الي لان سهلة وبسيطة وشغلا حلو <br> اول ما تفوتو على الورشة بتلاقو مولدات كبير انتو كونو سريعين ولحقو اول كم مولد المهم بيعطيكم دفة خشبة مع لمبات ومفك وبينسه وقاطع (سويتش تبع الon والoff) ، <br> بيقلكم اول شي توصلو لمبة وحدة مع المنبع والقاطع ، <br> تاني شي توصلو لمبتين عالتسلسل ، <br> آخر شي توصلو لمبتين علتفرع ،<br>  شفتو ما احلاها وهي هية ورشة كهرباء منزلية .</p>

?>