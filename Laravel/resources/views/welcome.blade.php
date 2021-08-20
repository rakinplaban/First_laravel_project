<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laravel</title>
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link type="image" rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqjq1aASQnvVpyOHywgW9dkMYVOKzlX1bCTz_pBoLs0vYmlgTMUCa1sgUbeuj3MBu4xYw&usqp=CAU">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5 😁</div>
            </div>
        </div>
        <?php
            //$path = storage_path()."resources/lang/stock_market_data.json";
            $json = json_decode(file_get_contents(base_path("resources/lang/stock_market_data.json")),true);
        ?>
        
    </body>
</html>
