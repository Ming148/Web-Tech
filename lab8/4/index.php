<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>

<body>

        <?php
            $url = "http://10.0.15.20/lab8/restapis/10countries";
            $json = file_get_contents($url);
            $data = json_decode($json, true);
            foreach ($data as $num => $value) {
                echo '<div class="col">';
                echo '<div class="row">';
                echo "<p>Name : <b>".$data[$num]["name"]."</b><br>";
                echo "Capital : ".$data[$num]["capital"]."</br>";
                echo "Population : ".$data[$num]["population"]."</br>";
                echo "Region : ".$data[$num]["region"]."</br>";
                echo "Location : ".$data[$num]["latlng"][0]." ".$data[$num]["latlng"][1]."</br>";
                echo "Border : ";
                foreach ($data[$num]["borders"] as $value) {
                        echo $value." ";
                    }
                echo "</p>";
                echo "</div>";
                echo '<div class="row">
                        <img src="'.$data[$num]["flag"].'">
                     </div>';
                echo "</div>";
                }
        ?>
</body>

</html>