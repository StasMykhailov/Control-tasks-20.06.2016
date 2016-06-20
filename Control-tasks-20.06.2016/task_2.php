
<form action="" method="post">
    <p><b>Введите Вашу ссылку:</b></p>
    <p><input type="text" name="link"></p>
    <p><input type="submit" value="Найти картинки!"></p>
</form>

<?php
if (isset($_POST['link']) && !empty($_POST['link'])) {

    $link = file_get_contents($_POST['link']);
    preg_match_all("/<img src='(.*)'.*?>/", $link, $results);
    var_dump($results);
    foreach ($results[1] as $image){?>
    <p><a href="<?php echo $image?>"</p>

    <?php
    }
}

?>

