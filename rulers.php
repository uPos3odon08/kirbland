<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Standings</title>
</head>
<body>
    <h1 class="center-text big-font">List Of The Rulers Of The Different Countries</h1>
    <p class="center-text small-font"><a href="index.html">Return</a></p>
    <div class="smallmed-font">

        <?php
        // Read the text file line by line and generate HTML for each entry
        $file = fopen("entries.txt", "r") or die("Unable to open file!");
        while (!feof($file)) {
            $line = fgets($file);
            echo "<p>$line</p><hr>";
        }
        fclose($file);
        ?>

    </div>
    <p class="center-text small-font"><a href="#top">Back To The Top</a></p>
</body>
</html>