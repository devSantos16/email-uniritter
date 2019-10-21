
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Envio de Emails - Uniritter</title>
</head>

<body class="bg-light">

<div class="container">
    <!--    <div class="py-5 text-center">-->
    <!--       <img src="logo-ritter.png" alt="" width="250" height="90">-->
    <!--        <h2>Envio de Emails de Forma Prática</h2>-->
    <!--        <p class="lead">Basta selecionar as opções corretamente que o email será enviado com sucesso.</p>-->
    <!---->
    <!--    </div>-->
    <div class="col-md-12 text-center">
        <br>
        <h2>Envio de Emails de Forma Prática</h2>
        <p class="lead">Basta selecionar as opções corretamente que o email será enviado com sucesso.</p>
    </div>


    <div class="">
        <div class="col-md-12 order-md-1">
            <h5 class="mb-3 text-center">Endereço de Envio</h5>
            <form class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="pais">Email de Envio</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>fulano01@uniritter.edu.br</option>
                            <option>fulano02@uniritter.edu.br</option>
                            <option>fulano03@uniritter.edu.br</option>
                            <option>fulano04@uniritter.edu.br</option>
                            <option>fulano05@uniritter.edu.br</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3 ">
                        <h5 class="mb-3 text-center">Mensagem</h5>
                        <label for="pais">Grupo de Mensagens Padronizadas</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Reembolso</option>
                            <option>Dívida</option>
                            <option>Mensalidade</option>
                            <option>Taxas</option>
                            <option>Pagamentos Recusados</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pais">Mensagem Selecionada:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" >Mensagem Padrão de resposta a solicitação de reembolso</textarea>
                </div>
                <label for="pais"> Anexos:</label>
                <div class="custom-file">

                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile">Escolher arquivo...</label>
                    <div class="invalid-feedback">Exemplo de feedback inválido para input file</div>
                </div>
                <hr class="mb-4">
                <h5 class="mb-3 text-center">Remetentes dos Emails</h5>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pesquisar por Aluno</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pesquisar por Bolsas e Financiamentos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Enviar por Curso ou Campus</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <br>
                        <label for="pais">Campus</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>FAPA</option>
                            <option>FADERGS</option>
                            <option>UNIRITTER CANOAS</option>
                            <option>UNIRITTER ZONA SUL</option>
                            <option>UNIRITTER IGUATEMI</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="pais">Curso</label>
                        <select class="custom-select d-block w-100" id="pais" required>
                            <option value="">Escolha...</option>
                            <option>Administração</option>
                            <option>Enfermagem</option>
                            <option>Jogos Digitais</option>
                            <option>Informática</option>
                            <option>Nutrição</option>
                            <option>Psicologia</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor, escolha um país válido.
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="estado">Turno</label>
                        <select class="custom-select d-block w-100" id="estado" required>
                            <option value="">Escolha...</option>
                            <option>Manhã</option>
                            <option>Tarde</option>
                            <option>Noite</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor, insira um estado válido.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="cep">Dia</label>
                        <select class="custom-select d-block w-100" id="estado" required>
                            <option value="">Escolha...</option>
                            <option>Segunda</option>
                            <option>Terça</option>
                            <option>Quarta</option>
                            <option>Quinta</option>
                            <option>Sexta</option>
                            <option>Sábado</option>
                            <option>Domingo</option>
                        </select>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar Email</button>
                <br>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="/docs/4.1/assets/js/vendor/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="/docs/4.1/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
<script src="/docs/4.1/assets/js/docs.min.js"></script>

</body>
</html>
