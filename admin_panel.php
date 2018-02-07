<?php
session_start();
if(!$_SESSION['admin_name'])
{
	header('location: login.php?error=You are not an Administrator!');	
}
?>

<html>

<head>
<title>Welcome To Admin Panel</title>
</head>

<body background='images/background.jpg'>
<h2 align='center'><?php echo @$_GET['upd']?></h2>

<table border='1' width='40%' align='left'>

<tr>
<td colspan='3'><h2 align='center'><b>WELCOME TO ADMIN PANEL</b></h2></td>
</tr>

<tr><td><a href='admin_panel.php?menu_setting1=Menu Setting 1'><h3>Menu Setting 1</h3></a></td></tr>

<tr><td><a href='admin_panel.php?menu_setting2=Menu Setting 2'><h3>Menu Setting 2</h3></a></td></tr>

<tr><td><a href='admin_panel.php?page_setting=Page Setting'><h3>Page Setting</h3></a></td></tr>

<tr><td><a href='insert_menu1.php'><h3>Insert Menu 1</h3></a></td></tr>

<tr><td><a href='insert_menu2.php?'><h3>Insert Menu 2</h3></a></td></tr>

<tr><td><a href='insert_page.php'><h3>Insert New Page</h3></a></td></tr>

<tr><td><a href='insert_post.php'><h3>Create New Post</h3></a></td></tr>

<tr><td><a href='admin_panel.php?post_setting=Post Setting'><h3>Post Setting</h3></a></td></tr>

<tr><td><a href='logout.php'><h3>Log Out</h3></td></tr>

</table>

<!--Retrieving Post from the database -->
<?php
include("includes/db.php");
if(isset($_GET['post_setting']))
{
?>
<table border='1' width='40%' align='right'>

<?php

$query = mysql_query("select * from post");

while($result = mysql_fetch_array($query))
{
	//echo "<br>";
	$postid = $result['postid'];
	$post_title = $result['title'];
	$post_desc = substr($result['description'],0,150);
    $date = $result['date'];
    $author = $result['author'];		
    $category = $result['category'];
	$org_path = $result['image'];
	?>
<tr><td align='left' colspan='3' valign='top'><h3><?php echo $post_title; ?></h3></td></tr>

<tr><td colspan='2' align='justify'><h5>&emsp;<?php echo $post_desc; ?></h5><h5><?php echo "<a href='viewfullpost.php?posttitle=$post_title'>"; ?><font color='black'><i><u>View Full Post...</u></i></font></a></h5></td><td><img src='<?php echo $org_path; ?>' width='125px' height='125px' /></td></tr>

<tr><td valign='top'><b>Posted By:</b><?php echo $author; ?><b>@</b><?php echo $date; ?></td></tr>

<tr><td valign='top'><b>Category:</b><?php echo $category; ?></td></tr>
<tr><td valign='top'><a href='delete.php?del_post=<?php echo $post_title; ?>'>Delete</a></td>
<td valign='top'><a href='editpost.php?edit_post=<?php echo $postid; ?>'>Edit</a></td></tr>
<tr><td height='50px' colspan='3'></td></tr>
<?php	}} ?>	
</table>

<!--Retrieving Menu 1 from the database -->

<?php
include("includes/db.php");
if(isset($_GET['menu_setting1']))
{
?>

<table border='1' width='40%' align='right'>
<tr>
<th valign='top'>Menu 1 No</th>
<th valign='top'>Menu Title</th>
<th valign='top'>Delete</th>
</tr>

<?php

	$query = "select * from menu1";
	$run = mysql_query($query);
	while ($row=mysql_fetch_array($run)){
		
		$m_id = $row['m_id'];
		$m_title = $row[1];
?>		
<tr><td valign='top'><?php echo $m_id; ?></td>
<td valign='top'><?php echo $m_title; ?></td>
<td valign='top'><a href='delete.php?del_menu1=<?php echo $m_id; ?>'>Delete</a></td></tr>

<?php	}} ?>	
</table>

<!--Retrieving Menu 2 from the database -->

<?php

if(isset($_GET['menu_setting2']))
{
?>

<table border='1' width='40%' align='right'>

<tr>
<th valign='top'>Menu 2 No</th>
<th valign='top'>Menu Title</th>
<th valign='top'>Delete</th>
</tr>

<?php

	$query = "select * from menu2";
	$run = mysql_query($query);
	while ($row=mysql_fetch_array($run))
	
	{
		$m_id = $row['m_id'];
		$m_title = $row[1];
?>	

<tr><td valign='top'><?php echo $m_id; ?></td>
<td valign='top'><?php echo $m_title; ?></td>
<td valign='top'><a href='delete.php?del_menu2=<?php echo $m_id; ?>'>Delete</a></td></tr>

<?php	}} ?>	
</table>

<!--Retrieving Pages from the database -->

<?php 
if(isset($_GET['page_setting']))
{ 
?>

<table border='1' width='40%' align='right'>

<tr>
<th valign='top'>Page No</th>
<th valign='top'>Page Title</th>
<th valign='top'>Page Description</th>
<th valign='top'>Delete</th>
</tr>

<?php

	$query = "select * from pages";
	$run = mysql_query($query);
	while ($row=mysql_fetch_array($run))
	
	{
		$p_id = $row['p_id'];
		$p_title = $row[1];
		$p_description = substr($row[2],0,200);
?>		

<tr><td valign='top'><?php echo $p_id; ?></td>
<td valign='top'><?php echo $p_title; ?></td>
<td valign='top'><?php echo $p_description; ?></td>
<td valign='top'><a href='delete.php?del_page=<?php echo $p_id; ?>' >Delete</a></td></tr>

	<?php	}} ?>	

</table>

</body>

</html>