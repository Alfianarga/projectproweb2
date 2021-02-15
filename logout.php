<?php

session_start();
session_destroy();

echo "<script>alert('Succefully Logout'); window.location = 'index.php'</script>";
?>