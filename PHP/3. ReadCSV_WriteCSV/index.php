<?php

$infos = array();
$file_name = "Input.csv";
if (($handle = fopen($file_name, "r")) !== FALSE) {
    echo '<table border="1"><thead>';
    echo '<th>Name</th><th>Email</th><th>Date Of Birth</th>';
    echo '</thead>';
    while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
        echo '<tr><td>' . $data[0] . '</td><td>' . $data[1] . '</td><td>' . $data[2] . '</td></tr>';
        $infos[] = $data[0] . ',' . $data[1] . ',' . $data[2];
    }
    echo '</tbody></table>';
    fclose($handle);
}

$fp = fopen('Output.csv', 'w');

foreach ($infos as $info) {
    fputcsv($fp, array($info), ',', ' ');
}

fclose($fp);
/*
 * End of php-read-write-csv-file.php
 */
?>