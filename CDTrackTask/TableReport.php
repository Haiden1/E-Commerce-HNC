<html>
<head>
<title>SQL table data reporter</title>
</head>
<body bgcolor="ivory">
<H1>Report data row(s) from SQL table</H1>

﻿<table border="1">

<tr>
<th>CD title</th>
<th>Label</th>
<th>Artist name</th>
</tr>

<?php	


// connect to the database...
    include("DbConnect.php");                                     
//
// 	 phrase the query you want to ask... e.g.
//
    $Query = "SELECT CD_title,Label,Artist_name FROM CDs";
   
   
	$Result = mysqli_query($DB,$Query);                         // Store the resulting data in the $Result array
?>



<?php
//   now report the data...
$rowcount=0;


// while ( 'is there any data to report?') done with

   while ($Row = mysqli_fetch_assoc($Result)) 
{
 echo '<tr>';
 echo '<td>'.$Row['CD_title'].'</td>';
 echo '<td>'.$Row['Label'].'</td>';
 echo '<td>'.$Row['Artist_name'].'</td>';
 echo '</tr>';
 $rowcount++;
}
echo 'Number of rows is '.$rowcount;
?>
</table>
</body>
</html>
