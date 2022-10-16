<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div id="container">
        <form method="POST">
            <h2>Employee Form</h2>
            <div class="mb-3">
                <label for="ID" class="form-label">ID : <input type="text" name="ID"></label>
            </div>
            <div class="mb-3">
                <label for="Name" class="form-label">Name : <input type="text" name="fname"></label>
            </div>
            <div class="mb-3">
                <label for="Age" class="form-label">Age : <input type="text" style="width=5px" name="age"></label>
            </div>
            <div class="mb-3">
                <label for="Salary" class="form-label">Salary : <input type="text" name="salary"></label>
            </div>
            <div class="mb-3">
                <label for="Address" class="form-label">Address : <textarea name="address" cols="30"
                        rows="3"></textarea></label>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php 
            // Connect to Database  
            class MyDB extends SQLite3 { 
                function __construct() { 
                    $this->open('wt-company.db'); 
                } 
            } 

            // Open Database  
            $db = new MyDB(); 


            if(isset($_POST["submit"])){
                $em_id = $_POST["ID"];
                $em_name = $_POST["fname"];
                $em_age = $_POST["age"];
                $em_addr = $_POST["address"];
                $em_salary = $_POST["salary"];
                $sql =<<<EOF
                    INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY) 
                    VALUES ($em_id, '$em_name', $em_age, '$em_addr', $em_salary ); 
                EOF;
                $ret = $db->exec($sql);
                if(!$ret) { 
                    echo $db->lastErrorMsg(); 
                } else { 
                    echo'<h1>List of Employees</h1>
                    <table class="table"><tr><th>ID</th><th>Name</th><th>Age</th><th>Address</th><th>Salary</th></tr>';
        
                    $sql ="SELECT * from COMPANY";
                    $ret = $db->query($sql);
                    while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                        echo "<tr><td>". $row['ID'];
                        echo "<td>". $row['NAME'];
                        echo "<td>". $row['AGE'];
                        echo "<td>".$row['ADDRESS'];
                        echo "<td>".$row['SALARY'];
                    }
                } 
            }


            // Close database 
            $db->close(); 

        ?>
    </div>
</body>

</html>