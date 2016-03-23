<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top: 100px">
                <div class="col-md-6 col-md-offset-3">
                    <h1 id="headline_bangladesh">Hello Bangladesh's</h1>
                    <div id="box_one"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div id="box_one"></div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <button type="button" class="btn btn-primary" onclick="colorChange();">Primary</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                     <input type="text" 
                            class="form-control" placeholder="Username" id="givenRadious">
                </div>
            </div>
            
        </div>

        <script>
            var x = document.getElementById("headline_bangladesh");
            //document.getElementById("headline_bangladesh").innerHTML    =   "Bangladesh Beats india by 4 wickets";
            x.style.color = 'red';
            x.style.backgroundColor = 'green';
            
            var y = document.getElementById("box_one");
            y.style.height  ='300px';
            y.style.width   ='500px';
            y.style.backgroundColor = 'yellow';
            
            function colorChange(){
                var z = document.getElementById("box_one");
                var radius = document.getElementById("givenRadious").value;
                z.style.borderRadius    =   radius+'px';
                z.style.backgroundColor = 'green';
            }
        </script>
    </body>
</html>