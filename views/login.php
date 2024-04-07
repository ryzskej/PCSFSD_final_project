<?php Core\View::render("header");?>

  <body>
    
    <div class="container-flex">
      <form action="#" method="post" class="form form-flex">
          <h2 class="form__heading">Admin page</h2>
        <input id="login__input-text" type="text" placeholder="Username" name="login" required>
        <input id="input-password" type="password" placeholder="Password" name="password" required>
        <p class="password--warning">Heslo musí být nejméně 5 znaků dlouhé</p>
        <button class="form__button form__button--submit">Login</button>
        <p>Nemáte účet? <a href="registration">Vytvořte si ho</a></p>
      </form>
    </div>
    <script src="resources/script.js"></script>
  </body>
</html>