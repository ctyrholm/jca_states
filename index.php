<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>States Index</title>
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body style = "background-color: #e8e8e8;">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
        </div>
    </nav>
        <div class="container">
            <div class = "row">
                <div class="col-md-12 text-center">

                <h1>United States</h1>
                </div>
                <?php


                $states = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");

                foreach($states as $state) {
                    //lowercase with underscore
                    $lowerunder = strtolower($state);
                    $lowerunder = preg_replace('/\s+/', '_', $lowerunder);

                    //uppercase with underscore
                    $upperunder = preg_replace('/\s+/', '_', $state);

                    echo '<div class="col-md-3" style = "padding: 10px;">';
                    echo '<a href = "pages/'.$lowerunder.'.html"><img src = "https://jaxcode.com/stateflags/'.$upperunder.'.svg.png" alt = "" class = "img-fluid"></a><br>';
                    echo '<a href = "pages/'.$lowerunder.'.html">'.$state.'</a>';
                    echo '</div>';

                }
                ?>
                <br><br>
        </div>
    </div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>