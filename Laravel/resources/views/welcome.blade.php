<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
        <!-- <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text text-light font-weight-bold" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text text-light font-weight-bold" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle  text text-light font-weight-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success text text-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
        </div> -->
        <div style="margin: 50px">
        <?php
            
            $json = json_decode(file_get_contents(base_path("resources/lang/stock_market_data.json")),true);
            $collection = collect($json);
               
        ?>
        <table style="border-collapse:collapse" border="1" class="table">
        <tr style="width:10px">
                <th>Date</th>
                <th>Trade Code</th>
                <th>High</th>
                <th>Low</th>
                <th>Open</th>
                <th>Close</th>
                <th>Volume</th>
        </tr>
            <?php
                foreach($json as $data){
            ?>
            <tr>
                <td><?php echo "<h5 class='h5 text text-dark'>".$data['date']; "</h5>"?></td>
                <td><?php echo "<h5 class='h5 text text-dark'>".$data['trade_code']; "</h5>"?></td>
                <td><?php echo "<h5 class='h5 text text-dark'>".$data['high']; "</h5>"?></td>
                <td><?php echo "<h5 class='h5 text text-dark'>".$data['low']; "</h5>"?></td>
                <td><?php echo "<h5 class='h5 text text-dark'>".$data['open']; "</h5>"?></td>
                <td><?php echo "<h5 class='h5 text text-dark'>".$data['close']; "</h5>"?></td>
                <td><?php echo "<h5 class='h5 text text-dark'>".$data['volume']; "</h5>"?></td>
            </tr> 
                    
            <?php
        }
        ?>
        </table>
            
    </div>  
        
        
    </body>
</html>
