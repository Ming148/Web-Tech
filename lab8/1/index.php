<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <h2>Curreny Converter</h2>
        <label for="From">From :</label>
        <select name="from">
            <?php
            $url = "http://10.0.15.20/lab8/restapis/currencyrate";
            $response = file_get_contents($url);
            $result = json_decode($response);

            foreach ($result->rates as $key => $value) {
                echo '<option value="'.$value.'">'.$key.'</option>';
            }
        ?>
        </select>
        <input type="text" name="money" required />

        <br>

        <label for="To">To :</label>
        <select name="to">
            <?php
            foreach ($result->rates as $key => $value) {
                echo '<option value="'.$value.'">'.$key.'</option>';
            }
        ?>
        </select>
        <input type="text" name="ans" readonly value="
        <?php
        if(isset($_POST['from'])){
            $from = $_POST['from'];
            $to = $_POST['to'];
            $money = $_POST['money'];
            echo round(($money / $from * $to), 2);
        }
        ?>">
        <br>
        <button type="submit" name=convert>Convert</button>
    </form>
</body>

</html>