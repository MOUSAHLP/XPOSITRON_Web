<?php
require 'php/config.php';
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/positron2.png" type="image/png" />
        <link rel="icon" href="images/positron2.png" type="image/png" />
        <link rel="shortcut" href="images/positron2.png" type="image/png" />
        <link rel="apple-touch-icon" href="images/positron2.png" type="image/png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main/questions.css">
        <link rel="stylesheet" href="css/main/nav.css">
        <title>X-POSITRON-questions</title>
        <style type="text/css">
                .disclaimer {
                        display: none !important;
                }
        </style>
        <script type="text/javascript">

        </script>
</head>

<body>
        <nav>
                <!-- collapse end -->
                <div class="nav-collapse">
                        <img src="images/menu2.png">
                        <div class="yearsCollapse">
                                <a href="index.php">الصفحة الرئيسية</a>
                                <a href="firstYear.php">السنة الأولى</a>
                                <a href="secondYear.php">السنة الثانية</a>
                                <a class="disabled" href="thirdYear.php">السنة الثالثة</a>
                                <a class="disabled" href="fourthYear.php">السنة الرابعة</a>
                                <a class="disabled" href="fifthYear.php">السنة الخامسة</a>
                                <hr>
                                <a class="activate" href="questions.php">الأسئلة الشائعة</a>
                                <a href="advices.php">قسم النصائح</a>
                        </div>
                </div>
                <form>
                        <div class="search">
                                <?php
                                if (isset($_GET['search']) && $_GET['search'] != "") {
                                        echo ' <input type="text" id="search" name="search" pattern="[^A-Za-z]+" value=' . $_GET['search'] . '  placeholder="أبحث عن سؤال">';
                                } else {
                                        echo ' <input type="text" id="search" name="search" pattern="[^A-Za-z]+" placeholder="أبحث عن سؤال">';
                                }
                                ?>
                                <div class="if-en">رجائا أبحث <br> باللغة العربية</div>
                                <img src="images/search.png" alt="search">
                        </div>
                </form>
        </nav>
        <header>
                <strong>X-POSITRON</strong>
                <p>أهلا بك في قسم الأسئلة الشائعة</p>
                <img src="images/positron2.png" alt="x-positron">
        </header>
        <section>
                <img src="images/up-black.png" class="home" alt="jump up">

                <div class="info">
                        <h1>ما هو قسم الأسئلة الشائعة
                                <img src="images/down-arrow.png" class="dbarrow">
                        </h1>
                        <p class="answer">_هاد القسم لح نجاوب عن اسئلة ممكن تسألوها<br> نحنا جاوبنا على قد ما منعرف اذا في عندك سؤال نحنا ما ذكرناه أو عندك تصحيح لمعلومة نحنا كتبناها راسلنا بأسفل الصفحة
                                <a href="#contact">هنا</a>

                        </p>
                </div>
                <h1 class="h" id="h1"> الاسئلة</h1>
                <div class="u_search">
                        <span>
                                هذه نتائج بحثك عن</span>
                        <?php
                        echo '"' . $_GET['search'] . '"';
                        ?>
                </div>
                <?php

                if (isset($_GET['search']) && $_GET['search'] != "") {
                        $search_value = "%" . $_GET['search'] . "%";

                        $sql = $data_base->prepare("SELECT * FROM questions WHERE 
                        question LIKE  :search
                        OR answer LIKE :search");

                        $sql->bindparam('search', $search_value);
                        $sql->execute();
                } else {
                        $sql = $data_base->prepare("SELECT * FROM questions");
                        $sql->execute();
                }
                if ($sql->rowcount() == 0) {
                        echo '<div class="search-error" > 
                                لا يوجد نتائج لبحثك عن
                        <br>
                        "' . $_GET['search'] . '"
                                </div>';

                        // for scrolling to search-error after searching
                        echo '
                        <script> 
                                let search_error = document.querySelector(".search-error");
                                setTimeout(()=>{
                                        window.scrollTo({
                                                top: search_error.offsetTop - 250,
                                                behavior: "smooth"
                                        }); 
                                },500)
                        </script>
                                ';
                } else {
                        if (isset($_GET['search']) && $_GET['search'] != "") {

                                echo '<style type="text/css">
                        .u_search{
                                display:flex;
                        }
                        // #h1{
                        //         display:none;
                        // }
                        // .info{
                        //         display:none;
                        // }
                        </style>';
                                // for scrolling to u_search after searching
                                echo '
                        <script> 
                                let u_search = document.querySelector(".u_search");
                                setTimeout(()=>{
                                        window.scrollTo({
                                                top: u_search.offsetTop - 100,
                                                behavior: "smooth"
                                        }); 
                                },500)
                        </script>
                                ';
                        }
                        foreach ($sql as $data) {

                                $h1class = "title";
                                if ($data['id'] == 6) {
                                        $h1class = "title six";
                                }
                                echo '
                                        <div class="question">

						<h1 class="' . $h1class . '">' . $data['question'] . ' 
							<img src="images/down-arrow.png"  class="dbarrow">
						</h1>
                                                <p class="answer">
                                                ' . $data['answer'] . '
                                                </p> 
                                        </div>';
                        }
                }

                ?>
        </section>
        <?php
        require 'mainPages/contactUs.php';
        contactUsSend(6);
        ?>
        <script>
                // for showing nav Years
                let menuImg = document.querySelector("nav .nav-collapse img");
                let collapsed = document.querySelector("nav .nav-collapse .yearsCollapse");
                menuImg.onclick = function() {
                        if (collapsed.classList.contains("show")) {
                                menuImg.classList.remove("show");
                                collapsed.classList.remove("show");
                        } else {
                                menuImg.classList.add("show");
                                collapsed.classList.add("show");
                        }
                };
                // for moduling width of search input 
                let input = document.querySelector(".search input");
                input.onfocus = function() {
                        input.parentElement.parentElement.classList.add("show");
                }
                input.onblur = function() {
                        input.parentElement.parentElement.classList.remove("show");
                }

                // info collapse
                var infoH1 = document.querySelector("section .info h1");
                var infoanswer = document.querySelector("section .info .answer");

                infoH1.onclick = function() {
                        showanswer(this);
                };
                infoanswer.onclick = function() {
                        showanswer(this);
                };


                //questions collapse    
                var qustionH1 = document.querySelectorAll("section .question .title");

                qustionH1.forEach(element => {
                        element.onclick = function() {
                                showanswer(this);
                        };
                });

                var answerContent = document.querySelectorAll("section .question .answer");

                answerContent.forEach(element => {
                        element.onclick = function() {
                                showanswer(this);
                        };
                });

                function showanswer(click) {
                        let parent = click.parentElement;
                        let h1 = parent.children[0];
                        let answer = parent.children[1];
                        let arrow = h1.children[0];

                        if (answer.classList.contains("show")) {
                                answer.classList.remove("show");
                                h1.classList.remove("show");
                                arrow.style.cssText = "transform: rotate(0deg);";

                                //for sixth question
                                if (h1.classList.contains("six")) {
                                        let arrowSix = h1.children[1];
                                        arrowSix.style.cssText = "transform: rotate(0deg);";
                                }
                        } else {
                                answer.classList.add("show");
                                h1.classList.add("show");
                                arrow.style.cssText = "transform: rotate(90deg);";

                                //for sixth question
                                if (h1.classList.contains("six")) {
                                        let arrowSix = h1.children[1];
                                        arrowSix.style.cssText = "transform: rotate(90deg);";
                                }
                        }

                        window.scrollTo({
                                top: matchMedia("screen and (min-width:1023px)").matches ? parent.offsetTop + 400 : parent.offsetTop - 100,
                                behavior: "smooth"
                        });
                }
                //for typing X-POSITRON
                function typing() {
                        let xpositron = document.querySelector("header strong");
                        let xpositronVal = xpositron.innerHTML;
                        xpositron.innerHTML = "";

                        let typingCounter = 0;
                        let interval = setInterval(() => {
                                xpositron.innerHTML += xpositronVal[typingCounter];
                                typingCounter++;

                                if (typingCounter >= xpositronVal.length) {
                                        clearInterval(interval);
                                }
                        }, 150);
                }
                typing();

                //for typing username
                typingOnce = false;

                function usernametyping() {
                        let usernameInput = document.querySelector("input.readonly");
                        if(usernameInput.value != null){
                                
                                let usernameInputVal = usernameInput.value;
                                usernameInput.value = "";

                                let typingCounter = 0;
                                let interval = setInterval(() => {
                                        usernameInput.value += usernameInputVal[typingCounter];

                                        usernameInput.value += "|";
                                        setTimeout(() => {
                                                usernameInput.value = usernameInput.value.replace("|", "");
                                        }, 20);

                                        typingCounter++;

                                        if (typingCounter >= usernameInputVal.length) {
                                                clearInterval(interval);
                                        }
                                }, 1000 / usernameInputVal.length);
                        }
                }


                // function for scaling the content
                let home = document.querySelector(".home");
                let questions = document.querySelectorAll("section .question");
                window.onscroll = function() {
                        questions.forEach(element => {
                                if (window.scrollY >= element.offsetTop - window.screen.height + (window.screen.height * 0.2)) {
                                        element.style.cssText = "transform: scale(1);";
                                }
                        });

                        // function for scrolling up
                        if (questions.length != 0) {
                                if (window.scrollY >= questions[0].offsetTop - window.screen.height + (window.screen.height * 0.7)) {
                                        home.classList.add("show");
                                } else {
                                        home.classList.remove("show");
                                }
                        }

                        // for typing username
                        let footer = document.querySelector("footer");
                        if (window.scrollY >= footer.offsetTop - window.screen.height + (window.screen.height * 0.3) && typingOnce == false) {
                                usernametyping();
                                typingOnce = true;
                        }
                }
                home.onclick = function() {
                        console.log(questions[0]);
                        window.scrollTo({
                                top: 0,
                                behavior: "smooth"
                        });
                }
        </script>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>