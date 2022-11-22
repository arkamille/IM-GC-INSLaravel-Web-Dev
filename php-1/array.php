<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Array</title>
</head>
<body>
<h1>Berlatih Array</h1>
<?php
echo "<h3> Soal 1 </h3>";
/* SOAL NO 1
Kelompokkan nama-nama di bawah ini ke dalam Array. Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" Adults: "Hopper", "Nancy", "Joyce", "Jonathan", "Murray" */
$kids =  array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven");  // Lengkapi di sini
$adults = array("Hopper", "Nancy", "Joyce", "Jonathan", "Murray");
echo "$"."kids =  array("."'Mike',", "'Dustin',", "'Will',", "'Lucas',", "'Max',", "'Eleven'".")";
echo "<br> $"."adult =  array("."'Hopper',", "'Nancy',", "'Joyce',", "'Jonathan',", "'Murray'".")";
echo "<h3> Soal 2 </h3>";
/* SOAL NO 2
Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array. */
echo "Cast Stranger Things: ";
echo "<br>";
echo "Total Kids: "; echo count($kids);// Berapa panjang array kids echo "<br>";
echo "<ol>";
echo "<li> $kids[0] </li>";
echo "<li> $kids[1] </li>";
echo "<li> $kids[2] </li>";
echo "<li> $kids[3] </li>";
echo "<li> $kids[4] </li>";
// Lanjutkan
echo "</ol>";
echo "Total Adults: "; echo count($adults);// Berapa panjang array adults echo "<br>";
echo "<ol>";
echo "<li> $adults[0] </li>";
echo "<li> $adults[1] </li>";
echo "<li> $adults[2] </li>";
echo "<li> $adults[3] </li>";
echo "<li> $adults[4] </li>";
// Lanjutkan
echo "</ol>";
/* SOAL No 3
Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi
Name: "Will Byers" Age: 12, Aliases: "Will the Wise" Status: "Alive" Name: "Mike Wheeler" Age: 12, Aliases: "Dungeon Master" Status: "Alive" Name: "Jim Hopper" Age: 43, Aliases: "Chief Hopper" Status: "Deceased"
Name: "Eleven" Age: 12, Aliases: "El" Status: "Alive" Output: Array
(
[0] => Array
(
[Name] => Will Byers [Age] => 12
[Aliases] => Will the Wise
[Status] => Alive
)
[1] => Array
(
[Name] => Mike Wheeler [Age] => 12
[Aliases] => Dugeon Master [Status] => Alive
)
[2] => Array
(
[Name] => Jim Hooper [Age] => 43
[Aliases] => Chief Hopper [Status] => Deceased
)
[3] => Array
(
[Name] => Eleven
[Age] => 12
[Aliases] => El
[Status] => Alive
)
) */
$people1 = array("Name:"=>"Will Byers", "Age"=>12, "Aliases"=>"Will the Wise", "Status"=> "Alive");
$people2 = array("Name:"=>"Mike Wheeler", "Age"=>12, "Aliases"=>"Dungeon Master", "Status"=> "Alive");
$people3 = array("Name:"=>"Jim Hopper", "Age"=>43, "Aliases"=> "Chief Hopper", "Status"=> "Deceased");
$people4 = array("Name:"=>"Eleven", "Age"=>12, "Aliases"=>"El", "Status"=> "Alive");

echo "<h3>Soal no 3</h3>";
echo "[0]";
echo "<br>[Name] =>".$people1["Name"];
echo "<br>[Age] =>".$people1["Age"];
echo "<br>[Aliases] =>".$people1["Aliases"];
echo "<br>[Status] =>".$people1["Status"];
echo "<br>[1]";
echo "<br>[Name] =>".$people2["Name"];
echo "<br>[Age] =>".$people2["Age"];
echo "<br>[Aliases] =>".$people2["Aliases"];
echo "<br>[Status] =>".$people2["Status"];
echo "<br>[2]";
echo "<br>[Name] =>".$people3["Name"];
echo "<br>[Age] =>".$people3["Age"];
echo "<br>[Aliases] =>".$people3["Aliases"];
echo "<br>[Status] =>".$people3["Status"];
echo "<br>[3]";
echo "<br>[Name] =>".$people4["Name"];
echo "<br>[Age] =>".$people4["Age"];
echo "<br>[Aliases] =>".$people4["Aliases"];
echo "<br>[Status] =>".$people4["Status"];
?>
</body>
</html>