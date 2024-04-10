<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Блюда</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
  body {
  background: #110606;
  background-image:url(https://internat-4.ru/wp-content/uploads/2023/08/cropped-cropped-cropped-ГБОУ-школа-интернат-№4-г.о.-Тольятти-1536x554.jpg);
  background-size: no-repeat;
  background-position: center;
  background-size: cover;

           

}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
}

.btn-google {
  color: white !important;
  background-color: #ea4335;
}

.btn-facebook {
  color: white !important;
  background-color: #3b5998;
}
  </style>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
              <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-light fs-5">Войдите</h5>
                @if (Session::has('message'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ Session::get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="{{ route('login.store') }}" method="POST">
                    @csrf
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="login" id="floatingInput" placeholder="Логин">
                    <label for="floatingInput">Логин</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Пароль">
                    <label for="floatingPassword">Пароль</label>
                  </div>
    
                  <div class="form-check mb-3">
                    <input class="form-check-input" name="" type="checkbox" value="" id="rememberPasswordCheck">
                    <label class="form-check-label" for="rememberPasswordCheck">
                      Запомнить пароль
                    </label>
                  </div>
                  <div class="d-grid">
                    <input class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" value="Войдите"></input>
                  </div>
                  <hr class="my-4">
                  <div class="d-grid">
                    <a class="btn btn-primary btn-login text-uppercase fw-bold" href="{{ route('reg.create') }}">Зарегестрируйся</a>
                  </div>
                  <br>
                  <div class="d-grid">
                    <button class="btn btn-primary btn-login text-uppercase fw-bold" >Вернуться на главную</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>