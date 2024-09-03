<!DOCTYPE html>
<html>
    <head>
        <script>
            function minhafuncao(){
                const xhttp = new XMLHTTPRequest();
                xhttp.open("POST","demo_ajax.php");
                xhttp.setRequestHeader("Content-type","application/x-www-form-urlencode");
                xhttp.onload = function(){
                    document.getElementById("demo").innerthtml = this.responseText;
                }
                xhttp.send("fname=Mary");
            }
        </script>
    </head>
    <body>
        <button onclick="minhafuncao()">Clique Aqui!</button>
        <h1 id="demo">;</h1>
    </body>
</html>