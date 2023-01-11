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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main/nav.css">
    <link rel="stylesheet" href="css/main/yearContent.css">
    <link rel="shortcut icon" href="images/positron2.png" type="image/png" />
    <link rel="icon" href="images/positron2.png" type="image/png" />
    <link rel="shortcut" href="images/positron2.png" type="image/png" />
    <link rel="apple-touch-icon" href="images/positron2.png" type="image/png" />
    <title>X-POSITRON</title>
    <style type="text/css">
        .disclaimer {
            display: none !important;
        }
    </style>
    <script type="text/javascript">

    </script>

</head>

<body>
    <section>
        <?php
        function yearContent($year)
        {
            require_once "php/config.php";
            echo '<h1 class="semester">
                    الفصل الأول
                </h1>';

            $sql = $data_base->prepare("SELECT * FROM subjects WHERE year = $year");
            $sql->execute();

            foreach ($sql as $subject) {
                if ($subject['sumester'] == 1) {
                    echo '
                            <div class="article">
                                <div class="title">
                                    <h1>
                                        <img src="images/down-arrow.png" class="arrow" alt="arrow">
                                        ' . $subject['arabicName'] . '
                                    </h1>
                                    <img src="' . $subject['image'] . '" class="image" alt="' . $subject['subjectName'] . '" >
                                </div>
                                <div class="content">
                                    <p>' . $subject['subjectExplain'] . '</p>
                                    <hr>
                                    <div class="download">
                                        <p>روابط التحميل</p>
                                ';
                    $downloadFiles;
                    if ($year == 1) {
                        $downloadFiles = $data_base->prepare("SELECT * FROM firstYearFiles");
                    } else if ($year == 2) {
                        $downloadFiles = $data_base->prepare("SELECT * FROM secondYearFiles");
                    } else if ($year == 3) {
                        $downloadFiles = $data_base->prepare("SELECT * FROM thirdYearFiles");
                    } else if ($year == 4) {
                        $downloadFiles = $data_base->prepare("SELECT * FROM fourthYearFiles");
                    } else if ($year == 5) {
                        $downloadFiles = $data_base->prepare("SELECT * FROM fifthYearFiles");
                    }

                    $downloadFiles->execute();
                    foreach ($downloadFiles as $file) {

                        if ($subject['subjectName'] == $file['subject']) {
                            $downloadFileName = substr($file['fileName'], 0, strpos($file['fileName'], "X") - 1);
                            if (isset($_COOKIE['username_cookie']) || isset($_SESSION['username_session'])) {
                                echo '<a href="' . $file['url'] . '">' . $downloadFileName . '</a>';
                            } else {
                                echo '<a onclick="showSignup();">' . $downloadFileName . '</a>';
                            }
                        }
                    }
                    echo '
                                    </div>
                                </div>
                            </div>
                                ';
                }
            }
            $secondcheck = $data_base->prepare("SELECT * FROM subjects WHERE year = $year AND sumester=2");
            $secondcheck->execute();
            echo '
            <h1 class="semester">
                الفصل الثاني
            </h1>';
            if ($secondcheck->rowCount() == 0) {
                $yearname;
                if ($year == 1) {
                    $yearname = "للسنة الأولى";
                } else if ($year == 2) {
                    $yearname = "للسنة الثانية";
                } else if ($year == 3) {
                    $yearname = "للسنة الثالثة";
                } else if ($year == 4) {
                    $yearname = "للسنة الرابعة";
                } else if ($year == 5) {
                    $yearname = "للسنة الخامسة";
                }

                echo '
                <div class="secondcheck">
                    <p>لا يوجد مواد فصل ثاني </p>
                    <p> ' . $yearname . ' بعد !!</p>
                </div>
                ';
            }
            $sql = $data_base->prepare("SELECT * FROM subjects WHERE year = $year");
            $sql->execute();

            foreach ($sql as $subject) {
                if ($subject['sumester'] == 2) {
                    echo '
                        <div class="article">
                            <div class="title">
                                <h1>
                                    <img src="images/down-arrow.png" class="arrow" alt="arrow">
                                    ' . $subject['arabicName'] . '
                                </h1>
                                <img src="' . $subject['image'] . '" class="image" alt="' . $subject['subjectName'] . '" >
                            </div>
                            <div class="content">
                                <p>' . $subject['subjectExplain'] . '</p>
                                <hr>
                                <div class="download">
                                <p>روابط التحميل</p>
                                ';
                    $downloadFiles;
                    if ($year == 1) {
                        $downloadFiles = $data_base->prepare("SELECT * FROM firstYearFiles");
                    } else if ($year == 2) {
                        $downloadFiles = $data_base->prepare("SELECT * FROM secondYearFiles");
                    } else if ($year == 3) {
                        $downloadFiles = $data_base->prepare("SELECT * FROM thirdYearFiles");
                    } else if ($year == 4) {
                        $downloadFiles = $data_base->prepare("SELECT * FROM fourthYearFiles");
                    } else if ($year == 5) {
                        $downloadFiles = $data_base->prepare("SELECT * FROM fifthYearFiles");
                    }
                    $downloadFiles->execute();
                    foreach ($downloadFiles as $file) {

                        if ($subject['subjectName'] == $file['subject']) {
                            $downloadFileName = substr($file['fileName'], 0, strpos($file['fileName'], "X") - 1);
                            if (isset($_COOKIE['username_cookie']) || isset($_SESSION['username_session'])) {
                                echo '<a href="' . $file['url'] . '">' . $downloadFileName . '</a>';
                            } else {
                                echo '<a onclick="showSignup();">' . $downloadFileName . '</a>';
                            }
                        }
                    }
                    echo '
                            </div>
                        </div>
                    </div>
                        ';
                }
            }
            echo '<div class="up">
                    <img src="images/up-black.png">
                </div>
            </section>
            ';

            require_once 'mainPages/app.php';

            require "mainPages/signup.php";
            // main script of year content
            echo '
            <script>
            let h1 = document.querySelectorAll("section .article .title h1");
    
            h1.forEach(element => {
                element.onclick = function() {
                    showContent(this);
                };
            });
    
            let content = document.querySelectorAll("section  .article .content p");
    
            content.forEach(element => {
                element.onclick = function() {
                    showContent(this);
                };
            });
    
    
            function showContent(click) {
                let parent = click.parentElement.parentElement;
                let h1 = parent.children[0].children[0];
                let img = parent.children[0].children[1];
                let content = parent.children[1];
                let arrow = h1.children[0];
    
                if (content.classList.contains("show")) {
                    content.classList.remove("show");
                    h1.classList.remove("show");
                    img.classList.remove("show");
                    arrow.style.cssText = "transform: rotate(0deg);";
                } else {
                    content.classList.add("show");
                    h1.classList.add("show");
                    img.classList.add("show");
                    arrow.style.cssText = "transform: rotate(90deg);";
                }
                window.scrollTo({
                    top: parent.offsetTop - 80,
                    behavior: "smooth"
                });
            }
            //authration function
            function showSignup() {
                let signupForm = document.querySelector("form.signup");
                signupForm.style.cssText = "left:50%;";
            }
            //scale function
            let article = document.querySelectorAll("section  .article");
            let up = document.querySelector(".up");
    

            let typingOnce = false;
            window.onscroll = function() {
                article.forEach(element => {
                    if (window.scrollY >= element.offsetTop - window.screen.height + (window.screen.height * 0.2)) {
                        let parent = element.parentElement.parentElement;
                        element.style.cssText = "transform: scale(1);";
                    }
                });
    
                // function for scrolling up
                if (window.scrollY >= article[0].offsetTop - window.screen.height + (window.screen.height * 0.7)) {
                    up.classList.add("show");
                } else {
                    up.classList.remove("show");
                }

                //for typing username
                function typing() {
                    let usernameInput = document.querySelector("input.readonly");
                    let usernameInputVal = usernameInput.value;
                    usernameInput.value = "";
        
                    let typingCounter = 0;
                    let interval = setInterval(() => {
        
                        usernameInput.value += usernameInputVal[typingCounter];
                        usernameInput.value+="|";
                        setTimeout(()=>{
                            usernameInput.value = usernameInput.value.replace("|" , "");
                        },20);
                        typingCounter++;
        
                        if (typingCounter >= usernameInputVal.length) {
                            clearInterval(interval);
                        }
                    }, 1000/usernameInputVal.length);
                }
                let footer =document.querySelector("footer");
                if (window.scrollY >=footer.offsetTop - window.screen.height + (window.screen.height * 0.3) && typingOnce == false)  {
                    typing();
                    typingOnce = true;
                } 
            }
            up.onclick = function() {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            }
        </script>
            ';
        }
        ?>


        <!-- this php script for showing snackbar -->
        <?php
        if (isset($_SESSION['signupdone'])) {

            echo '
                <div class="signupdone" >
                    <p> أحسنت يا ' . $_SESSION['signupdone'] . ' تم انشاء حساب بنجاح </p>
                    <p>(يمكنك تحميل الملفات الان)</p>
                </div>   
                <script>
                let signupdone = document.querySelector(".signupdone");
                signupdone.style.cssText ="display:none;";
                
                    if(window.localStorage.getItem("signed") != "true"){
                        let nav = document.querySelector("nav");
                        let navheight= nav.clientHeight;
                        let counter=0;

                        signupdone.style.cssText ="position: fixed;top: 0px;background-color: rgba(0 220 50/0.8);width: 100%;display: flex;align-items: center;justify-content: space-evenly;flex-direction: column;font-size: 122%;color: white;font-weight: bold;border-bottom-right-radius: 30px;border-bottom-left-radius: 30px;z-index: 3;";
                        
                        function settopDown(){
                            if(counter >= navheight){
                                clearInterval(intervaldown);
                                return 0;
                            }
                            signupdone.style.top=counter + "px";
                            counter++;
                        }

                        let intervaldown = setInterval(settopDown, 2);

                        function settopUp(){
                            signupdone.style.top=counter + "px";
                            counter--;
                            if(counter <= -100){
                                clearInterval(intervalup);
                                return 0;
                            }
                        }

                        let intervalup;

                        setTimeout(()=>{ intervalup = setInterval(settopUp, 2);},3000);
                        window.localStorage.setItem("signed","true");
                }
                </script>
        ';
        }
        ?>


</body>

</html>