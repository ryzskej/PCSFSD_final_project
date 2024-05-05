<?php Core\View::render("header"); ?>

<body>
  <div class="container-flex">
    <form action="#" method="post" class="form form-flex">
      <h2 class="form__heading">Admin page</h2>
      <input id="login-email" type="text" placeholder="name@email.com" name="email" required>
      <input id="login-password" type="password" placeholder="Password" name="password" required>
      <p class="credential--warning">Heslo musí být nejméně 5 znaků dlouhé</p>
      <?php if (isset($_GET['error'])) {
        echo "Špatné mail či heslo";
      } ?>
      <button class="form__button form__button--submit">Login</button>
      <p>Nemáte účet? <a href="registration">Vytvořte si ho</a></p>
    </form>
  </div>
  <script src="resources/script.js"></script>
</body>

</html>