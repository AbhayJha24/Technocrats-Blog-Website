<?php

require('functions.php');

$aP->insertTableData(date('Y-m-d h:i:s'),$_POST['name'],$_POST['post']);

header('Location: post_page.html');

?>