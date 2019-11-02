<?php
session_start();

$_SESSION = [];
header('Location: /LoginBoard/board/index.php');
exit;
