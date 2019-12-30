<?php include_once 'header.php'; ?>
<main id='contato-principal'>
  <section id='form-contato'>
    <div class="container mt-5">
      <h2>Entre em contato:</h2>
      <div class="row">
        <div class="col">
          <form>
            <div class="form-group">
              <label for="nome">Nome Completo:</label>
              <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
              <label for="telefone">Telefone:</label>
              <input type="tel" class="form-control" name="telefone" placeholder="(99)999999">
            </div>
            <button type="submit" class="btn btn-lg btn-primary botao-submit">Enviar</button>
          </form>
        </div>
  </div>
    </div>
  </section>
</main>
<?php include_once 'footer.php'; ?>
