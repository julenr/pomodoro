<!DOCTYPE html>
<html lang="en" ng-app="taskApp" > 
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pomodoro task manager</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- Respond.js for IE 8 or less only -->
        <!--[if (lt IE 9) & (!IEMobile)]>  
        	<script src="js/vendor/respond.min.js"></script>
        <![endif]--> 
    </head>
    <body class="container" ng-controller="mainController" id="page-top">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <header role="banner">
			<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#page-top">Pomodoro Task Manager</a>
                    </div>

					<div class="collapse navbar-collapse" id="main-navbar">                    
						<ul class="nav navbar-nav">  
                            <li class="hidden"><a href="#page-top"></a></li>      
							<li class="page-scroll" data-toggle="collapse" data-target="#main-navbar"><a href="#newTask">Add New Task</a></li>        
							<li class="page-scroll" data-toggle="collapse" data-target="#main-navbar"><a href="#pastTasks">View Past Tasks</a></li>        							
						</ul>
					</div>    
				</div>  
			</nav> 
            <br><br>
		</header>
        
		<main role="main" ng-controller="counterController">             
            <div class="container">
                <div class="row">                    
                    <br>
                    <div class="col-lg-offset-2 col-lg-8">
                        <img class="img-responsive" src="img/tomato.png" alt="Tomato picture">
                    </div><!-- col -->
                </div>                
                <div class="row">
                    <div class="col-lg-12 centered">                         
        			    <h1>Pomodoro task manager</h1>          			    
                        <div ng-view></div>                                                
                     </div>
                </div>
            </div>
		</main>  

        <footer role="contentinfo">  
            <div class="container">
        	   <p><small>Copyright &copy; Julen Rojo</small></p> 
            </div>
        </footer> 

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular-route.min.js"></script>

        <!-- ANGULAR -->
        <!-- all angular resources will be loaded from the /public folder -->
        <script src="js/controllers/mainCtrl.js"></script> 
        <script src="js/services/taskService.js"></script> 
        <script src="js/app.js"></script> <!-- load our application -->

        <script src="js/plugins.js"></script>     
        
    </body>
</html>