<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>จังหวัด</th>
                <th>ผู้ติดเชื้อ</th>
                <th>เสียชีวิต</th>
                <th>ยอดผู้ป่วยสะสม</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $url = "https://covid19.ddc.moph.go.th/api/Cases/timeline-cases-by-provinces";
            $json = file_get_contents($url);
            $data = json_decode($json, true);
            $patitents = array_filter($data, fn($item) => $item['txn_date'] == '2022-09-' . rand(1, 31));

            $pos = 0;
            foreach ($patitents as $data) {
                $pos++;
                echo '
                <tr>
                <td>' . $pos . '</td>
                <td>'. $data["province"] . '</td>
                <td>' . $data["new_case"] . '</td>
                <td>' . $data["new_death"] . '</td>
                <td>' . $data["total_case"] . '</td>
                </tr>';
            }
            ?>
        </tbody>
    </table>


</body>

</html>