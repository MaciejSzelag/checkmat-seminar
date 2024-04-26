<div class="content-card">
    <?php

$sql_query = "SELECT * FROM bank_details";
$result = mysqli_query($conn, $sql_query);
while ($row = mysqli_fetch_assoc($result)) {
    $bd_id = $row["bd_id"];
    $bd_name = $row["bd_name"];
    $bd_sort_code = $row["bd_sort_code"];
    $bd_account_number = $row["bd_account_number"];
    $bd_timestamp = $row["bd_timestamp"];

}
?>
                    <div class="content-title">
                        <h1>Update your Bank Details</h1>
                    </div>
                    <div class="form-wrap">
                        <form action="" method="POST">
                            <div class="input-group-wrap">
                                <div class="input-group" title="Change your name">
                                    <label for="">Name</label>
                                    <input type="text" placeholder="Name" value="<?php echo $bd_name; ?>">
                                </div>
                            </div>
                            <div class="input-group-wrap">
                            <div class="input-group" title="Change Sort Code">
                                    <label for="">Sort Code</label>
                                    <input type="text" placeholder="Sot Code"value="<?php echo $bd_sort_code; ?>">
                                </div>
                                <div class="input-group" title="Change Account Number">
                                    <label for="">Account Number</label>
                                    <input type="text" placeholder="Account number"value="<?php echo $bd_account_number; ?>">
                                </div>
                            </div>
                            <div class="input-group-wrap">
                                <div class="input-group btn-sub">
                                    <input type="submit" value="Submit changes">
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="table-wrap">
                        <table>
                            <tr>
                                <th>Id</th>
                                <th>Bank holder name</th>
                                <th>Sort Code</th>
                                <th>Account number</th>
                                <th>Last Update</th>

                            </tr>
                            <tr>
                                <td><?php echo $bd_id; ?></td>
                                <td><?php echo $bd_name; ?></td>
                                <td><?php echo $bd_sort_code; ?></td>
                                <td><?php echo $bd_account_number; ?></td>
                                <td><?php echo $bd_timestamp; ?></td>

                            </tr>

                        </table>
                    </div>
                </div>
