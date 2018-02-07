<html>
<head>

<title>Welcome to Cric Chamber</title>

<style type='text/css'>
a:link{
color:white;
text-decoration:none;
}
a:hover{
color:white;
text-decoration:none;
}
a:visited{
color:white;
text-decoration:none;
}
</style>

</head>
<body>
<table border='1' width='100%' height='100%' background='images/background.jpg'>

<!--Navigation Bar 1-->

<tr>

<!-- Side Bar Ball Left Side  -->

<td height='100%' width='3%' rowspan='5'><img src="images/sidebarball.jpg" width='100%' height='100%'></td>

<td>

	<table border='0' width='100%' background='images/menu.jpg'>
	<tr>
	<?php
	include ("includes/db.php");
	$query = "select * from menu1";
	$run = mysql_query($query);
	while ($row=mysql_fetch_array($run)) {
		
	$m_title = $row[1];
	echo "<td width='10%' align='center'><a href='index.php?pages=$m_title'>$m_title</a></td>";	
	}
	?>
	</tr>
	</table>

</td>
		<!-- Side Bar Ball Right Side  -->
		<td height='100%' width='3%' rowspan='5'><img src="images/sidebarball.jpg" width='100%' height='100%'></td>
</tr>

<!--Header-->

<tr>
<td height='20%'><?php include ("includes/header.php"); ?></td>
</tr>

<!--Navigation Bar 2-->

<tr>
<td>

	<table border='0' width='100%' background='images/menu.jpg'>
	<tr>
	<?php
	include ("includes/db.php");
	$query = "select * from menu2";
	$run = mysql_query($query);
	while ($row=mysql_fetch_array($run)) {	
		$m_title = $row[1];
		echo "<td width='10%' align='center'><a href='index.php?post=$m_title'>$m_title</a></td>";		
	}
	
	?>
	
	</tr>
	</table>
	
</td>
</tr>
<!--Main Content-->

<tr>
<td align='top'>
<table border='0' width='70%' align='left'>
<tr><td>

<?php
include('includes/db.php');
$post = $_GET['posttitle'];
$query = mysql_query("select * from post where title='$post'");

while($result = mysql_fetch_array($query))
{
	echo "<br>";
	$post_title = $result['title'];
	$post_desc = $result['description'];
    $date = $result['date'];
    $author = $result['author'];		
    $category = $result['category'];
	$org_path = $result['image'];

	?>


<table border='0' width='100%'>
<tr><td align='left' colspan='3'><h2>&emsp;<?php echo $post_title; ?></h2></td></tr>

<tr><td colspan='2' align='justify' width='70%'><font face='verdana' size='3' color='black' style='line-height:1.5'><?php echo $post_desc; ?></font><td width='30%' valign='top'><img src='<?php echo $org_path; ?>' width='230px' height='200px' /></td></tr>

<tr><td><b>&emsp;Posted By:</b>&emsp;<?php echo $author; ?>&emsp;<b>@</b>&emsp;<?php echo $date; ?></td></tr>

<tr><td><b>&emsp;Category:</b>&emsp;<?php echo $category; ?></td></tr>

</table>

<?php } ?>

</td></tr></table>

<!--Side Bar-->

<table border='0' align='right' width='30%'>
		<tr>	
<td width='5%' ><img src='images/sidebar.jpg' width='100%' height='100%'></td>
<td width='95%' valign='top'><div class='social' align="center">
<?php include('sidebar.php'); ?>
</td>
		</tr>
		</table>
		</td></tr>
<!--Footer-->
<tr><td align='center' height='3%'><b>Copyright 2016 | All Right Reserved | By Cric Chamber</b></td></tr>

</table>
</body>
</html>