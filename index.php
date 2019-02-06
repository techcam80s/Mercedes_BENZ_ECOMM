<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <?php
                    /**
                     * Created by PhpStorm.
                     * User: james
                     * Date: 03/02/19
                     * Time: 16:16
                     */
                ?>

                <div class="col">
                    <?php echo file_get_contents("tpl/forms/createUser.html"); ?>
                </div>

                <div class="col">
                    <?php echo file_get_contents("tpl/forms/getUser.html"); ?>
                </div>

                <div class="col">
                    <?php echo file_get_contents("tpl/forms/joinQueue.html"); ?>
                </div>

                <div class="col">
                    <?php echo file_get_contents('tpl/forms/setNextPlayer.html'); ?>
                </div

                <div class="col">
                    <?php echo file_get_contents('tpl/forms/setGameResult.html'); ?>
                </div

                <div class="col">
                    <?php echo file_get_contents('tpl/forms/removeGamePlayer.html'); ?>
                </div
            </div>
        </div>
    </body>
</html>
