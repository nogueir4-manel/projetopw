<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calcular Idade</title>
</head>
<body>
    <form method="post">
        Ano de nascimento: <input type="number" name="ano" required>
        <button type="submit">Calcular</button>
    </form>
// oi
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $anoNascimento = $_POST["ano"];
        $anoAtual = date("Y"); // ano atual

        $idade = $anoAtual - $anoNascimento;
        $diasVividos = $idade * 365;
        $idade2050 = 2050 - $anoNascimento;

        echo "<p>Idade: $idade anos</p>";
        echo "<p>Dias vividos (aproximado): $diasVividos dias</p>";
        echo "<p>Idade em 2050: $idade2050 anos</p>";
    }
    ?>
</body>
</html>
// git add. git commit -m segundo commit git push

<?php // TABELA REENVIADA
define("PI", 3.141592); 

$raio = 5; 

$area = 4 * PI * pow($raio, 2); 
$volume = (4/3) * PI * pow($raio, 3); 

echo "Raio da esfera: $raio<br>";
echo "Área da esfera: " . number_format($area, 2) . "<br>";
echo "Volume da esfera: " . number_format($volume, 2);
?>  


