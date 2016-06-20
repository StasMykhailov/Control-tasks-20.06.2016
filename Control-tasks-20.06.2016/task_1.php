<form action="" method="post">
    <p><b>Введите ваш текст:</b></p>
    <p><textarea rows="5" cols="100" name="text"></textarea></p>
    <p><input type="submit" value="Модифицировать текст!"></p>
</form>
<?php
$text = $_POST['text'];

$new_text = preg_replace("/\s/", " ", $text);
$new_text2 = preg_replace("/\.\s/", ".    ", $new_text);
echo $new_text2;
?>