<?php
/*
	Erin Shenk
	CS 375
	Displays class records in a table and determines the average
	02/16/2021
*/

//array with subject as key and grade as value
$grades = array("English" => 100.0, "Math" => 99.5, "Science" => 85.5);

//first part of table creation
$table = "<table style='background-color: #DDEEFF; border-style: solid; border-width: 1px; padding: 3px; border-color: black;'>
	<tr style='border-style: solid; border-width: 1px; padding: 3px;'>";

//second part of table creation, closes first table row and starts second
$table2 = "</tr><tr style='border-style: solid; border-width: 1px; padding: 3px;'>";

//iterates through array
while($subject = each($grades))
{
	//gets key (subject)
	$key = $subject["key"];
	//gets value (grade)
	$val = $subject["value"];
	//adds up all the grades
	$sum += $val;

	//concatenates table with each td with subject written in it
	$table = $table."<td style='border-style: solid; border-width: 1px; padding: 3px;'>".$key."</td>";
	//concatenates table 2 with each td with grade written in it
	$table2 = $table2."<td style='border-style: solid; border-width: 1px; padding: 3px;'>".$val."</td>";
}

//calculates average grade
$ave = $sum/3;

//final part of table
$table3 = "</tr>
<tr>
<td colspan='3' style='border-style: solid; border-width: 1px; padding: 3px;'>Average: ".$ave."</td>
</tr>
</table>";

//prints label
echo "<h2>Class Records<h2><br>";

//concatenates all pieces of table to print out whole table 
echo $table.$table2.$table3;

?>
