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
    default:
        include "includes/dashboard.php";
        break;
}
?>
<?php include "includes/admin_footer.php";?>

