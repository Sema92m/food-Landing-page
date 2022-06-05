<?php
$_POST = json_decode(file_get_cintents("php://input"), true);
echo var_dump($_POST);