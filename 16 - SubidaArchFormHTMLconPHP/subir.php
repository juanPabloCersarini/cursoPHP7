<?php
move_uploaded_file($_FILES['archivo']['tmp_name'],"archSubidos/3.jpg");
print_r($_FILES['arch']);
echo "<hr>";

for ($i=0; $i<= count($_FILES['arch']['name'])-1; $i++) {
    echo $_FILES['arch']['name'][$i]."<br>";
    move_uploaded_file($_FILES['arch']['tmp_name'][$i], "archSubidos/$i.jpg");
}

for ($i=0; $i<= count($_FILES['variosArch']['name'])-1; $i++) {
    echo $_FILES['variosArch']['name'][$i]."<br>";
    move_uploaded_file($_FILES['variosArch']['tmp_name'][$i], "archSubidos/$i+3.jpg");
}

?>