<?php

$query = mysql_query("select * from post");

while($result = mysql_fetch_array($query))
{
	echo "<br>";
	$post_title = $result['title'];
	$post_desc = substr($result['description'],0,250);
    $date = $result['date'];
    $author = $result['author'];		
    $category = $result['category'];
	$org_path = $result['image'];

	?>


<table border='0' width='100%'>
<tr><td align='left' colspan='3'><h2>&emsp;<?php echo $post_title; ?></h2></td></tr>

<tr><td colspan='2' align='justify' width='70%' valign='top'><font face='verdana' size='3' color='black' style='line-height:1.5'><?php echo $post_desc; ?></font><h4><?php echo "<a href='viewfullpost.php?posttitle=$post_title'>"; ?><font color='black'><i>&emsp; <u>Continue...</u></i></font></a></h4></td><td width='30%'><img src='<?php echo $org_path; ?>' width='230px' height='200px' /></td></tr>

<tr><td><b>&emsp;Posted By:</b>&emsp;<?php echo $author; ?>&emsp;<b>@</b>&emsp;<?php echo $date; ?></td></tr>

<tr><td><b>&emsp;Category:</b>&emsp;<?php echo $category; ?></td></tr>

<tr><td colspan='4'><hr></td></tr>
<tr><td colspan='4'></td></tr>
</table>

<?php } ?>