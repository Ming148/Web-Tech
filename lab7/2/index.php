<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>64070113</title>
</head>

<body>
    <table>
        <tr>
            <th>Su</th>
            <th>Mo</th>
            <th>Tu</th>
            <th>We</th>
            <th>Th</th>
            <th>Fr</th>
            <th>Sa</th>
        </tr>
        <?php
            $num = 1;
            $day = 1;
            for($i = 1; $i <= 5; $i++){
                echo "<tr>";
                for($j = 1; $j <= 7; $j++){
                    if ($num < 3) {
                        echo "<td></td>";
                    } elseif ($num > 33) {
                        echo "<td></td>";
                    } else {
                        echo "<td>$day</td>";
                        $day++;
                    }
                    $num++;
                }
            }
                echo "</tr>";
        ?>
    </table>
</body>

</html>