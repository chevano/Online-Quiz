<?php
    session_start();
    unset($_SESSION);
    session_write_close();
    session_write_close();
    header('Location: index.html');
    die;
?>