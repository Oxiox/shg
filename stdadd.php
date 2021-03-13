
<?php
include('dbcon.php');
if(isset($_POST['add'])){
    $id = ($_POST['id']);
        

        $name = ($_POST['name']);
		
        
        $pass = ($_POST['pass']);
        
        

        mysql_query("insert into students (student_id,std_name,password) values('$id','$name','$pass')")or die(mysql_error());
}

 ?>