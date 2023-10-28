<!DOCTYPE html>
<html>
    <head>
        <title>APPLICATION FORM</title>
        <style>
.form{
    text-align: center;
    padding-left: 30px;
}
.text{
    width:30%;
    padding: 8px;
    border: 1px solid rgb(168, 166, 166);
    border-radius: 4px;
    resize: vertical;
}
        </style>
    </head>
    <body>
         <h1 style="text-align:center";>Registration for Committee Members</h1><br>
         <div class="form">
            <div align="center">
            <table>
                <tr>
                    <td><b>Personal Information</b></td>
                </tr>
                <tr>
                    <td>First Name</td><td>:</td><td><input style="width:400px; padding:6px; "type="text" name="name" value=""<?php echo "name"?>></td>
                </tr>
                <tr>
                <td>Last Name</td><td>:</td><td><input style="width:400px; padding:6px;"type="text" name="lastname" value=""<?php echo "lastname"?>></td>
                </tr>
                <tr>
                    <td>E-Mail</td><td>:</td><td><input style="width:400px; padding:6px;" type="text" name="email" value="" <?php echo "email"?>></td>
                </tr>
                <tr>
                    <td>Date of Birth</td><td>:</td><td><input style="width:400px; padding:6px;" type="date" name="dob" value=""<?php echo "dob"?>></td>
                </tr>
                <tr>
                    <td>Gender</td><td>:</td><td><input type="radio" id="html" name="gender" value="Male">
                                                 <label for="gender">Male</label>
                                                 <input type="radio" id="css" name="gender" value="Female">
                                                 <label for="gender">Female</label><br>
                    </td>
                </tr>
                <tr>
                    <td>Mobile Number</td><td>:</td><td><input style="width:400px; padding:6px; "type="text" name="mobno" value=""<?php echo "mobno"?>></td>
                </tr>
                <tr>
                    <td>Alternative Mobile Number</td><td>:</td><td><input style="width:400px; padding:6px;" type="text" name="altmobno" value=""<?php echo "altmobno"?>></td>
                </tr>
                <tr>
                    <td>Blood Group</td><td>:</td><td><input style="width:400px;padding:6px;" type="text" name="bloodgrp" value="" <?php echo "bloodgrp"?>></td>
                </tr>
                <tr>
                    <td>Permanent Address</td><td>:</td><td><input style="width:400px;padding:6px;" type="text" name="address" value="" <?php echo "address"?>></td>
                </tr>
                <tr>
                    <td><b>ID Proof</b></td>
                </tr>
                <tr>
                    <td>Aadhar Card Number</td><td>:</td><td><input style="width:400px;padding:6px;" type="text" name="aadharno" value="" <?php echo "aadharno"?>></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <form action="#">
                            <input type="file">
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>PAN Card Number</td><td>:</td><td><input style="width:400px;padding:6px;" type="text" name="panno" value="" <?php echo "panno"?>></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <form action="#">
                            <input type="file">
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><b>Bank Details</b></td>
                </tr>
                <tr>
                    <td>Account Holder Name</td><td>:</td><td><input style="width:400px; padding:6px;" type="text" name="accname" value="" <?php echo "accname"?>></td>
                </tr>
                <tr>
                    <td>Account Number</td><td>:</td><td><input style="width:400px; padding:6px;" type="text" name="accno" value="" <?php echo "accno"?>></td>
                </tr>
                <tr>
                    <td>IFSC Code</td><td>:</td><td><input style="width:400px; padding:6px;" type="text" name="ifsccode" value="" <?php echo "ifsccode"?>></td>
                </tr>
                <tr>
                    <td>Bank Name</td><td>:</td><td><input style="width:400px; padding:6px;" type="text" name="bankname" value="" <?php echo "bankname"?>></td>
                </tr>
                <tr>
                    <td>Branch Name</td><td>:</td><td><input style="width:400px; padding:6px;" type="text" name="branchname" value="" <?php echo "branchname"?>></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <form action="#">
                            <input type="file">
                        </form>
                    </td>
                </tr>
            </table>
            <br>
            <form method="post" action="/model_form.php">
            <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>