<?php
session_start();

if ($_SESSION['loggedIn'] != 1)
{
    header("location: SignIn.php");
}
?>
<html>

<head>

    <head>
        <meta name="viewport" content="width=device-width">
        <style type="text/css">
            @charset "UTF-8";
            [ng\:cloak],
            [ng-cloak],
            [data-ng-cloak],
            [x-ng-cloak],
            .ng-cloak,
            .x-ng-cloak,
            .ng-hide {
                display: none !important;
            }

            ng\:form {
                display: block;
            }

            .ng-animate-block-transitions {
                transition: 0s all !important;
                -webkit-transition: 0s all !important;
            }
        </style>
        <title>Index</title>
        <link href="/Content/student?v=EQ-QEp3EHnb26qAYeuzmUJguNmtVuBOcoQ7uFXaV8mc1" rel="stylesheet">




        <style>
            .drawer-controls {
                padding-top: 10px;
            }
        </style>

    </head>

    <body>



        <!--THE NOTIFICAIONS DROPDOWN BOX.-->


        <div id="notifications" style="display: block;">
            <div style="width: 100%">
                <h3>
                    Notifications
                    <a href="superAdminPortal.php" class="pull-right" ng-click="DocumentClick()">Close</a>
                </h3>
            </div>
            <div ng-repeat="notification in Notifications" class="ng-scope">
                <a href="#" ng-click="GoToUrl(notification)">
                    <div class="row" style="margin: 5px; padding: 5px; background-color: lightblue; border-radius: 15px; color: #3b5998; ">
                        <div class="col-md-1 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                            <small class="ng-binding">1</small>
                        </div>
                        <div class="col-md-11 col-sm-12 col-xs-12">
                            <small>
                                <b class="ng-binding">Your requested ad is now promoting <a href="single_ad_info.php">[A172]</a></b>
                            </small>

                        </div>

                    </div>
                </a>
            </div>
            <!-- end ngRepeat: notification in Notifications -->
            <div ng-repeat="notification in Notifications" class="ng-scope">
                <a href="#" ng-click="GoToUrl(notification)">
                    <div class="row" style="margin: 5px; padding: 5px; background-color: lightblue; border-radius: 15px; color: #3b5998; ">
                        <div class="col-md-1 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                            <small class="ng-binding">2</small>
                        </div>
                        <div class="col-md-11 col-sm-12 col-xs-12">
                            <small>
                                <b class="ng-binding">Your requested ad is now promoting <a href="single_ad_info.php">[A218]</a></b>
                            </small>

                        </div>

                    </div>
                </a>
            </div>
            <!-- end ngRepeat: notification in Notifications -->
            <div ng-repeat="notification in Notifications" class="ng-scope">
                <a href="#" ng-click="GoToUrl(notification)">
                    <div class="row" style="margin: 5px; padding: 5px; background-color: lightblue; border-radius: 15px; color: #3b5998; ">
                        <div class="col-md-1 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                            <small class="ng-binding">3</small>
                        </div>
                        <div class="col-md-11 col-sm-12 col-xs-12">
                            <small>
                                <b class="ng-binding">Your requested ad is now promoting <a href="single_ad_info.php">[A172]</a></b>
                            </small>

                        </div>

                    </div>
                </a>
            </div>

            <div ng-repeat="notification in Notifications" class="ng-scope">
                <a href="#" ng-click="GoToUrl(notification)">
                    <div class="row" style="margin: 5px; padding: 5px; background-color: lightblue; border-radius: 15px; color: #3b5998; ">
                        <div class="col-md-1 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                            <small class="ng-binding">4</small>
                        </div>
                        <div class="col-md-11 col-sm-12 col-xs-12">
                            <small>
                                <b class="ng-binding">Your requested ad is now promoting <a href="single_ad_info.php">[A172]</a></b>
                            </small>

                        </div>

                    </div>
                </a>
            </div>
            <!-- end ngRepeat: notification in Notifications -->
            <div ng-repeat="notification in Notifications" class="ng-scope">
                <a href="#" ng-click="GoToUrl(notification)">
                    <div class="row" style="margin: 5px; padding: 5px; background-color: lightblue; border-radius: 15px; color: #3b5998; ">
                        <div class="col-md-1 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                            <small class="ng-binding">5</small>
                        </div>
                        <div class="col-md-11 col-sm-12 col-xs-12">
                            <small>
                                <b class="ng-binding">Your requested ad is now promoting <a href="single_ad_info.php">[A72]</a></b>
                            </small>

                        </div>

                    </div>
                </a>
            </div>

            <div ng-repeat="notification in Notifications" class="ng-scope">
                <a href="#" ng-click="GoToUrl(notification)">
                    <div class="row" style="margin: 5px; padding: 5px; background-color: lightblue; border-radius: 15px; color: #3b5998; ">
                        <div class="col-md-1 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                            <small class="ng-binding">6</small>
                        </div>
                        <div class="col-md-11 col-sm-12 col-xs-12">
                            <small>
                                <b class="ng-binding">Your requested ad is now promoting <a href="single_ad_info.php">[A172]</a></b>
                            </small>

                        </div>

                    </div>
                </a>
            </div>
            <!-- end ngRepeat: notification in Notifications -->
            <div ng-repeat="notification in Notifications" class="ng-scope">
                <a href="#" ng-click="GoToUrl(notification)">
                    <div class="row" style="margin: 5px; padding: 5px; background-color: lightblue; border-radius: 15px; color: #3b5998; ">
                        <div class="col-md-1 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                            <small class="ng-binding">7</small>
                        </div>
                        <div class="col-md-11 col-sm-12 col-xs-12">
                            <small>
                                <b class="ng-binding">Your requested ad is now promoting <a href="single_ad_info.php">[A172]</a></b>
                            </small>

                        </div>

                    </div>
                </a>
            </div>




            <div ng-repeat="notification in Notifications" class="ng-scope">
                <a href="#" ng-click="GoToUrl(notification)">
                    <div class="row" style="margin: 5px; padding: 5px; background-color: lightblue; border-radius: 15px; color: #3b5998; ">
                        <div class="col-md-1 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                            <small class="ng-binding">8</small>
                        </div>
                        <div class="col-md-11 col-sm-12 col-xs-12">
                            <small>
                                <b class="ng-binding">Your requested ad is now promoting <a href="single_ad_info.php">[A172]</a></b>
                            </small>

                        </div>

                    </div>
                </a>
            </div>
            <!-- end ngRepeat: notification in Notifications -->
            <div ng-repeat="notification in Notifications" class="ng-scope">
                <a href="#" ng-click="GoToUrl(notification)">
                    <div class="row" style="margin: 5px; padding: 5px; background-color: lightblue; border-radius: 15px; color: #3b5998; ">
                        <div class="col-md-1 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                            <small class="ng-binding">10</small>
                        </div>
                        <div class="col-md-11 col-sm-12 col-xs-12">
                            <small>
                                <b class="ng-binding">Your requested ad is now promoting <a href="single_ad_info.php">[A987]</a></b>
                            </small>

                        </div>

                    </div>
                </a>
            </div>





            </li>


            </ul>







    </body>

</html>