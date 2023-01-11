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
    <link rel="stylesheet" href="css/main/header.css">
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

    <header>
        <div class="yearHeader">
            <strong>X-POSITRON</strong>
            <p></p>
        </div>

        <img src="images/positron2.png" alt="logo">
    </header>


    <script>
        let whichYear = document.querySelector("header .yearHeader p");

        function selectYear(year) {
            switch (year) {
                case 1:
                    whichYear.innerHTML = "السنة الأولى";
                    break;
                case 2:
                    whichYear.innerHTML = "السنة الثانية";
                    break;
                case 3:
                    whichYear.innerHTML = "السنة الثالثة";
                    break;
                case 4:
                    whichYear.innerHTML = "السنة الرابعة";
                    break;
                case 5:
                    whichYear.innerHTML = "السنة الخامسة";
                    break;
                    case 6:
                    whichYear.innerHTML = "تطبيق X-POSITRON ";
                    whichYear.style.fontFamily="serif";
                    break;
            }

        }

        //for typing X-POSITRON
        function typing() {
            let xpositron = document.querySelector("header .yearHeader strong");
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
    </script>
    <?php

    function selectYearphp($year)
    {
        echo ' 
            <script>
                selectYear(' . $year . ');
            </script>
            ';
    }

    ?>


</body>

</html>