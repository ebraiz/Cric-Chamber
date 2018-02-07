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
<table border='0' width='100%' height='100%' background='images/background.jpg'>

<!--Navigation Bar 1-->

<tr>

<!-- Side Bar Ball Left Side  -->

<td height='100%' width='3%' rowspan='5' valign='top'>
<?php
for($x=0;$x<=15;$x++){
echo "<img src='images/sidebarball1.jpg'>" . "<br>";}
?>

</td>

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

<td width='3%' rowspan='5' valign='top'>
		
<?php
for($x=0;$x<=15;$x++){
echo "<img src='images/sidebarball1.jpg'>" . "<br>";}
?>

</td>
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

		if (empty($_GET) || isset($_GET['pages']) && $_GET['pages'] == 'Home'){
			include('home.php');}
			
		elseif (isset($_GET['pages']) && $_GET['pages'] == 'Live Streaming'){
			header('location:http://cricchamber.blogspot.com/p/live-streaming_5.html');}
		
		elseif (isset($_GET['pages']) && $_GET['pages'] == 'Cric Games'){
			header('location:http://cricchamber.blogspot.com/2014/11/download-free-cricket-games.html');}
		
		elseif (isset($_GET['pages']) && $_GET['pages'] == 'FAQs'){
			header('location:http://cricchamber.blogspot.com/p/faqs.html');}
		
		elseif(isset($_GET['post'])){
			include ('viewpost.php');}
		
		elseif(isset($_GET['pages'])){
		include ('pages.php');}		
?>

		</td>
		<td width='2%'><img src='images/sidebar.jpg' width='100%' height='100%'></td>
		</tr></table>

	<!--Side Bar-->

<table border='0' align='right' width='30%' height='100%'>
		<tr>	

<td width='100%' valign='top'><div class='social' align='center'>
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