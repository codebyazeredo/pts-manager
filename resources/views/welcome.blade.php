<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}"> <!-- Inclusão do CSS separado -->
</head>
<body>
<header class="text-center">
    <h1>Bem-vindo ao nosso serviço</h1>
    <nav>
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Registrar</a>
    </nav>
</header>

<div class="container">
    <section id="agendamento">
        <h2>Agende seu Serviço</h2>
        <form action="#" method="POST">
            @csrf
            <div class="form-group">
                <label for="data_servico">Data do Serviço</label>
                <input type="date" class="form-control" id="data_servico" name="data_servico" required>
            </div>
            <div class="form-group">
                <label for="tipo_servico">Tipo de Serviço</label>
                <select class="form-control" id="tipo_servico" name="tipo_servico" required>
                    <option value="">Selecione</option>
                    <option value="servico1">Serviço 1</option>
                    <option value="servico2">Serviço 2</option>
                    <!-- Adicione mais serviços conforme necessário -->
                </select>
            </div>
            <button type="submit" class="btn btn-success">Agendar</button>
        </form>
    </section>

    <section id="produtos">
        <h2>Nossos Produtos</h2>
        <div class="row">
            <!-- Exemplo de Produto (substitua pelos produtos reais) -->
            <div class="col-md-4">
                <div class="card">
                    <img src="path/to/imagem-do-produto.jpg" class="card-img-top" alt="Nome do Produto">
                    <div class="card-body">
                        <h5 class="card-title">Nome do Produto</h5>
                        <p class="card-text">Descrição do Produto</p>
                        <p class="card-text"><strong>Preço: R$ 99,99</strong></p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- Adicione mais produtos conforme necessário -->
        </div>
    </section>
</div>

<footer class="footer">
    <p>© 2024 Sua Empresa. Todos os direitos reservados.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
