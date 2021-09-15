<?php

require('dbconnect.php');
require('post.php');
require('dbupdate.php');

$db = new dbcontroller();

$post = new Post($db);

$aP = new addPost($db);

?>