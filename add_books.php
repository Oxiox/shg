<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-danger">Add Books</div>
			<p><a href="books.php" class="btn-default"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>		
	<form class="form-horizontal" method="POST" action="books_save.php" enctype="multipart/form-data">
			
	
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Book_Id:</label>
			<div class="controls">
			<input type="int" class="span4" id="inputEmail" name="book_id"  placeholder="Book id" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Book_title:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="book_title"  placeholder="Book Title" required>
			</div>
			
			<label class="control-label" for="inputEmail">Image:</label>
				<div class="controls">
				<td><input type="file"  class="span4" name="image"></td>
</div>
<label class="control-label" for="inputEmail">content:</label>
				<div class="controls">
				<td><input type="file"  class="span4" name="con"></td>
</div>
		</div>
		
		
			
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-default"><i class="icon-save icon-large"></i>&nbsp;Save</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>

<!-- Made by Vinit Shahdeo -->