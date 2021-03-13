<?php 
session_start();
include('dbcon.php');
$count = 0;

$result = mysql_query("SELECT book_id, book_image, book_title, book_con FROM book");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Informatics College</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="College, Pokhara, IT College, Lions Marga, college in pokhara, nepalIT">
 <meta name="author" content="Bishworaj Poudel">
 <link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body class="body">

<a href="dsh2.php" class="btn-default"><i class="icon-arrow-left icon-large"></i>&nbsp;  <input type="button" value="Back" ></a>
  
<a href="index0.php" class="btn-default"><i class="icon-arrow-left icon-large"></i>&nbsp;  <input type="button" value="logout" ></a>
	<h3>Books</h3>
  
  
		

	
<h1>University Requirements</h1>
<div class="gallery">
  <br>
<?php for($i = 0; $i < mysql_num_rows($result); $i++){ ?>
      <div class="desc">
        <?php while($query_row = mysql_fetch_assoc($result)){ ?>
          <div class="gallery">
          <a href="./images/Course/<?php echo $query_row['book_con']; ?>">
              <img class="img-responsive img-thumbnail" src="./images/Course/<?php echo $query_row['book_image']; ?>">
              <div class="desc"> <?php echo $query_row['book_title']; ?>
            </a>
            </div>
            <div id="fix"></div>
        </div>
        </div>
        
        <?php
          $count++;
          if($count >= 4){
              $count = 0;
             
            }}
           ?> 

           <br>
        </div>
        <div id="fix"></div>
        <?php
      }
  
      
?>
 
</div>



<script type="text/javascript">
	document.title="Course";
</script>
</body>
</html>