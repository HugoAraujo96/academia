<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Academia   </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">

</head>
<body>

  <!-- Navbar será carregada por JavaScript -->
  <div id="navbar-container"></div>

  <!-- Banner -->
  <header class="bg-primary text-white text-center py-5">
    <div class="container">
      <h1>Bem-vindo à Academia</h1>
      <p>Transforme seu corpo. Transforme sua vida.</p>
    </div>
  </header>

  <!-- Sobre -->
  <section id="sobre" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Sobre Nós</h2>
      <p class="text-center">Somos uma academia completa com equipamentos modernos, instrutores qualificados e planos acessíveis para todos os objetivos.</p>
    </div>
  </section>

  <!-- Planos -->
  <section id="planos" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">Nossos Planos</h2>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card text-center">
            <div class="card-header">Básico</div>
            <div class="card-body">
              <h5 class="card-title">R$ 49,90 / mês</h5>
              <p class="card-text">Acesso livre à academia durante o horário comercial + aula de spinning + musculação.</p>
              <a href="#" class="btn btn-primary">Assinar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-3 mt-md-0">
          <div class="card text-center">
            <div class="card-header">Premium</div>
            <div class="card-body">
              <h5 class="card-title">R$ 79,90 / mês</h5>
              <p class="card-text">Acesso 24h + aulas em grupo + avaliação física mensal.</p>
              <a href="#" class="btn btn-primary">Assinar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Galeria de Fotos -->
<section id="galeria" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Nossa Estrutura</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <img src="../assets/img/musculacao.jpg" class="img-fluid rounded shadow img-galeria" alt="Área de musculação">
      </div>
      <div class="col-md-4">
        <img src="../assets/img/aula-spinning.jpg" class="img-fluid rounded shadow img-galeria" alt="Sala de spinning">
      </div>
      <div class="col-md-4">
        <img src="../assets/img/recepecao.png" class="img-fluid rounded shadow img-galeria" alt="Recepção da academia">
      </div>   
    </div>
  </div>
</section>

  <!-- Contato -->
  <section id="contato" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Fale Conosco</h2>
      <form class="row g-3 justify-content-center">
        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Seu nome" required>
        </div>
        <div class="col-md-6">
          <input type="email" class="form-control" placeholder="Seu email" required>
        </div>
        <div class="col-md-12">
          <textarea class="form-control" rows="4" placeholder="Sua mensagem" required></textarea>
        </div>
        <div class="col-md-4 text-center">
          <button type="submit" class="btn btn-success">Enviar</button>
        </div>
      </form>
    </div>
  </section>

  <!-- Rodapé -->
  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; <?php echo date("Y"); ?> Academia. Todos os direitos reservados.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/navbar.js"></script> <!-- JavaScript para injetar a navbar -->
</body>
</html>