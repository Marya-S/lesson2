<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Главная страница</title>
</head>
<body>
<ul>

    <?php foreach ($selectFromDB as $news => $cont){
        ?>
        <li>
        <a href="<?php echo ($cont['Pass']);?>"><?php echo ($cont['Head']);?></a>
        </li><?php } ?>

</ul>
</body>
</html>