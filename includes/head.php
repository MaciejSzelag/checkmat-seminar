<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $tabTitle;
if (empty($tabTitle)) {
    echo "Checkmat seminar soon";
} else {
    echo $tabTitle;
}

?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Antonio:wght@100..700&family=Vina+Sans&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php $folderPath;if (!empty($folderPath)) {echo $folderPath . "css/style.min.css";} else {echo "css/style.min.css";}
;?>">
</head>

<body>
