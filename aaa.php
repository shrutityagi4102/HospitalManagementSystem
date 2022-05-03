<!DOCTYPE html>
<html>
    <body>
        <?php
        $fp = fopen("file1.txt", "w");//open file in write mode
        fwrite($fp, "Name: "); 
        fwrite($fp, "Varshaah"); 
        fclose($fp); 
        echo "File written successfully"; 
        ?>
    </body>
</html>
