<?
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!--$_SERVER superglobal segítségével nem fog megnyílni a script.php-->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
            <tr>
                <td>E-mail cím:</td>
                <td><input type="text" name="email" placeholder="email@email.xy" required=""/></td>
            </tr>
            <tr>
                <td>Jelszó:</td>
                <td><input type="password" name="password" placeholder="Jelszó" minlength="6" required/></td>
            </tr>
            <tr>
            <td colspan="2" align="right"><input type="submit" value="Küldd!"/></td>
            </tr>
        </table>
    </form>
</body>
</html>