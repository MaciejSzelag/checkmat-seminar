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
    case "bank-details-update";
        $tab_title = "Update your bank details";
        break;
    case "update-upcoming-event";
        include "Update upcomimng event";
        break;
    case "update-event-prices";
        include "Update event prices";
        break;
    case "update-contact-details";
        include "Update contact details";
        break;
    default:
        $tab_title = "Dashboard";
        break;

}
?>
<?php include "includes/admin_head.php";?>
                <?php
//switch for pages
switch ($source) {
    case "add-a-new-event";
        include "includes/add_event.php";
        break;
    case "table-all-events";
        include "includes/all_events.php";
        break;
    case "bank-details-update";
        include "includes/update_bank_details.php";
        break;
    case "update-upcoming-event";
        include "includes/update_upcoming_event.php";
        break;
    case "update-bank-details";
        include "includes/update_bank_details.php";
        break;
    case "update-event-prices";
        include "includes/update_event_prices.php";
        break;
    case "update-contact-details";
        include "includes/update_contact_details.php";
        break;
    default:
        include "includes/dashboard.php";
        break;
}
?>
<?php include "includes/admin_footer.php";?>

