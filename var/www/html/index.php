<?php session_start();
include dirname(__FILE__) . '/../classes/startup/init.php';
include dirname(__FILE__) . '/../classes/users/users.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <META name="robots" content="noindex, nofollow">

        <!-- 
          /*********************************************************
          ** @project GeniSys AI Location UI
          ** @author  Adam Milton-Barker <www.adammiltonbarker.com>
          **********************************************************/	
        -->

        <title><?=$_GeniSys->_confs["meta_title"]; ?></title>
        <meta name="description" content="<?=$_GeniSys->_confs["meta_description"]; ?>">
        <meta name="author" content="Adam Milton-Barker">

        <link type="text/css" rel="stylesheet" href="<?=$_GeniSys->_confs["domainString"]; ?>/media/vendor/bootstrap/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="<?=$_GeniSys->_confs["domainString"]; ?>/media/vendor/metisMenu/metisMenu.min.css">
        <link type="text/css" rel="stylesheet" href="<?=$_GeniSys->_confs["domainString"]; ?>/media/css/sb-admin-2.css">
        <link type="text/css" rel="stylesheet" href="<?=$_GeniSys->_confs["domainString"]; ?>/media/vendor/font-awesome/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="<?=$_GeniSys->_confs["domainString"]; ?>/media/GeniSys/GeniSys.css">
    
        <link type="image/x-icon" rel="icon" href="<?=$_GeniSys->_confs["domainString"]; ?>/media/images/site/favicon.png" />
        <link type="image/x-icon" rel="shortcut icon" href="<?=$_GeniSys->_confs["domainString"]; ?>/media/images/site/favicon.png" />
        <link type="image/x-icon" rel="apple-touch-icon" href="<?=$_GeniSys->_confs["domainString"]; ?>/media/images/site/favicon.png" />

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="container">

            <div class="row">

                <div class="col-md-4 col-md-offset-4">

                    <div class="login-panel panel panel-default">

                        <div class="panel-heading">

                            <h3 class="panel-title">Sign In To GeniSys</h3>

                        </div>
                        <div class="panel-body">

                            <form role="form">

                                <fieldset>

                                    <div class="form-group">
                                        <input id="username" type="name" class="form-control username-validate" name="username" placeholder="App Username" value="fTM2hxkEobZY" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control password-validate" name="password" placeholder="App Password" value="0$k2R(kjzF">
                                        <input id="login" type="hidden" class="" name="login" value="1">
                                    </div>
                                    <a id="formSubmit" class="btn btn-lg btn-success btn-block">Login</a>

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script type="text/javascript" src="<?=$_GeniSys->_confs["domainString"]; ?>/media/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?=$_GeniSys->_confs["domainString"]; ?>/media/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?=$_GeniSys->_confs["domainString"]; ?>/media/vendor/metisMenu/metisMenu.min.js"></script>
        <script type="text/javascript" src="<?=$_GeniSys->_confs["domainString"]; ?>/media/js/sb-admin-2.js"></script>
        <script type="text/javascript" src="<?=$_GeniSys->_confs["domainString"]; ?>/media/GeniSys/validation.js"></script>
 
    </body>

</html> 