<?php session_start();

$pageDetails = [
    "PageID" => "TASS"
];

include dirname(__FILE__) . '/../../classes/startup/init.php';
include dirname(__FILE__) . '/../../classes/users/core.php';
include dirname(__FILE__) . '/../../classes/iotJumpWay/Devices.php';
include dirname(__FILE__) . '/../../classes/TASS/core.php';

$device  = $_GeniSys->_confs['tassID'] ? $_iotJumpWayDevices->getDevice($_GeniSys->_confs['tassID']) : null;
$devices = $_iotJumpWayDevices->getDeviceList();

#print_r($_SESSION);
#session_destroy();
$_users->checkSession();

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
    
        <div id="wrapper">

            <?php include dirname(__FILE__) . '/../includes/nav.php'; ?>

            <div id="page-wrapper">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">TASS LOCAL SETTINGS</h1>
                    </div>
                </div>

                <?php include dirname(__FILE__) . '/../TASS/includes/top.php'; ?>
                <div class="clear"></div>
                
                <div class="row">

                    <div class="col-lg-8">

                        <div class="panel panel-default">

                            <div class="panel-heading">

                                <i class="fa fa-cogs fa-fw"></i> Manage TASS Local Settings

                                <div class="pull-right">

                                    <div class="btn-group">

                                    </div>

                                </div>

                            </div>
                            
                            <div class="panel-body">

                                <?php 
                                    if($_GeniSys->_confs["tassID"]):
                                ?>

                                    <form role="form" id="form">
                                        
                                        <div class="form-group">

                                            <?php
                                            ?>

                                            <label>Choose TASS Local iotJumpWay Device</label>
                                            <select id="deviceID" name="deviceID" class="form-control select-validate">

                                                <option value="">CHOOSE TASS LOCAL DEVICE</option> 
                                                <?php
                                                    if(count($devices->ResponseData)):
                                                        foreach($devices->ResponseData AS $deviceKey => $devVal): 
                                                ?>

                                                <option value="<?=abs($devVal->id); ?>" <?=abs($devVal->id)==$_GeniSys->_confs['tassID'] ? " selected " : ""; ?>><?=abs($devVal->id); ?>: <?=$devVal->device; ?></option>

                                                <?php
                                                        endforeach;
                                                    else:
                                                ?>
                                                
                                                <?php
                                                    endif;
                                                ?>
 
                                            </select>

                                            <input type="hidden" id="deviceIDOld" name="deviceIDOld" value="<?=$_GeniSys->_confs['tassID']; ?>">

                                        </div>

                                        <div class="form-group">

                                            <label>Stream URL</label>
                                            <input type="text" id="tassAddress" name="tassAddress" class="form-control text-validate" value="<?=$_GeniSys->_confs['tassAddress']; ?>">
                                            <p class="help-block">Stream URL For GeniSys Server Local TASS Local Camera.</p>

                                        </div>

                                        <input type="hidden" id="ftype" name="ftype" value="updateTASSlocal" /> 
                                        <a class="btn btn-default" id="formSubmit">Submit</a>

                                    </form>

                                <?php 
                                    else:
                                ?>
                                    <form role="form" id="form">
                                        
                                        <div class="form-group">

                                            <?php
                                                $devices = $_iotJumpWayDevices->getDeviceList();
                                            ?>

                                            <label>Choose TASS Local iotJumpWay Device</label>
                                            <select id="deviceID" name="deviceID" class="form-control select-validate">

                                                <option value="">CHOOSE TASS LOCAL DEVICE</option>
                                                <?php
                                                    if(count($devices->ResponseData)):
                                                        foreach($devices->ResponseData AS $deviceKey => $devVal):
                                                ?>

                                                <option value="<?=abs($devVal->id); ?>"><?=abs($devVal->id); ?>: <?=$devVal->device; ?></option>

                                                <?php
                                                        endforeach;
                                                    else:
                                                ?>
                                                
                                                <?php
                                                    endif;
                                                ?>
 
                                            </select>

                                            <input type="hidden" id="ftype" name="ftype" value="updateTASSlocalID" /> 

                                        </div>

                                        <a class="btn btn-default" id="formSubmit">Submit</a>

                                    </form>

                                <?php 
                                    endif;
                                ?>



                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-4">
        
                        <?php  include dirname(__FILE__) . '/../TASS/includes/deviceInfo.php'; ?>

                    </div>
                        
                </div>

            </div>
        
        </div>
        
        <?php  include dirname(__FILE__) . '/../includes/scripts.php'; ?>

        <script type="text/javascript">
        
        </script>
 
    </body>

</html> 