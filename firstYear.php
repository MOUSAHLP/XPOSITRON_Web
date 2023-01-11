<?php
    session_start();
?>
<!DOCTYPE html>

<html lang="ar" >

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
    <link rel="shortcut icon" href="images/positron2.png" type="image/png" />
    <link rel="icon" href="images/positron2.png" type="image/png" />
    <link rel="shortcut" href="images/positron2.png" type="image/png" />
    <link rel="apple-touch-icon" href="images/positron2.png" type="image/png" />
    <title>X-POSITRON-first</title>
    <style type="text/css"></style>
    <script type="text/javascript">

    </script>

</head>

    <body style="font-family: serif;">
    <?php
    // for set nav year 
	require 'mainPages/nav.php';
	setYear(1);
    // for set the year name
	require 'mainPages/header.php';
    selectYearphp(1);

    require 'mainPages/yearContent.php';
    yearContent(1);
    sumbitButton(1);
	require_once 'mainPages/contactUs.php';
    contactUsSend(1);
	?>


    </body>

</html>