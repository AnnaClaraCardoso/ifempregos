<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- CDN Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/b0095462dc.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./styles/main.css">

</head>
<body>
  <div class="container">
    <main>
      <section>
        <form class="subscribe-form" method="post">
          <h2>Entre como profissional ou como empregador</h2>
          <div class="row"> 
            <div class="col-md-4 col-lg-4 col-sm-4">
              <label class="card">
                <input name="option" class="radio" type="radio" checked>
                <span class="option-details">
                  <img class="option-icon" src="../../assets/hiring.png" alt="">
                  <span class="option-cost">Estou em busca de profissionais</span>
                </span>
              </label>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4">
              <label class="card">
                <input name="option" class="radio" type="radio" checked>
                <span class="option-details">
                  <img class="option-icon" src="../../assets/cv.png" alt="">
                  <span class="option-cost">Estou em busca de vagas de emprego</span>
                </span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button type="submit" class="subscribe-btn">Cadastrar</button>
              <span>Já possui uma conta? <a href="#">Clique aqui</a></span>
            </div>
          </div>
        </form>
        
      </section>
    </main>
  </div>
</body>
</html>