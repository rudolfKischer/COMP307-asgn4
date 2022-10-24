<html>
    <body>
        <?php 
            $plays_league = $_POST['os'];


            $data = [ $_POST["firstName"], 
                        $_POST["lastName"], 
                        $_POST["email"], 
                        $_POST["phone"], 
                        $_POST["lastName"],
                        $_POST["books"],
                        $plays_league ];
            
            $filename = 'mini4.csv';
            $f = fopen($filename, 'a');

            if ($f === false) {
                die('Error opening the file ' . $filename);
            }
            

            fputcsv($f, $data);

            
            fclose($f);
            
            $f = fopen($filename, 'r');
            while(!feof($f)) {
                $line = fgets($f);
                # do same stuff with the $line
                echo $line, "\n";
            }
            fclose($f);



            
        ?>
    </body>
</html>