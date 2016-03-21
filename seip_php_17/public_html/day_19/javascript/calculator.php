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
                <td>First Number</td>
                <td>
                    <input type="number" id="firstNumber">
                </td>
            </tr>
            
            <tr>
                <td>Second Number</td>
                <td>
                    <input type="number" id="secondNumber">
                </td>
            </tr>
            <tr>
                <td>Result</td>
                <td id="result"></td>
            </tr>
            
            <tr>
                <td></td>
                <td>
                    <table style="margin-top: 10px;">
                        <tr>
                            <td>
                                <input type="submit"
                                       id="submit" value="+"
                                       onclick="my_function('+');"
                                >
                            </td>
                            
                            <td>
                                <input type="submit" 
                                       id="submit" value="-"
                                       onclick="my_function('-');"
                                >
                            </td>
                            
                            <td>
                                <input type="submit"
                                       id="submit" value="*"
                                       onclick="my_function('*');"
                                >
                            </td>
                            
                            <td>
                                <input type="submit"
                                       id="submit" value="/"
                                       onclick="my_function('/');"
                                >
                            </td>
                            
                            <td>
                                <input type="submit" 
                                       id="submit" value="%"
                                       onclick="my_function('%');"
                                >
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
        </table>
        
        <script>
            function my_function(value){
                
                var first_number  =   Number(document.getElementById('firstNumber').value);
                var second_number =   Number(document.getElementById('secondNumber').value);
                
                switch(value){
                    case '+':
                        var calculation =  first_number+second_number; 
                        break;
                    case '-':
                        var calculation =  first_number-second_number; 
                        break;
                    case '*':
                        var calculation =  first_number*second_number; 
                        break;
                    case '/':
                        var calculation =  first_number/second_number; 
                        break;
                    case '%':
                        var calculation =  first_number%second_number; 
                        break;
                }
                document.getElementById('result').innerHTML  =   calculation;                
            }
        </script>
    </body>
</html>
