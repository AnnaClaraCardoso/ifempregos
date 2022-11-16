<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início | IF Empregos</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/b0095462dc.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">

    <div class="modal fade" id="form-curriculo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-title">
              <h2 id="exampleModalLabel">Monte seu perfil!</h2>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row mb-3">

              <div class="col-md-3">
                <div class="max-width">
                  <div class="image-container">
                    <img id="imgPhoto">
                  </div>
                </div>
                <input type="file" id="flImage" name="uploadfile" accept="image/*">
              </div>

              <div class="col-md-9">
                <p>Primeiro, vamos começar com algumas informações básicas para inserí-lo na plataforma</p>
                <div class="basic-input-group">
                  <input type="text" class="form-control" id="fullName" placeholder="Insira seu nome completo..." value="" required>
                  <input type="date" class="form-control" id="date" placeholder="Insira sua data de nascimento" value="" required>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="location-input-group">
                  <label><strong>Especifique sua localização</strong></label>
                  <select class="form-select" id="state" aria-label="Default select example">
                    <option selected>Selecione o seu estado</option>
                  </select>
                  <select class="form-select" id="city" aria-label="Default select example">
                    <option selected>Selecione sua cidade</option>
                  </select>
                </div>
                <div class="contact-input-group">
                  <label><strong>Adicione seus meios de contato</strong></label>
                  <input type="email" class="form-control" id="email" placeholder="Insira seu email profissional..." value="">
                  <input type="tel" class="form-control" id="phone" placeholder="Insira seu telefone para contato..." value="">
                </div>
                <p>Precisamos saber se você é um profissional especializado para direcioná-lo a vagas que condizam com seu potencial.</p>
                <div class="grade-input-group">
                  <label><strong>Insira informações sobre a sua qualificação</strong></label>
                  <select class="form-select" id="escolarity" aria-label="Default select example" required>
                    <option selected>Selecione o seu nível de escolaridade</option>
                  </select>
                  <input type="text" class="form-control" id="expecialization" placeholder="Insira sua área de formação..." value="" required>
                </div>
                <p>Monte seu perfil com suas informações para que empregadores possam te encontrar mais facilmente</p>
                <div class="employment-input-group">
                  <label><strong>Está vinculado profissionalmente a alguma entidade?</strong></label>
                  <input type="text" class="form-control" id="expecialization" placeholder="Insira sua área de formação..." value="">
                </div>
                <div class="previous-experiences-input-group">
                  <label><strong>Quais são suas experiências prévias em sua carreira?</strong></label>
                  <div class="form-floating">
                    <textarea rows="5" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Elenque alguns cargos que você já ocupou...</label>
                  </div>
                </div>
                <div class="services-input-group">
                  <label><strong>Descreva algumas especialidades as quais deseja ofertar</strong></label>
                  <div class="form-floating">
                    <textarea rows="5" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Elenque alguns serviços que você pode prestar...</label>
                  </div>
                </div>
                <div class="vacancy-opts-input-group">
                  <label><strong>Selecione os tipos de vaga para os quais deseja se candidatar</strong></label>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Freelancer
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Primeiro emprego
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Estágio
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Salvar perfil</button>
          </div>
        </div>
      </div>
    </div>

      <header class="mb-5">
        <h1>LOGO</h1>
      </header>
      <main>
        <div class="input-control">
          <div class="btn-group mb-3" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
            <label class="btn btn-outline-success" for="btnradio1">Vaga</label>
          
            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-success" for="btnradio2">Profissional</label>
          </div>

          <div class="input-group">
            <input type="text" class="form-control" placeholder="Insira palavras-chave para  encontrar serviços..." aria-label="Insira palavras-chave para encontrar serviços..." aria-describedby="button-addon2">
            <button class="search-btn btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
          </div>
        </div>

        <div class="nav-btns-group text-center">
          <button button class="btn btn-success" id="open-modal-btn" data-bs-toggle="modal" data-bs-target="#form-curriculo">Cadastrar-se</button>
          <a class="btn btn-success" href="./src/pages/Feed/index.php" role="button">Início</a>
          <a class="btn btn-success" href="#" role="button">Como Utilizar a Plataforma</a>
          <a class="btn btn-success" href="#" role="button">Sobre Nós</a>
        </div>
      </main>

      <footer>

      </footer>

    </div>

    <script src="./main.js"></script>
</body>
</html>