<!DOCTYPE html>
<html>
<head>
    <title>Detail Page</title>
</head>
    <body>
        <h1>User Detail Page</h1>
        <div id="result-table">
                <table border="1">
                    <tr>
                        <th>Name</td>
                        <th>Father Name</td>
                        <th>Mobile No.</th>
                        <th>Father Mobile No.</td>
                        <th>Email</td>
                        <th>Adddress</td>
                        <th>User Name</td>

                    </tr>
                    <tr>
                        <td id="first"></td>
                        <td id="second"></td>
                        <td id="third"></td>
                        <td id="fourth"></td>
                        <td id="fifth"></td>
                        <td id="sixth"></td>
                        <td id="seventh"></td>

                    </tr>
                </table>
                <br>
            </div>

        <script>
            window.onload = function() {
                document.getElementById('first').innerText = localStorage.getItem('name');
                document.getElementById('second').innerText = localStorage.getItem('fname');
                document.getElementById('third').innerText = localStorage.getItem('mob');
                document.getElementById('fourth').innerText = localStorage.getItem('fmob');
                document.getElementById('fifth').innerText = localStorage.getItem('email');
                document.getElementById('sixth').innerText = localStorage.getItem('addr');
                document.getElementById('seventh').innerText = localStorage.getItem('username');


            };
        </script>
    </body>
</html>