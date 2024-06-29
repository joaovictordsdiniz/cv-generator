<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Gerador de Currículos</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Sobre</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contato.php">Contato <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container mt-5">
        <h1>Contato</h1>
        <p>Se você tiver alguma dúvida ou sugestão, entre em contato conosco:</p>
        <form>
            <div class="form-group">
                <label for="contact-name">Nome:</label>
                <input type="text" class="form-control" id="contact-name" required>
            </div>
            <div class="form-group">
                <label for="contact-email">E-mail:</label>
                <input type="email" class="form-control" id="contact-email" required>
            </div>
            <div class="form-group">
                <label for="contact-message">Mensagem:</label>
                <textarea class="form-control" id="contact-message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>