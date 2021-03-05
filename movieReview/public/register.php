<?php
include ('../includes/settings.php');
include ('../includes/functions.php');
if (isset($_POST['register'])) {
    $sql = "INSERT INTO users (email,password,username)
        VALUES ('{$_POST['email']}','{$_POST['password']}','{$_POST['username']}')";

    $db = new DB();

    $result = $db -> execute($sql);
    unset($db);

    if ($result) {
        $alert = alert("ثبت نام شما با موفقیت انجام شد", "success");
    }
}
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>ثبت نام | وبسایت فیلم</title>
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



