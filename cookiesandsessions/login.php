<?php

session_start();

const login = 'admin';
const password = 'admin';

if (isset($_POST['login']) && isset($_POST['password'])) //when form submitted
{
  if ($_POST['login'] === login && $_POST['password'] === password)
  {
    $_SESSION['login'] = $_POST['login']; //write login to server storage
    header('Location: /'); //redirect to main
  }
  else
  {
    echo "<script>alert('Wrong login or password');</script>";
    echo "<noscript>Wrong login or password</noscript>";
  }
}

?>
<style>
body {
    font-family: Arial;
}

#frmLogin {
    padding: 20px 40px 40px 40px;
    background: #d7eeff;
    border: #acd4f1 1px solid;
    color: #333;
    border-radius: 2px;
    width: 300px;
}

.input-field {
    padding: 12px 15px;
    width: 100%;
    border: #A3C3E7 1px solid;
    border-radius: 2px;
    margin-top: 5px;
}

.form-submit-button {
    background: #3a96d6;
    border: 0;
    padding: 10px 0px;
    border-radius: 2px;
    color: #FFF;
    text-transform: uppercase;
    width: 100%;
}
</style>

<form id="frmLogin" method="post">
  Login<br><input name="login" type="text" class="input-field"><br>
  Password<br><input name="password" type="password" class="input-field"><br>
  <input type="submit" class="form-submit-button">
</form>


