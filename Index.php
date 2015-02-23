<?php
require __DIR__ .'./model.php';

$selectFromDB = $DB->QueryBD('SELECT * FROM News ORDER BY DateT DESC  ');

include __DIR__ .'./view/view.php';