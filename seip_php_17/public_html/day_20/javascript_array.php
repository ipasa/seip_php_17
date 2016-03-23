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
                    <fieldset class="form-group">
                        <label for="rec_mode">Select From Javascript Array</label>
                        <select class="form-control" id="rec_mode">
                            
                        </select>
                    </fieldset>
                </div>
            </div>
        </div>
        
        <script>
            var options =
                    [
                        {
                            "text": "Bangladesh",
                            "value": "bd"
                        },
                        {
                            "text": "India",
                            "value": "in"
                        },
                        {
                            "text": "Pakistan",
                            "value": "pk"
                        },
                        {
                            "text": "Australia",
                            "value": "aus"
                        }
                    ];

            var selectBox = document.getElementById('rec_mode');

            for (var i = 0, l = options.length; i < l; i++) {
                var option = options[i];
                selectBox.options.add(new Option(option.text, option.value, option.selected));
            }
        </script>

        <!-- jQuery first, then Bootstrap JS. -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    </body>
</html>