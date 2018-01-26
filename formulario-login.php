<?php
require_once 'cabecalho.php';
?>
<h1>Entrar</h1>
<form action="login.html" method="post">
  <table class="table">
    <tr>
      <td>Login:</td>
      <td>
        <input class="form-control" type="email" name="login"></input>
      </td>
    </tr>
    <tr>
      <td>Senha:</td>
      <td>
        <input class="form-control" type="password" name="senha"></input>
      </td>
    </tr>
    <tr>
      <td>
        <button name="entrar" class="btn btn-primary">Entrar</button>
      </td>
    </tr>
  </table>
</form>

<?php
require_once 'rodape.php';
 ?>
