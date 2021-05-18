<!-- <!doctype html> -->

<html lang="en">

    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>Weather App</title>
        
        <link rel="stylesheet" type="text/css" href="css/weatherapp.css">
        
        <?php include("php_weather.php");?>
        
    </head>
    
    <body>
        
        <div class="bg">
        
            <div class="hero-text">
                <h1 style="font-size:50px;margin:20px;">What's The Weather</h1>
                <h4>Enter the name of a city.</h5>
                
                <form method="post"> 
                    <div class="form-group">
                        <input name="cityname" type="text" class="form-control" id="cityname" placeholder="Eg. London, Tokyo">
                    </div>
                    <button type="submit" class="btn btn-primary" id="submitbutton">Submit</button>
                    
                </form>
                <?=$returnmessage?>
            </div>
            
            
            
        
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        
    </body>
    
</html>