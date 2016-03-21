<html>
    <head>
        <title>Select</title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <label>Recording Mode:</label>
                </td>
                <td>
                    <select id="CusineList"></select>
                </td>
            </tr>
        </table>

        <script>
            var cuisines = ["Chinese", "Indian"];
            var sel = document.getElementById('CuisineList');
            for (var i = 0; i < cuisines.length; i++) {
                var opt = document.createElement('option');
                opt.innerHTML = cuisines[i];
                opt.value = cuisines[i];
                sel.appendChild(opt);
            }
        </script>
    </body>
</html>