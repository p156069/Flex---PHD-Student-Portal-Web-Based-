<?php
session_start();
unset($_SESSION['username1']);
session_destroy();
header("Location: gcs-index.html");
exit;
?>