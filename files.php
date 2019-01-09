<?php
$file = "teste.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Open the file for reading
    $handle = fopen($file, "r") or die("ERROR: Cannot open the file.");
        
    // Read fixed number of bytes from the file
    $content = fread($handle, "20");
        
    // Closing the file handle
    fclose($handle);
        
    // Display the file content 
    echo $content;
    
} else{
    echo "ERROR: File does not exist.";
}
?>