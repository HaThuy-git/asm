<?php
require_once 'index1.php'; ?>

<?php

$connection = pg_connect("host=ec2-107-20-155-148.compute-1.amazonaws.com port=5432 
    dbname=d4o35efmirk4nt user=zgyigwrhrgyskg 
    password=2475c60d24fecc07282a09a3d8aa743635d429ca69f0eb0bd621cbeba006b00d");  
 if(!$connection) {
     die("Database connection failed");
 }
 ?>
