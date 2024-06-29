<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $dob = htmlspecialchars($_POST['dob']);
    $age = htmlspecialchars($_POST['age']);
    $experiences = $_POST['experience'];

    // Formatação do currículo
    $curriculo = "
    <html>
    <head>
        <title>Currículo de $name</title>
    </head>
    <body>
        <h1>$name</h1>
        <p>Data de Nascimento: $dob</p>
        <p>Idade: $age</p>
        <h2>Experiências Profissionais</h2>
        <ul>";

    foreach ($experiences as $experience) {
        $curriculo .= "<li>$experience</li>";
    }

    $curriculo .= "
        </ul>
    </body>
    </html>
    ";

    // Gerar e baixar currículo
    echo $curriculo;
    echo "<script>window.print();</script>";
}
?>