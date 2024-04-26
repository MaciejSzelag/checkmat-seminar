<?php
function findAllContactDetails()
{
    global $conn;

    $sql_query = "SELECT * FROM contact_details";
    $result = mysqli_query($conn, $sql_query);
    while ($row = mysqli_fetch_assoc($result)) {
        $contact_detail = $row["contact_detail"];
        echo "<tr>";
        echo "<td>{$contact_detail}</td>";
        echo "<tr>";
    }

}
