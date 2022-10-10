<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
    $url = "https://www.themealdb.com/api/json/v1/1/random.php";
    $request = file_get_contents($url);
    $response = json_decode($request, true);
    $meal = $response["meals"][0];
    $image = $meal["strMealThumb"];
    $name = $meal["strMeal"];
    $instruction = $meal["strInstructions"];
    $youtube = $meal["strYoutube"];

    if (isset($response)) {
        echo ('
            <div class="wrapper">
                <img src=" ' . $image . '" alt="' . $image . '" />
                <h3>' . $name . '</h3>
                <hr/>
                <p>' . $instruction . '</p>
                <div>
                    <button onclick="reload()">Reload</button>
                    <button onclick="navigate()">Learn more</button>
                </div>
            </div>
            <script>
                const reload = () => {
                    location.reload();
                }
                const navigate = () => {
                    location.href = ("' . $youtube . '");
                }
            </script>'
        );
    }

    ?>


</body>

</html>