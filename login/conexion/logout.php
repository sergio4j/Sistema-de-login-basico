<?php
@session_start();
session_destroy();
header("Location: ./../index.php?sesion=1");
