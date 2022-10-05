<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="post">
        <h2>Member Registration</h2>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="name" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea class="form-control" id="address" rows="3" name="address"></textarea>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="age" class="form-control" id="age" name="age">
        </div>
        <div class="form-group">
            <label for="profession">Profession:</label>
            <input type="profession" class="form-control" id="profession" name="profession">
        </div>
        <div class="form-group-check">
            <label for="residentialStatus">Residential status:</label><br>
            <input class="form-check-input" type="radio" name="residentStatus" id="residentStatus" value="resident"
                checked>
            <label class="form-check-label" for="resident">
                Resident
            </label>
            <input class="form-check-input" type="radio" name="residentStatus" id="residentStatus" value="non-resident">
            <label class="form-check-label" for="non-resident">
                Non-Resident
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
<?php

        if(isset($_POST['name'])){
            $name = $_POST["name"];
            if(strlen($name) < 5){
                echo '<script>alert("***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***")</script>';
            }
        }
        if(isset($_POST['address'])){
            $address = $_POST["address"];
            if(strlen($address) < 5){
                echo '<script>alert("***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***")</script>';
            }
        }
        if(isset($_POST['age'])){
            $age = $_POST["age"];
            if(strlen($age) < 2){
                echo '<script>alert("***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***")</script>';
            }
        }
        if(isset($_POST['profession'])){
            $profession = $_POST["profession"];
            if(strlen($profession) < 5){
                echo '<script>alert("***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***")</script>';
            }
        }
        if(!(isset($_POST['residentialStatu']))){
                echo '<script>alert("***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***")</script>';
            }

    ?>

</html>