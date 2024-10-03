<?php
$directory = __DIR__ . '/views'; // Directory where your .html files are located

// Open the directory
if ($handle = opendir($directory)) {
    // Loop through the files in the directory
    while (false !== ($file = readdir($handle))) {
        // Check if the file ends with .html
        if (pathinfo($file, PATHINFO_EXTENSION) === 'html') {
            // Define the new file name by replacing .html with .blade.php
            $newName = pathinfo($file, PATHINFO_FILENAME) . '.blade.php';

            // Rename the file
            rename($directory . '/' . $file, $directory . '/' . $newName);

            echo "Renamed $file to $newName\n";
        }
    }
    // Close the directory
    closedir($handle);
}
