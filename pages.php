
		<!--70% rest of the Content Page -->

		<table border='0'>
		<tr>
		<?php 
		$pages = $_GET['pages'];
		$query = "select * from pages where p_title='$pages'";
		$run = mysql_query($query);
		while($row = mysql_fetch_assoc($run)){
		echo "<td valign='top' align='justify'>" . "<h1>" . $row['p_title'] . "<br>" . "</h1>" . "<h3>" . $row['p_description'] . "</h3>" . "</td>";
			}		
		?>
		
		</tr>
		</table>