<?php
session_start();
session_unset();
session_destroy();
header("Location: sesion_cerrada.php");
exit();
