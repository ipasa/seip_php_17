<html>
    <head>
        <title>Form Input</title>
        <style>
            table{
                margin-top: 100px;
            }
            td{
                padding: 10px;
                border: 1px solid #000;
            }
            
        </style>
    </head>
    <body>
        <table align="center">
            <tr>
                <td>First Name</td>
                <td>
                    <input type="text" name="firstName" id="firstName">
                </td>
            </tr>
            
            <tr>
                <td>Last Name</td>
                <td>
                    <input type="text" name="lastName" id="lastName">
                </td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td id="full_name"></td>
            </tr>
            
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" 
                           id="submit" value="fullName"
                           onclick="my_function();"
                    >
                </td>
            </tr>
            
        </table>
        
        <script>
            function my_function(){
                var first_name  =   document.getElementById('firstName').value;
                var last_name   =   document.getElementById('lastName').value;
                
                document.getElementById('full_name').innerHTML  =   first_name+" "+last_name;
            }
        </script>
    </body>
</html>
