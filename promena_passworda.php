<!DOCTYPE html>
<html>
     <head>
    <title>Promena passworda</title>
    <link rel="stylesheet" href="styles.css">
     </head>
    <body>
    <h1>Promena passworda</h1>
   <form method="POST" action="logika/password_change.php">
    <table>
    <tr>
   <td class="firstcolumn">Ukucajte e-mail:</td>
    <td class="secondcolumn"><input type="email" name="email"></td>
    </tr>
    <tr>
    <td class="firstcolumn">Ukucajte postojeci password:</td>
    <td class="secondcolumn"><input type="password" name="password"></td>
    </tr>
  <tr>
    <td class="firstcolumn">Unesite novi password:</td>
    <td class="secondcolumn"><input type="password" name="newpassword"></td>
    </tr>
    <tr>
   <td class="firstcolumn">Unesite opet novi password:</td>
   <td class="secondcolumn"><input type="password" name="confirmnewpassword"></td>
    </tr>
    </table>
    <p><input type="submit" value="Unos novog passworda" class="button2"></p>
    </form>
   <p><a href="index.php" class="button1">Pocetna</a>
   <a href="logout.php" class="button1">Logout</a></p>
  </body>
</html>  