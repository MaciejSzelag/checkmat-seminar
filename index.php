<?php $tabTitle = " Seminar | Checkmat | Marco Canha | 28 April 2024";include "includes/head.php";?>
<?php include "includes/intro.php";?>
<?php include "includes/navigation.php";?>
<?php
include "includes/event_variables.php";
// Check if the current date is before the event date
if ($currentDate < $currentEventDate) {
    // Display content for the current event
    include "includes/header.php";
    include "includes/index_page/main_index_content.php";
} else {
    // Display content for after the event
    include "includes/index_page/header_comming_soon.php";
}

?>
<?php include "includes/index_page/payment_details.php";?>
<?php include "includes/contact.php";?>
<?php include "includes/footer.php";
