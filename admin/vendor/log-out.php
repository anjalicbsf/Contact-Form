<?php
session_start();
session_unset();
session_destroy();
header("Location: http://localhost/anjali/Contact-Form/admin/index.php");
?>