<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
<<<<<<< HEAD
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
=======
>>>>>>> 634718b8157dc28f2da835b8f153824afb81fb99
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
     $nomeUsuario ="";
     $disable = "";
     $disable2 = "";
  
    if(isset($_COOKIE['usuario'])){
        if(empty($_COOKIE['usuario'])){
            $nomeUsuario = "???";
        }else{
        $nomeUsuario = $_COOKIE['usuario'];}
        $disable = "";
        $disable2 = "disabled";

    }
    if (!isset($_COOKIE['usuario'])) {
        $nomeUsuario = "cookie foi excluído com sucesso!";
        $disable = "disabled";
        $disable2 = "";
    }
    
    ?>
<div class="container" >

    <div class="content">      

      <div id="Area">
        <form method="post" action="cookies.php"> 
<<<<<<< HEAD
          <h1 style="text-align: center;">Cookies</h1> 
=======
          <h1>Cookies</h1> 
>>>>>>> 634718b8157dc28f2da835b8f153824afb81fb99
          
          <p> 
            <label for="nome_cookies" >Nome do cookie</label>
            <input id="nome_cookies" name="nome_cookies" required="required" type="text" placeholder="<?=$nomeUsuario?>" <?=$disable2?>/>
          </p>
          
          <p> 
            <label for="alt_cookies" >Alterar nome do cookie</label>
            <input id="alt_cookies" name="alt_cookies" required="required" type="text"  placeholder="<?=$nomeUsuario?>" <?=$disable?>/> 
          </p>
          
  
          <p> 
            <input class="salv" type="submit" value="Salvar"/> 
          </p>

        </form>
        <form method="post" action="cookies.php"> 
            <div  style="text-align: center;">
                <button ><input class="btn btn-primary" type="submit" name="excluir" value="Excluir cookies"/> </button>
           </div>
        </form>
              <p class="link">
              Olá, <?=$nomeUsuario?></p>
      </div>
    </div>
  </div> 

    
</body>
</html>
