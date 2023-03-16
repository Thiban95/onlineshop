<?php
session_start();
include "db.php";


if (isset($_POST['btn_save'])) {
    $fname = $_POST['fname'];
    $contactNum = $_POST['contactNum'];
    $orderId = $_POST['orderId'];
    $agent = $_POST['agent'];
    $subject = $_POST['subject'];


    $sql = "INSERT INTO `contactus` 
		(`fullname`, `contact`, `agent`, `subject`, 
		`orderid`) 
		VALUES ( '$fname', '$contactNum', '$orderId', 
		'$agent', '$subject')";

    if (mysqli_query($con, $sql)) {
        echo "submit_success";
        echo "<script> location.href='index.php'; </script>";
        exit;
    }

    mysqli_close($con);

}

?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
    </style>
</head>

<body>

    <h3>Contact Form</h3>

    <div class="container">
        <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
            <label for="fname">Full Name</label>
            <input type="text" id="fname" name="fname" placeholder="Your name..">

            <label for="lname">Contact number</label>
            <input type="text" id="contactNum" name="contactNum" placeholder="Yourcontact number..">

            <label for="lname">Order Id</label>
            <input type="text" id="orderId" name="orderId" placeholder="Your order Id..">

            <label for="agent">Live Agent</label>
            <select id="agent" name="agent">
                <option value="yes">YES</option>
                <option value="no">NO</option>
            </select>

            <label for="subject">Issue/Remark</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

            <button type="submit" id="btn_save" name="btn_save" value="Submit">SUBMIT</button>
        </form>
    </div>

</body>

</html>