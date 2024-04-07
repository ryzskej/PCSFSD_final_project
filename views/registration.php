<?php Core\View::render("header");


$errors = 
[
  'email_taken' => "Tento email je již registrován", 
  'wrong_credentials' => "Zadali jste špatné přihlašovací údaje"
]

?>

  <body>
    
    <div class="container-flex">
      <form action="/PCSFSD_final_project/registration" class="form form-flex" method="post">
          <h2 class="form__heading">Registration</h2>
        <input id="reg-text" type="text" placeholder="Type email" name="email" required>
        <input id="reg-password-check1" type="password" placeholder="input password" name="password" required>
        <?php if(isset($_GET["error"])) echo '<p class="password--warning">'.$errors[$_GET['error']].'</p>'; ?>
        <input id="reg-password-check2" type="password" placeholder="Check password" required>
                <button class="form__button form__button--submit">Registration</button>
      </form>
    </div>
  </body>
</html>