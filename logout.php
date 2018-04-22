<?php
session_start();
if (isset($_SESSION['korisnik_id']))
{
    unset($_SESSION['korisnik_id']);
}
header("location:index.php");
?>