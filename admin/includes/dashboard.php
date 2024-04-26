<div class="content-card">
                    <!-- <div class="content-title">
                        <h1>Dashboard</h1>
                    </div> -->
                    <div class="d-container">
                        <div class="small-box">
                            <div class="box-tab"><i class="fa-solid fa-house"></i></div>

                            <div class="box-content">
                                <h1>Upcoming event</h1>
                                <div class="content">
                                    <h2>Marco Canha</h2>
                                    <p>28 April 2024</p>
                                    <p></p>
                                </div>
                                <div class="btn-wrap">
                                    <a href="index.php?source=update-upcoming-event">Update</a>
                                </div>
                            </div>
                        </div>
                        <div class="small-box">
                            <div class="box-tab"><i class="fa-solid fa-money-check-dollar"></i></div>

                            <div class="box-content">
                                <h1>Current prices</h1>
                                <div class="content">
                                    <table>
                                        <tr>
                                            <td>Checkmat members</td>
                                            <td> £25</td>
                                        </tr>
                                        <tr>
                                            <td>Non members</td>
                                            <td> £35</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="btn-wrap">
                                <a href="index.php?source=update-event-prices">Update</a>
                                </div>
                            </div>
                        </div>
                        <div class="small-box">
                            <div class="box-tab"><i class="fa-solid fa-money-bill-transfer"></i></div>
                            <div class="box-content">
                                <h1>Bank details</h1>
                                <div class="content">
                                    <table>
                                        <?php

$sql_query = "SELECT * FROM bank_details";
$result = mysqli_query($conn, $sql_query);
while ($row = mysqli_fetch_assoc($result)) {
    $bd_name = $row["bd_name"];
    $bd_sort_code = $row["bd_sort_code"];
    $bd_account_number = $row["bd_account_number"];

}

?>
                                        <tr>
                                            <td>Name</td>
                                            <td><?php echo $bd_name; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Sort Code</td>
                                            <td><?php echo $bd_sort_code; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Account Number</td>
                                            <td><?php echo $bd_account_number; ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="btn-wrap">
                                <a href="index.php?source=update-bank-details">Update</a>
                                </div>
                            </div>
                        </div>
                        <div class="small-box">
                            <div class="box-tab"><i class="fa-regular fa-calendar"></i></div>
                            <div class="box-content">
                                <h1>Contact details</h1>
                                <div class="content">


                                    <table>
                                       <?php
findAllContactDetails();

?>

                                    </table>
                                </div>
                                <div class="btn-wrap">
                                <a href="index.php?source=update-contact-details">Update</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
