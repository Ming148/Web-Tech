<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
        echo "
        <table class='table'>
            <tr>
                <th>ID</th>
                <th>Name</th> 
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
            ";
        // Connect to Database  
        class MyDB extends SQLite3 { 
            function __construct() { 
            $this->open('customers.db'); 
            } 
        }

        // Open Database
        $db = new MyDB(); 
        // if(!$db) { 
        //     echo $db->lastErrorMsg(); 
        // } else { 
        //     echo "Opened database successfully<br>"; 
        // } 

        // Query process  
        // SQL SELECT  
        $sql ="SELECT * from customers";
        $ret = $db->query($sql);
        while($row = $ret->fetchArray(SQLITE3_ASSOC) ) { 
            echo "<tr>";
            echo "<td>". $row['CustomerId'] . "</td>";
            echo "<td>". $row['FirstName'] . " " . $row['LastName'] . "</td>";
            echo "<td>". $row['Address'] . "</td>";
            echo "<td>". $row['Phone'] . "</td>";
            echo "<td>". $row['Email'] . "</td>";
            echo "</tr>";
         }
         echo "</table>";

         if ($_GET) {
            $em_id = $db->querySingle("SELECT * FROM CUSTOMERS ORDER BY CustomerId DESC LIMIT 1;");
            $sql = "DELETE from CUSTOMERS where CustomerId = $em_id;";
            $ret = $db->exec($sql);
         }

         echo '
         <form action="index.php" method="get">
         <input type="submit" name="insert" class="btn btn-danger" value="Delete last row"/>
         ';
        
        // Close database 
        $db->close();
    ?>
</body>

</html>