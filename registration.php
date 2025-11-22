<?php
// Handle form submission
$submitted = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $dob = htmlspecialchars($_POST["dob"]);
    $address = nl2br(htmlspecialchars($_POST["address"]));
    $submitted = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Registration Form</title>

    <style>
        body {
            background: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 500px;
            background: #fff;
            margin: 40px auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #777;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 5px;
            border: 1px solid #999;
        }
        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }
        button {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            background: #007bff;
            color: white;
            border: none;
            font-size: 18px;
            border-radius: 5px;
        }
        .result-box {
            background: #e0f3ff;
            padding: 15px;
            border-left: 5px solid #007bff;
            margin-top: 20px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Online Registration Form</h2>

    <form method="POST">

        <label>Full Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Phone Number</label>
        <input type="text" name="phone" required>

        <label>Gender</label>
        <select name="gender" required>
            <option value="">Select</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>

        <label>Date of Birth</label>
        <input type="date" name="dob" required>

        <label>Address</label>
        <textarea name="address" required></textarea>

        <button type="submit">Submit</button>
    </form>

    <?php if ($submitted) : ?>
        <div class="result-box">
            <h3>✔ Registration Successful</h3>
            <p><strong>Name:</strong> <?= $name ?></p>
            <p><strong>Email:</strong> <?= $email ?></p>
            <p><strong>Phone:</strong> <?= $phone ?></p>
            <p><strong>Gender:</strong> <?= $gender ?></p>
            <p><strong>Date of Birth:</strong> <?= $dob ?></p>
            <p><strong>Address:</strong><br> <?= $address ?></p>
        </div>
    <?php endif; ?>

</div>

</body>
</html>