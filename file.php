<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

$txt = "Name: ". $_POST["name"]."\n";
fwrite($myfile, $txt);


$txt = "Email: ". $_POST["email"]."\n";
fwrite($myfile, $txt);


$txt = "Gender: ". $_POST["gender"]."\n";
fwrite($myfile, $txt);


$txt = "Degree: ". $_POST["degree"]."\n";
fwrite($myfile, $txt);

$txt = "Blood Group: ". $_POST["bloodGroup"]."\n";
fwrite($myfile, $txt);

fclose($myfile);
?>