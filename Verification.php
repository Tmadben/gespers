<!DOCTYPE html>
    <head>
        <title>
            Verification authentification
        </title>
    </head>
    <body>
        <?php 
            if (isset($_POST['login']) && (isset($_POST['passe']))) {
                $login = $_POST['login'];
                $passe = $_POST['passe'];
                ?>
                <table border="1">
                    <tr>
                        <td colspan=2> Tentative d'acces </td>
                    </tr>
                    <tr>
                        <td>Login: </td>                        
                        <td><?php echo ('$login') ?></td>
                    </tr>
                    <tr>
                        <td>Mot de passe </td>
                        <td><?php echo ('$passe') ?></td>
                    </tr>
                </table>
            <?php    
                } else {
                    echo ('Les champs sont vides');
                }
            ?>
    </body>
    
</html>