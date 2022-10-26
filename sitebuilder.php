<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="sitebuilder.php">Home</a></li>
                <li><a href="index.php">Index</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
        </div>
    </nav>

    <div class = "container">
        <br>
        <form action = "sitebuilder.php" method = "POST">
            <button name = "build" class = "btn btn-success">Site Builder</button>
        </form>

        <?php

        if(ISSET($_POST['build'])) {

        $states = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");

        foreach($states as $state) {


        //lowercase with underscore
        $lowerunder = strtolower($state);
        //echo $lowerunder.' | ';
        $lowerunder = preg_replace('/\s+/', '_', $lowerunder);
        //echo $lowerunder.' <br> ';
        //uppercase with underscore
        $upperunder = preg_replace('/\s+/', '_', $state);
        //echo $upperunder;

        //create page
        $myfile = fopen("pages/$lowerunder.html", "w") or die("Unable to open file!");
        $mystring = <<<EOT

                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>$state</title>
                        <!-- Latest compiled and minified CSS -->
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


                    </head>
                    <body>
                    <nav class="navbar navbar-default">
                    <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">WebSiteName</a>
                    </div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="../sitebuilder.php">Home</a></li>
                            <li><a href="../index.php">Index</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul>
                        </div>
                    </nav>
                    <div class="container text-center">
                        <div class= "row">
                            <div class="col-md-12">

                                <h1>$state</h1>

                                <img src = "https://jaxcode.com/stateflags/$upperunder.svg.png" alt = "">
                                <br><br>

                                Wikipedia page
                                <iframe src = "https://en.wikipedia.org/wiki/$upperunder" width='100%' height='10000' frameborder='0'></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- jQuery library -->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

                    <!-- Latest compiled JavaScript -->
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                    </body>
                    </html>
        EOT;


        //write heredoc to each page
        fwrite($myfile, $mystring);
        fclose($myfile);
        echo '<a href = "pages/'.$lowerunder.'.html">'.$state.'</a><br>';
        }
        } //end ISSET
        ?>

</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>