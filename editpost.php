<!-- Selecting Post Data From Database for Editing -->
<?php
include ("includes/db.php");
$editpost= @$_GET['edit_post'];
$query = mysql_query("SELECT * FROM post WHERE postid='$editpost'") or die(mysql_error());;
$run = mysql_fetch_assoc($query);
$postid = $run['postid'];
$ptitle = $run['title'];
$pdesc = $run['description'];
$date = $run['date'];
$author = $run['author'];
$category = $run['category'];
$photo = $run['image'];
?>

<!-- Showing Selected Information into Form -->
<html>
<body background='images/background.jpg'>
<form method='post' action='editpost.php'>
<br><br><table border='1' align='center'>

<tr><td>Post ID: </td><td><input type='text' name='postID' value='<?php echo $postid; ?>'/></td></tr>
<tr><td>Post Title: </td><td><input type='text' name='ptitle' value='<?php echo $ptitle; ?>'/></td></tr>
<tr><td>Post Description: </td><td><input type='text' name='pdesc' value='<?php echo $pdesc; ?>'/></td></tr>
<tr><td>Date: </td><td><input type='text'  name='date' value='<?php echo $date; ?>'/></td></tr>
<tr><td>Author: </td><td><input type='text'  name='author' value='<?php echo $author; ?>'/></td></tr>
<tr><td>Category: </td><td><input type='text'  name='category' value='<?php echo $category; ?>'/></td></tr>
<tr><td>Photo: </td><td><input type='text'  name='photo' value='<?php echo $photo; ?>'/></td></tr>
<tr><td align='center' colspan='2'><input type='submit' name='update' value='Update'></td></tr>
</table>
</form>
</body>
</html>

<!-- Update Section -->
<?php
include ("includes/db.php");
if(isset($_POST['update']))
{
$PostID = $_POST['postID'];
$Ptitle = $_POST['ptitle'];
$Pdesc = $_POST['pdesc'];
$Pdate = $_POST['date'];
$Pauthor = $_POST['author'];
$Pcategory = $_POST['category'];
$Pphoto = $_POST['photo'];

$query= "UPDATE post SET title='$Ptitle', description='$Pdesc', date='$Pdate', author='$Pauthor', category='$Pcategory', image='$Pphoto' WHERE postid='$PostID'"; 

if(mysql_query($query)){
	
	echo "<script>window.open('admin_panel.php?upd=Post has been Updated!','_self')</script>";

	}

	else{
		echo "<script>alert('Sorry Not Updated Please Try Again!')</script>";
	}
}
?>
