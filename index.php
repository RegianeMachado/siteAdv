<?php include_once 'header.php'; ?>
<main id="principal-index">
    <section class="section section-xl bg-primary overlay-dark text-white rounded" id="principal-info">
        <div class="container">
            <div class="row rounded">
                <div class="rounded mx-auto d-block p-5 mt-5" id='principal-top'>
                    <h1>Anderson S. Assis</h1>
                    <h2>Advocacia Cível</h2>
                    <div class="mt-5">
                        <button type="button" name="button" class="btn btn-primary" id="botao-principal"><a href='contato.php'>Entre em contato</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="areas-atuacao">
        <div class="mt-5 ml-3 mr-3">
            <div class="album py-5 bg-light">
                <div class="row">
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="img/negocio.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Contratos</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary botao-card">Mais informações</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="img/divorcio.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Divócios</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary botao-card">Mais informações</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="img/casa.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Ajuste de Aluguel</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary botao-card">Mais informações</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section id="sobre">
    <div class="mt-5">
        <div class="d-flex justify-content-around ml-5">
            <div class="col-4">
                <img src="img/contrato.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-8">
                <h2>Sobre</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <div class="d-flex justify-content-around  ml-5">
            <div class="col-8">
                <h2>Sobre</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-4 mr-4">
                <img src="img/contrato.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section id="contato">
    <div class="container mt-5">
        <h2>Entre em contato:</h2>
        <div class="row">
            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="nome">Nome Completo:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(99)999999">
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem:</label>
                        <textarea name="mensagem" rows="8" cols="80" class="form-control" id="mensagem" name="mensagem" placeholder="Digite sua dúvida"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary botao-submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>
</div>
</div>

</main>
<?php include_once 'footer.php'; ?>
