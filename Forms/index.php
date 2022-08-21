<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>

  <link rel="stylesheet" href="style.css">
</head>
<body>

  <form action="mailer.php" method="post" class="box">

    <?php
      if($_GET['success'] == 1){
        echo "<div class=\"form-result succes\">Odeslání proběhlo v pořádku</div>";
      };
      
      if($_GET['success'] == -1){
        echo "<div class=\"form-result error\">Odeslání se nezdařilo</div>";
      };
    ?>
  

    <h1>Kontakt</h1>
    <input type="text" name="name" placeholder="Jméno a příjmení">
    <input type="email" name="email" placeholder="Email">
    <textarea name="message" id="" cols="30" rows="10" placeholder="Zadej text"></textarea>
    <div class="submit-btn-container">
      <input class="submit-btn" type="submit" value="Odeslat" >
    </div>
  </form>
  
</body>
</html>