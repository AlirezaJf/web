<?php
include ('../includes/settings.php');
include ('../includes/functions.php');
$alert = '';
if (isset($_POST['submit'])){

    $sql = "INSERT INTO contactus (email,sub_message,message)
        VALUES ('{$_POST['email']}','{$_POST['sub_message']}','{$_POST['message']}')";

    $db = new DB();

    $result = $db -> execute($sql);


    if ($result)
        $alert = alert('پیام با موفقیت ثبت شد.', 'success');

}
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>تماس با ما | آکادمی</title>
</head>
<body class="container">
<header></header>
<main>
    <?php
    if (isset($alert)){
        echo $alert;
    }
    ?>
</main>
<aside></aside>
<footer></footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>

