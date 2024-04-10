<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Блюда</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<section class="vh-100" style="background-color: #110606;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Регистрация</p>
                  @if (Session::has('error'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ Session::get('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                  <form class="mx-1 mx-md-4" action="{{ route('reg.store') }}" method="post">
                    @csrf
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" name="login" id="form3Example1c" class="form-control" color="red" />
                        <label class="form-label" name="" for="form3Example1c">Ваше имя</label>
                      </div>
                    </div>
                      <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" name="password" id="form3Example4c" class="form-control" />
                        <label class="form-label" name="" for="form3Example4c">Пароль</label>
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" name="passwordConfirm" id="form3Example4cd" class="form-control" />
                        <label class="form-label" name="" for="form3Example4cd">Повторите ваш пароль</label>
                      </div>
                    </div>
  
                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" name="iWannaBeASlave" type="checkbox" id="form2Example3c" />
                      <label class="form-check-label"name="" for="form2Example3">
                       Я соглашаюсь с <a href="#!">условиями регистрации</a>
                      </label>
                    </div>
  
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <input type="submit" class="btn btn-primary btn-lg" value="Зарегестрироваться"></input>
                    </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <a href="{{ route('login.create') }}"><input type="button" class="btn btn-primary btn-lg" value="Уже зарегестрированы?"></input></a>
                    </div>
  
                  </form>
  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                  <img src="https://internat-4.ru/wp-content/uploads/2023/08/cropped-cropped-cropped-ГБОУ-школа-интернат-№4-г.о.-Тольятти-1536x554.jpg"
                    class="img-fluid" alt="Sample image">
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>