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
                
                <div class="row" id="hiddenData">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Exit The Word Limit !</strong> You should check in on some of those fields.
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-md-offset-3">
                    <fieldset class="form-group">
                        <label for="startingNumber">Enter Your Text</label>
                        <input type="text" class="form-control" id="startingNumber" 
                               placeholder="Starting Number" onkeyup="loopTest();">
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="showResult"><b>Output Text Field</b></label>
                        | <small class="text-right">Word Left - (<i id="wordCount">140</i>)</small>
                        <textarea class="form-control" id="showResult" rows="8" disabled>
                        
                        </textarea>
                    </fieldset>
                    <button type="submit" class="btn btn-primary" id="myBtn">Submit</button>
                </div>
            </div>
        </div>

        <script>
            document.getElementById("hiddenData").style.visibility = "hidden";
            function loopTest() {
                var data = document.getElementById('startingNumber').value;
                var dataCount = data.length;
                if (dataCount > 10) {
                    document.getElementById("myBtn").disabled = true;
                    document.getElementById("hiddenData").style.visibility = "visible";
                }
                document.getElementById('showResult').innerHTML = data;
                dataCount = 140 - dataCount;
                document.getElementById('wordCount').innerHTML = dataCount;
                console.log(dataCount);
            }
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    </body>
</html>