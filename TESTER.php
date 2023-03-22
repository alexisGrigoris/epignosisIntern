<?php 
$csv_file = 'books.csv';
$file = fopen($csv_file,'r');
$line = fgetcsv($file);

while($line != false) {
  $title = $line[0];
  $cat = $line[1];
  $star = $line[2];
  $quan = $line[3];
  echo "nikos $title $cat $star $quan <br></br>" . PHP_EOL;
  $line = fgetcsv($file);
}
  
fclose($handle);
?>