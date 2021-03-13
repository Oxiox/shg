<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$book_title=$_POST['book_title'];
mysql_query("update book set book_title='$book_title' where book_id='$id'")or die(mysql_error());
								
								
 header('location:books.php');
}
?>	