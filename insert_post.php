<html>

<?php
include("includes/db.php");
include("admin_panel.php");
?>

<form method='post' action='' enctype='multipart/form-data'>
	
	<table width='40%' border='1' align='right'>
	
	<tr><td colspan='4' align='center'><h2>Create New Post</h2></td></tr>
	
	<tr align='left'><th>Post Title</th>
	<td><input type='text' name='post_title' size='50'></td></tr>
	
	<tr align='left'><th>Post Description</th>
	<td><textarea name='post_desc' cols=42 rows=10></textarea></td></tr>

	<tr align='left'><th>Author Name</th>
	<td><input type='text' name='author' size='50'></td></tr>

	<tr align='left'><th>Category:</th><td><select name='category'>
              <option value="parodies" selected>Parodies
              <option value="Historical Victories">Historical Victories
              <option value="Amazing Videos">Amazing Videos
              <option value="Best Catches">Best Catches
			  <option value="information">Information
			  <option value="records">Records
        </select></td></tr>

	<tr align='left'><th>Attach Photo:</th>
        <td><input type='file' name='image'></td></tr>


	<tr><td colspan='2' align='center'><input type='submit' name='post' value='Publish'></td></tr>
	</table>

</form>
</html>

<?php
if(isset($_POST['post']))
{
	
	$post_title = mysql_escape_string($_POST['post_title']);
	$post_desc = mysql_escape_string($_POST['post_desc']);
    $author = mysql_escape_string($_POST['author']);		
    $category = mysql_escape_string($_POST['category']);
	
    $img_name 	= $_FILES['image']['name'];
    $tmp 		= $_FILES['image']['tmp_name'];
    $org_path   = "images/" . $img_name;
    move_uploaded_file($tmp,$org_path);


	$query = "insert into post (title,description,author,category,image) values 
        ('$post_title','$post_desc','$author','$category','$org_path')";
		
	if(mysql_query($query))
	{
		echo "<script>alert('A New Post has been Published!')</script>";	
	    exit();
    }
	else{
		echo "<script>alert('Unable to Published Post.')</script>";	
	    exit();
    }  
}
?>