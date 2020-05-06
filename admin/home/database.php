<?php

	$con = mysqli_connect('localhost','root','','heysushil_gallery');
	// mysqli_query($con, 'CREATE DATABASE IF NOT EXISTS daibai');

	mysqli_query($con, 'CREATE TABLE IF NOT EXISTS covers(cov_id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY, covTitile varchar(100), covShortDetail varchar(250), covImgName varchar(250))');

	mysqli_query($con, 'CREATE TABLE IF NOT EXISTS imges(img_id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY, cov_id int(10), 
img varchar(250),
img1 varchar(250),
img2 varchar(250),
img3 varchar(250),
img4 varchar(250),
img5 varchar(250),
img6 varchar(250),
img7 varchar(250),
img8 varchar(250),
img9 varchar(250))');

	mysqli_query($con, 'CREATE TABLE IF NOT EXISTS admin(admin_id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY, name varchar(100), email varchar(100), password varchar(100))');


	// mysqli_query($con, 'ALTER ')
	// mysqli_query($con, 'INSERT INTO admin(name,email,password) VALUES("ADMIN","user@admin.com","asd")');

?>