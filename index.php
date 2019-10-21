<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Envio de Emails - Uniritter</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="js/bootstrap.min.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
</head>
<body class="bg-light">

  <div class="container">
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

                      <div class="col-md-9">
                        <fieldset disabled>
                          <!-- <label for="pais">Email de Envio</label> -->
                          <label for="pais">Email de Envio</label>
                          <select id="disabledSelect" class="form-control">
                            <option>financeiro@uniritter.edu.br</option>
                          </select>
                        </fieldset>
                      </div>
                      <div class="col-md-3">
                        <label for="pais">Trocar de Email</label><br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalLogin">Logar com Novo Email </button>
                      </div>
                  </div>
                  <br>

                  <!-- INICIO MODAL LOGIN -->
                    <div class="modal" id="modalLogin">
                      <div class="modal-dialog">
                        <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Login</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body">
                            <h5 style="font-size: 15px;" class="text-center"> Coloque o Email e a Senha do Office para que consigar usar a ferramenta de disparo.</h5>
                            <form class="form-signin">
                              <div class="form-label-group">
                                <label for="inputEmail">Endereço de Email</label>
                                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                <br>
                              </div>

                              <div class="form-label-group">
                                <label for="inputPassword">Senha</label>
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                              </div>
                              <br>
                              <button class="btn btn-primary btn-block text-uppercase" type="submit">Logar</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- FIM MODAL LOGIN -->

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
                  <div class="row">
                      <div class="col-md-12">
                          <br>
                          <h5 class="mb-3 text-center">Remetentes dos Emails</h5>
                          <br>
                          <div id="tabs">
                            <ul>
                              <li><a href="#tabs-1">Pesquisar Por Aluno</a></li>
                              <li><a href="#tabs-2">Pesquisar por Bolsas e Financiamentos</a></li>
                              <li><a href="#tabs-3">Enviar de Maneira Geral</a></li>
                            </ul>
                            <div id="tabs-1">
                              <label for="pais">Nome do Aluno</label>
                              <div class="row">
                                  <div class="col-md-10">
                                      <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                                  </div>
                                  <div class="col-md-2">
                                      <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
                                  </div>
                              </div>
                              <br>
                              <label for="pais">Matrícula do Aluno</label>
                              <div class="row">
                                  <div class="col-md-10">
                                      <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                                  </div>
                                  <div class="col-md-2">
                                      <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
                                  </div>
                              </div>

                            </div>
                            <div id="tabs-2">
                              <div>
                                  <label for="pais">Bolsas e Financiamentos</label>
                                  <select class="form-control" id="exampleFormControlSelect1">
                                      <option>PRAVALER</option>
                                      <option>FIES</option>
                                      <option>CREDIES</option>
                                      <option>PROUNI</option>
                                      <option>QUERO BOLSA</option>
                                      <option>UNIPOA</option>
                                      <option>BOLSA COMERCIAL - TODO CURSO</option>
                                  </select>
                              </div>
                            </div>
                            <div id="tabs-3">
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
                          </div>
                          <hr class="mb-4">
                          <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar Email</button>
                          <br>
                      </div>
                  </div>
              </form>
          </div>
      </div>
</body>
</html>
