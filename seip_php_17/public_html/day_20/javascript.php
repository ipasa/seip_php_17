<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top: 100px;">
                <div class="col-md-6 col-md-offset-3">
                    <fieldset class="form-group">
                        <label for="startingNumber">Starting Number</label>
                        <input type="number" class="form-control" id="startingNumber" placeholder="Starting Number">
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="endingNumber">Ending Number</label>
                        <input type="number" class="form-control" id="endingNumber" placeholder="Ending Number">
                    </fieldset>
                    <button type="submit" class="btn btn-primary" 
                            value="submit" id="submit" onclick="loopTest();">
                        Submit
                    </button>

                    <fieldset class="form-group">
                        <label for="showResult">Example textarea</label>
                        <textarea class="form-control" id="showResult" rows="3" disabled>
                        
                        </textarea>
                    </fieldset>
                    <!--<div id="showResult"></div>-->
                </div>
            </div>
        </div>

        <script>
            function loopTest() {
                var i = Number(document.getElementById('startingNumber').value);
                var j = Number(document.getElementById('endingNumber').value);
                var data = "";
                //var k =   document.getElementById('startingNumber');
                //console.log(k);
                //
                for(var i=i;i<=j;i++){
                    data += i+" ";
                }
                document.getElementById('showResult').innerHTML   =   data;
            }
        </script>
    </body>
</html>