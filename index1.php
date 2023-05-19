<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action='index1.php' method="get">
        <br><label for='lblData'>Escolha uma data: </label>
        <input type='date' name='data'>
        <input type='submit' value='Obter Signo'>
    </form>
    
    <?php
        $data = date_parse($_GET["data"]);
        
        switch($data["month"]){
            case 1:
                if($data["month"] == 1 and $data["day"] >= 20){
                    echo "<p>Aquarius</p>";
                } else{
                    echo "<p>Capricorn</p>";
                }
            case 2:
                if($data["month"] == 2 and $data["day"] >= 19){
                    echo "<p>Pisces</p>";
                } else{
                    echo "<p>Aquarius</p>";
                }
            case 3:
                if($data["month"] == 3 and $data["day"] >= 21){
                    echo "<p>Aries</p>";
                } else{
                    echo "<p>Pisces</p>";
                }
            case 4:
                if($data["month"] == 4 and $data["day"] >= 20){
                    echo "<p>Taurus</p>";
                } else{
                    echo "<p>Aries</p>";
                }
            case 5:
                if($data["month"] == 5 and $data["day"] >= 21){
                    echo "<p>Gemini</p>";
                } else{
                    echo "<p>Taurus</p>";
                }
            case 6:
                if($data["month"] == 6 and $data["day"] >= 21){
                    echo "<p>Cancer</p>";
                } else{
                    echo "<p>Taurus</p>";
                }
            case 7:
                if($data["month"] == 7 and $data["day"] >= 23){
                    echo "<p>Leo</p>";
                } else{
                    echo "<p>Cancer</p>";
                }
            case 8:
                if($data["month"] == 8 and $data["day"] >= 23){
                    echo "<p>Virgo</p>";
                } else{
                    echo "<p>Leo</p>";
                }
            case 9:
                if($data["month"] == 9 and $data["day"] >= 23){
                    echo "<p>Libra</p>;
                } else {
                    echo "<p>Virgo</p>";
                }
                break;
            case 10:
                if($data["month"] == 10 and $data["day"] >= 23){
                    echo "<p>Scorpio</p>;
                } else {
                    echo "<p>Libra</p>";
                }
            case 11:
                if($data["month"] == 11 and $data["day"] >= 21){
                    echo "<p>Sagittarius</p>;
                } else {
                    echo "<p>Scorpio</p>";
                }
            case 12:
                if($data["month"] == 12 and $data["day"] >= 22){
                    echo "<p>Capricorn</p>;
                } else {
                    echo "<p>Sagittarius</p>";
                }

            default:
                echo "<p>Mês " .$data["month"]. " incorreto!</p>";        
            case 10:
            case 11:
            case 12:
                if($data["month"] == 6 and $data["day"] >= 21){
                    echo "<img src='img/verao.png'>";
                } else {
                    echo "<img src='img/primavera.png'>";
                }
                break;
            default:
                echo "<p>Mês " .$data["month"]. " incorreto!</p>";        
    }

    ?>

</body>
</html>