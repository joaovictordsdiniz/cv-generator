<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículos</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Gerador de Currículos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contato.php">Contato</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container mt-5">
        <h1>Preencha seus dados</h1>
        <form action="form-handler.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="dob">Data de Nascimento:</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="age">Idade:</label>
                <input type="number" class="form-control" id="age" name="age" readonly>
            </div>
            <div class="form-group">
                <label for="photo">Foto de Perfil:</label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Endereço:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="education">Formação Acadêmica:</label>
                <div id="education-container">
                    <div class="education-entry">
                        <input type="text" class="form-control mb-2" name="education[]" placeholder="Curso / Instituição">
                    </div>
                </div>
                <button type="button" class="btn btn-primary" id="add-education">+</button>
            </div>
            <div class="form-group">
                <label for="experience">Experiências Profissionais:</label>
                <div id="experience-container">
                    <div class="experience-entry">
                        <input type="text" class="form-control mb-2" name="experience[]" placeholder="Empresa / Cargo">
                    </div>
                </div>
                <button type="button" class="btn btn-primary" id="add-experience">+</button>
            </div>
            <div class="form-group">
                <label for="references">Referências Pessoais:</label>
                <div id="references-container">
                    <div class="reference-entry">
                        <input type="text" class="form-control mb-2" name="references[]" placeholder="Nome / Contato">
                    </div>
                </div>
                <button type="button" class="btn btn-primary" id="add-reference">+</button>
            </div>
            <button type="submit" class="btn btn-success">Gerar Currículo</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>