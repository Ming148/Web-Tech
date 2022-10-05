<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="from">From:
            <select name="select" id="select">
                <?php
                $url = "http://10.0.15.20/lab8/restapis/currencyrate";
                $response = file_get_contents($url);
                $result = json_decode($response);
    
                foreach ($result->rates as $key => $value) {
                    echo '<option value="'.$value.'">'.$key.'</option>';
                }
                ?>
            </select>
            <input type="text" name="money" required/>
        </label>

        <br>

        <label for="to">To:
            <select name="select2" id="select2">
                <?php
                foreach ($result->rates as $key => $value) {
                    echo '<option value="'.$value.'">'.$key.'</option>';
                }
                ?>
            </select>
            <input type="text" name="ans" readonly value="
            <?php
                if (isset($_POST['select'])){
                    $val1 = $_POST['select'];
                    $val2 = $_POST['select2'];
                    $money = $_POST['money'];
                    echo number_format((float)$money / $val1 * $val2, 2, '.', '');
                }
            ?>">
        </label>

        <br>

        <button type="submit" name="convert">Convert</button>
    </form>
</body>
</html>