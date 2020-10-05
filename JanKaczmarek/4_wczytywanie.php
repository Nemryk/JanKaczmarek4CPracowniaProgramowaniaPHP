<?php
$local =__file__;
include './3_1_file.php';
include './3_1_file.php';
include_once './3_1_file.php';
include_once './3_2_file.php';
include_once './3_2_file.php';

echo 'Require:';
require './3_2_file.php';    
echo 'Require once:';
require_once './3_2_file.php';  
?>