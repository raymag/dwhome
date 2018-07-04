<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP&AJAX&MySQL</title>
    <link rel="stylesheet" href="css/padrao.css">
    <script>
        function estadio(value){
            
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(this.readyState==4 || this.status == 200){
                    document.getElementById("estadio").innerHTML = this.responseText;
                }
            }
            clube = value.split(" ");
            clube = clube.join("+");
            console.log(clube);
            xmlhttp.open("GET", "estadio.php?clube="+clube, true);
            xmlhttp.send();
        }
    </script>
</head>
<body>
    <form onsubmit="return false">
        <fieldset>
            <legend>Clubes de Futebol Brasileiro</legend>
            <label>Clube: <select name="clube" id="clubeSelect" onchange="estadio(this.value)">
                <?php
                $conn = mysqli_connect("localhost", "root", "", "torcida", "8089");
                mysqli_set_charset($conn, "UTF8");
                $sql = "SELECT nome FROM clubes";
                $query = mysqli_query($conn, $sql);
                if(mysqli_num_rows($query)){
                    while($row = mysqli_fetch_array($query)){
                        echo "<option name='".$row["nome"]."'>".$row["nome"]."</option>";
                    }
                }
                ?>
            </select></label><hr>
            <p>Estádio: <span id="estadio"></span></p>
        </fieldset>
    </form>
    <script>estadio(document.getElementById("clubeSelect").value);</script>
</body>
</html>