<?php
//Reading the file
$count = file_get_contents("count.txt");
//Increasing the count
$count = explode("=", $count);
$count[1] = $count[1]+1;
//Writing to file
$file = fopen("count.txt", "w+");
fwrite($file, "count=".$count[1]);
fclose($file);
//Returning the count
print "count=".$count[1];
?>