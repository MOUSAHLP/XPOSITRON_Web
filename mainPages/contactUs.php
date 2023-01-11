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
    <link rel="stylesheet" href="css/main/contactUs.css">
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
    <footer>
        <div class="contact-us" id="contact">
            <img src="images/positron2.png" alt="x-positron">
            <h2>تواصل معنا</h2>
            <form action="php/send.php" method="post">
                <div class="form2">
                    <div class="inputAcception">
                        <?php
                        if (isset($_COOKIE['username_cookie'])) {
                            echo '<input type="text" name="name-contact-us" placeholder="اسم المستخدم" value=' . $_COOKIE['username_cookie'] . ' pattern="[A-Za-z\s]+" minlength="2" maxlength="30" required readonly class="input readonly">';
                        }
                        else {
                            echo '<input type="text" name="name-contact-us" placeholder="اسم المستخدم" pattern="[A-Za-z\s]+" minlength="2" maxlength="30" required auto-focus class="input">';
                        }
                        ?>
                        <div class="acception">يرجى ادخال الأحرف الأنكليزية فقط</div>
                    </div>
                    <div class="inputAcception">
                        <input type="email" name="email-contact-us" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="البريد الالكتروني" required class="input">
                        <div class="acception">يرجى ادخال بريد الكتروني صالح</div>
                    </div>
                    <div class="inputAcception">
                        <input type="text area" name="text-contact-us" placeholder="أكتب رسالتك" minlength="2" required class="input text">
                    </div>
                    <input type="submit" value="أرسال" name="contact-us">
                </div>
                <script>
                    var text= document.querySelector(".input.text").addEventListener("input",function(){
                    var reg = /[\u0600-\u06FF]/;
                        if(reg.test(this.value[0])){
                            this.style.cssText="direction: rtl;";
                        }
                        else{
                            this.style.cssText="direction: ltr;";
                        }
                    });
                </script>
            </form>
        </div>
        <div class="rights">
            <img src="images/copyright.png" alt="copyright">
            <span>كل الحقوق محفوظة 2022</span>
        </div>
    </footer>
    <?php
    // for  redirecting after send an email
        function contactUsSend($year){
            echo '
            <script>
                let send = document.querySelector("footer form input[type='."submit".']");
                send.setAttribute("name" , "contact-us'.$year.'");
            </script>
        ';
        }
    ?>
</body>