<?php
if (isset($_GET['source'])) {
    $source = $_GET['source'];
    $source = strtolower($source);
} else {
    $source = '';
}

//switch for tab name
switch ($source) {
    case "add-a-new-event";
        $tab_title = "Add a New Event";
        break;
    case "table-all-events";
        $tab_title = "All Events";
        break;
    default:
        $tab_title = "Dashboard";
        break;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SB Admin - <?php $tab_title;
echo $tab_title;?> </title>
    <link rel="stylesheet" href="css/admin.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>

<?php include "admin_navigation.php";?>
<section class="dashboard-home">
        <div class="dash-container">
            <div class="content-wrapper">
