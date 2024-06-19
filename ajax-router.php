<?php

require_once('tools.php');

if(isset($_POST['method'])){

    $method = $_POST['method'];
    $args = isset($_POST['args']) ? $_POST['args'] : null;

    $tools = new Tools();

    echo $tools->$method($args);
}