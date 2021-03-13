<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$book_id=$_POST['book_id'];
$book_title=$_POST['book_title'];


if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
    $image = $_FILES['image']['name'];
    $directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
    $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "images5/";
    $uploadDirectory .= $image;
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory);
}
if(isset($_FILES['con']) && $_FILES['con']['name'] != ""){
    $con = $_FILES['con']['name'];
    $directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
    $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "images5/";
    $uploadDirectory .= $con;
    move_uploaded_file($_FILES['con']['tmp_name'], $uploadDirectory);
}
								
mysql_query("insert into book (book_id,book_title,book_image,book_con)
values('$book_id','$book_title','$image','$con')")or die(mysql_error());

 
 
header('location:books.php');
}
?>	