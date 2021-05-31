<!DOCTYPE html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <script
      src="https://kit.fontawesome.com/dc4f8560f3.js"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <style>
      .fas {
        color: #dc3545;
      }

      span > i {
        cursor: pointer;
      }

      span > i:hover {
        color: gray;
      }
    </style>
    <title>Авторизация</title>
  </head>

  <body>
    <form onsubmit="sendForm(this); return false;" autocomplete="off">
      <div class="container">
        <h1 class="my-5 text-center">Авторизация</h1>
        <div class="col-md-5 mx-auto">
          <div class="input-group my-2">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-envelope fa-lg"></i>
              </div>
            </div>
            <input
              type="email"
              class="form-control"
              placeholder="E-mail"
              required
              name="email"
              autocomplete="off"
            />
          </div>
          <p id="info"></p>
          <div class="input-group my-2">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-lock fa-lg"></i>
              </div>
            </div>
            <input
              type="password"
              class="form-control"
              placeholder="Пароль"
              required
              id="formPass"
              name="pass"
              autocomplete="new-password"
            />
            <span
              onmousedown="formPass.type = 'text'; this.nextElementSibling.hidden = false; this.hidden = true; "
              >&nbsp;<i class="fas fa-eye fa-lg"></i
            ></span>
            <span
              hidden
              onmouseup="formPass.type = 'password'; this.previousElementSibling.hidden = false; this.hidden = true; "
              >&nbsp;<i class="far fa-eye-slash"></i
            ></span>
          </div>

          <input
            type="submit"
            class="form-control btn btn-danger"
            value="Авторизоваться"
          />
        </div>
      </div>
    </form>
    <div class="col-sm">
      <div class="text-center my-5">
        <span>Если вы еще не зарегистрированы.</span>
        <a href="reg.php">Пройти регистрацию</a>
      </div>
    </div>

    <script>
      async function sendFormUser(form) {
        let response = await fetch("php/auth_obr.php", {
          method: "POST",
          body: new FormData(form),
        });
        let result = await response.text();
        if (result == "ok") {
          alert("Успешно авторизован!");
        } else {
          info.innerText = "Такой пользователь уже существует!";
        }
      }
    </script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
