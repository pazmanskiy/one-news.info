<?php
$str_data = file_get_contents("https://el-slim.in.ua/api/v1/Marketing/1001");
$data = json_decode($str_data, true);

$temp = "<table>";
 
$temp .= "<tr><th>ClickId</th>";
$temp .= "<th>Дата</th>";
$temp .= "<th>Телефон</th>";
$temp .= "<th>Статус</th>";
$temp .= "<th>Статус дет.</th>";
$temp .= "<th>Сума</th></tr>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($data); $i++)
{
$temp .= "<tr>";
$temp .= "<td>" . $data[$i]["clickId"] . "</td>";
$temp .= "<td>" . $data[$i]["date"] . "</td>";
$temp .= "<td>" . $data[$i]["phoneNumber"] . "</td>";
$temp .= "<td>" . $data[$i]["status"] . "</td>";
$temp .= "<td>" . $data[$i]["statusDetails"] . "</td>";
$temp .= "<td>" . $data[$i]["price"] . "</td>";
$temp .= "</tr>";
}
 
/*End tag of table*/
$temp .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp;
?>

<style>
/*Style for Table*/
table, th , td {
border: 1px solid grey;
border-collapse: collapse;
padding: 4px;
font-family: arial;
    margin: 0 auto;
    width: 1150px;
    text-align: center; 
}
/*Style for Table Header*/
th {
background: darkblue;
color: white;
text-align: center;
}
/*Style for Alternate Rows*/
table tr:nth-child(odd) {
background-color: #C2EBC3;
}
table tr:nth-child(even) {
background-color: #FFFFFF;
}
</style>