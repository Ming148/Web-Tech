<!DOCTYPE html>
 <html>
    <head>
        <title>Web</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="row gap-2">
                <?php

                    $data = file_get_contents("pic.json");
                    $data = json_decode($data, true);
                    foreach($data as $element)
                    {
                        echo '<img class="col" style="max-width:250px;" src="'. $element["pic"] .'"/>';
                    }
                ?>
            </div>
        </div>
    </body>
 </html>