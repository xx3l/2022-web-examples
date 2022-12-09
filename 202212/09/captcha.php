<?php
session_start();
$string = $_SESSION["captcha"] ?? "беда..";
print_r($_SESSION);