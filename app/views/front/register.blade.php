<!DOCTYPE html>
<html style="background: url('/img/bglogin.png')" ng-app="app">
    <head>
        <meta charset="UTF-8">
        <title>Gruik. - Register</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="Shortcut Icon" type="image/png" href="/img/gruik-black.png" />

        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <script src="/vendor/angular/angular.min.js" type="text/javascript"></script>
    </head>

    <body style="background: url('/img/bglogin.png')" ng-controller="RegisterCtrl">

        <div class="form-box" id="login-box">
            <div class="header" style="background:#598D8F;">
                <img src="/img/gruik.png" alt=""><br> Create your Gruik space <br>
            </div>
            <form ng-submit="register()">
                <div class="body bg-gray">

                    <div class="text-center" ng-show="flash" ng-cloak>
                        <small class="label label-danger"><i class="fa fa-times"></i> {{ flash }}</small>
                    </div>

                    <div class="form-group">
                        <input required ng-disabled="loading" ng-model="user.email" type="text" name="email" class="form-control" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <input required ng-disabled="loading" ng-model="user.username" type="text" name="username" class="form-control" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <input required ng-disabled="loading" ng-model="user.password" type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>
                </div>
                <div class="footer">
                    <button ng-disabled="loading" type="submit" class="btn bg-olive btn-block"><i ng-show="loading" class="fa fa-cog fa-spin"></i> Gruik !</button>

                    <p class="pull-right">Already a member ? <a href="{% URL::to('login') %}">Login !</a></p>
                    <p><a href="{% URL::to('/') %}"><i class="fa fa-angle-double-left"></i> Return to home</a></p>
                </div>
            </form>
        </div>

        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/checklist-model/checklist-model.js"></script>
        <script src="/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/js/angular/main.js" type="text/javascript"></script>

    </body>
</html>