<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $dob = htmlspecialchars($_POST['dob']);
    $age = htmlspecialchars($_POST['age']);
    $experiences = $_POST['experience'];
    $references = $_POST['references'];
    $photo = '';

    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['photo']['name']);

        if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
            $photo = $uploadFile;
        }
    }

    $curriculo = "
    <html>
    <head>
        <title>Currículo de $name</title>
        <style>
            body { font-family: Arial, sans-serif; }
            .container { max-width: 800px; margin: 0 auto; padding: 20px; }
            .profile-photo { max-width: 150px; border-radius: 50%; }
            h1 { font-size: 24px; }
            h2 { font-size: 20px; margin-top: 20px; }
            ul { list-style-type: none; padding: 0; }
            li { margin-bottom: 10px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>$name</h1>
            <p>Data de Nascimento: $dob</p>
            <p>Idade: $age</p>";

    if ($photo) {
        $curriculo .= "<img src='$photo' class='profile-photo' alt='Foto de $name'>";
    }

    $curriculo .= "
            <h2>Experiências Profissionais</h2>
            <ul>";

    foreach ($experiences as $experience) {
        $curriculo .= "<li>$experience</li>";
    }

    $curriculo .= "
            </ul>
            <h2>Referências Pessoais</h2>
            <ul>";

    foreach ($references as $reference) {
        $curriculo .= "<li>$reference</li>";
    }

    $curriculo .= "
            </ul>
        </div>
    </body>
    </html>
    ";

    echo $curriculo;
    echo "<script>window.print();</script>";
}
?>