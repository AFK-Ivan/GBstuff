<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Личный сайт студента GeekBrains</title>
<link rel="stylesheet" href="style.css">
<script type="text/javascript">

    function write(text){
        document.getElementById("info").innerHTML = text;
        }

    function generate_password(length){
        var password = "";
        var symbols = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        for (var i = 0; i < length; i++){
            password += symbols.charAt(Math.floor(Math.random() * symbols.length));     
        }

        write("Ваш пароль: " + password);
        return password;
    }

</script>
</head>
<body>

<div class="content">
<?php
    include "menu.php";
?>  

    <div class="contentWrap">
        <div class="content">
            <div class="center">

                <h1>Генератор случайных паролей</h1>

                <div class="box">

                    <p id="info">Введите желаемую длину пароля</p>
                    <input type="text" id="length">
                    <br>
                    <a href="#" onClick="(generate_password(+document.getElementById('length').value))">Сгенерировать</a>            
                </div>

            </div>
        </div>
    </div>
</div>

    <div class="footer">
    Copyright &copy; <?php echo date("Y");?> Ivan Brykin
    <div>

</body>
</html>