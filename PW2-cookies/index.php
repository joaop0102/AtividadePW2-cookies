<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PW2 Cookies</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <div class="container">
    <h1>Atividade com Cookies</h1>
    
    <?php
      $cookie_nome = "joao";
      $expiracao_passada = time() - 3600;
      $cookie_valor = "123";

      
      setcookie($cookie_nome, $cookie_valor, time() + 3600, "/", "AtividadePW2-Cookies");
      echo "<p class='success'>Cookie '" . $cookie_nome . "' criado com sucesso!</p>";
    ?>
    
    <div class="message">
      <?php
        if (!isset($_COOKIE[$cookie_nome])) {
          echo "<p class='success'>Cookie '" . $cookie_nome . "' está definido!</p>";
        } else {
          echo "<p class='error'>Cookie '" . $cookie_nome . "' está definido!<br>";
          echo "Valor é: " . $_COOKIE[$cookie_nome] . "</p>";
        }
      ?>

      <?php
        // Adapte a mensagem para a exclusão do cookie
        if (isset($_COOKIE[$cookie_valor])) {
          setcookie($cookie_valor, "", $expiracao_passada);
          echo "<p class='success'>Cookie '" . $cookie_valor . "' excluído com sucesso!</p>";
        } else {
          echo "<p class='error'>Cookie '" . $cookie_valor . "' não estava definido, não foi excluído!</p>";
        }
      ?>
    </div>
  </div>
</body>
</html>
