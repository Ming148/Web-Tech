<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Member Registration</h1>
    <form id="calform" action="index.php" method="post">
        <div>
            <label for="name">Name:</label><br>
            <input type="text" name="name" value="12345"/>
        </div>
        <div>
            <label for="address">Address:</label><br>
            <textarea name="address" cols="30" rows="10">12345</textarea>
        </div>
        <div>
            <label for="age">Age:</label><br>
            <input type="text" name="age" value="12345"/>
        </div>
        <div>
            <label for="profession">Profession:</label><br>
            <input type="text" name="profession" value="12345"/>
        </div>
        <div>
            <label for="status">Residential status:</label><br>
            <input type="radio" name="status" />
                Resident
            <input type="radio" name="status"/>
                Non-Resisdent
        </div>
        <input type="submit" id="submit" value="Submit">
    </form>
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
            if(strlen($age) < 5){
                echo '<script>alert("***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***")</script>';
            }
        }
        if(isset($_POST['profession'])){
            $profession = $_POST["profession"];
            if(strlen($profession) < 5){
                echo '<script>alert("***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***")</script>';
            }
        }
        if(!(isset($_POST['status']))){

                echo '<script>alert("***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***")</script>';
            }

    ?>

</body>
</html>
