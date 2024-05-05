<?php Core\View::render("header");

$errors =
  [
    'email_taken' => "Tento email je již registrován",
    'wrong_password' => "Hesla se musí opravdu shodovat"
  ]
?>

<body>
  <div class="container-flex">
    <form action="/PCSFSD_final_project/registration" class="form form-flex" method="post">
      <h2 class="form__heading">Registration</h2>
      <input id="reg-email" type="text" placeholder="Type email" name="email" required>
      <input id="reg-password1" type="password" placeholder="input password" name="password" required>
      <?php if (isset($_GET["error-email"])) echo '<p class="password--warning">' . $errors[$_GET['error']] . '</p>'; ?>
      <input id="reg-password2" type="password" placeholder="Check password" name="password2" required>
      <p class="credential--warning">Obě hesla se musí shodovat!</p>
      <?php if (isset($_GET["error-password"])) echo '<p>' . $errors[$_GET['error-password']] . '</p>'; ?>
      <button class="form__button form__button--submit">Registration</button>
    </form>
  </div>
  <script src="resources/script.js"></script>
</body>

</html>