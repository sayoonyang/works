<?php
if($_POST["message"]) {
    mail("your@email.address", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sandbox | Yang.Sayoon</title>

    <link rel="stylesheet" href="style.css" media="screen" />



    <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel='stylesheet' type='text/css'>

     <script src="scripts/modernizr.js"></script>

     <!-- Global site tag (gtag.js) - Google Analytics -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-59927450-1"></script>
     <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());

         gtag('config', 'UA-59927450-1');
     </script>

</head>

<body>


<form method="post" action="contact.php">
    <textarea name="message"></textarea>
    <input type="submit">
</form>


</body>

</html>
