<?php
include 'db.php';

$createCategoryTableSQL = "
 CREATE TABLE IF NOT EXISTS category(
 id INT(11) AUTO_INCREMENT PRIMARY KEY ,
 name varchar(255) NOT NULL

 
 )ENGINE=InnoDB DEFAULT CHARSET=utf8;
";

if ($conn->query($createCategoryTableSQL) === true) {
    echo " Catagory Created";
} else {
    echo "Category Not Created" . $conn->error;
}
