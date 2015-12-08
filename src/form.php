<?php

$errorZgoda = '';

    if(!empty($_POST)) {
        date('Y-m-d');

    }
?>

<html>
<head>
    <title>Formularz kontaktowy</title>
</head>
<body>
<form method="post">
    Email: <input type="text" name="email"
value="<?php echo
 isset($_POST['email']) ? $_POST['email'] : '';?>"><br>
    <input type="range" max="10" min="1">
<!--    Zgody: <input type="checkbox" name="zgoda" value="1"/><br/>-->
<!--    --><?php //echo $errorZgoda ? $errorZgoda : ''; ?>
<!--    <select name="code[]" multiple>-->
<!--        <option value="PHP">PHP</option>-->
<!--        <option value="JAVA" selected>JAVA</option>-->
<!--        <option value="C++">C++</option>-->
<!--    </select>-->
    <!--    E-mail: <input type="text" name="email" /><br/>-->
    <!--    Treść wiadomości:<br/>-->
<!--    <textarea name="tresc">TUTAJ WPISZ TREŚĆ</textarea>-->
<!--    M: <input type="radio" name="sex" value="M"/><br/>-->
    <input type="submit" value="OK"/><br/>
</form>
</body>
</html>