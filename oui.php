<?php
require("header.php");
$array1=["IntelliJ", "Web", "PHP", "Jet", "Py", "Android", "C", "Go", "Ruby", "Data"];
$array2=["IDEA", "Storm", "Brains", "Charm", "Studio", "Lion", "Land", "Mine", "Grip"];
$nbphrase = $_GET['Nbphrase'];

echo'<ul class="list-group">';
for($i = 0; $i < $nbphrase; $i++) {
    $part1 = $array1[array_rand($array1, 1)];
    $part2 = $array2[array_rand($array2, 1)];
    echo ' <li class="list-group-item">' . $part1 . $part2 . ' </li>' ;
}
echo'</ul>';