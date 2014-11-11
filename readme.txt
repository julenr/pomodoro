Pomodoro task manager Web App Readme File

(C) Julen Rojo 2014

1. Web App overview
2. Features
3. System Requirements
4. Main Files structure
5. Installation instructions 
6. Technologies implemented

WEB APP OVERVIEW
This is a simple SPA Web application implementation of the Pomodoro technique consisting in managing tasks of 25 minutes each.
The example explores the capacity of AngularJS to manage different views using routes, controllers and providers and simultaneusly communicating with the PHP-Laravel Back End with a minimum RESTful API and JSON objects

FEATURES
-A countdown timer 
-Three buttons to Start, Stop and Reset the counter
-A user defined description box with an associated button to store the task information 
-The ability to list all stored tasks 
-Responsive design

SYSTEM REQUIREMENTS
As the app uses Laravel 4 as the Back End framework the basic requirements are as follow:
-PHP 5.4
-MCrypt PHP Extension
-PHP JSON extension
-A web server like Apache or Nginx. Refer to Laravel 4 server configuration if you have issues.
-MySQL
-Internet conecction ;)

MAIN FILES STRUCTURE
The Back End structure is almost the same Laravel file organization that you have out-of-the-box.
--app-views->
	main.php
The Front End structure:
--public-views->
	view-new-task.html
	view-task-list.html
--public-js->
	app.js
--public-js-controllers>
	mainCtrl.js
--public-js-services>
	taskService.js

	
INSTALLATION INSTRUCTIONS
Just copy the whole file structure to your web server public directory.
Create a database, name it pomodoro and ensure that a root user without password has access to it or change the file database.php located in app/config directory reflecting the right user and password credentials.
Run the  migration Artisan CLI command as follow 'PHP artisan migrate' from the application folder. PHP must be accessible.
Browse to the public folder and that should be enough.

TECHNOLOGIES IMPLEMENTED
-HTML5
-CSS3,Bootstrap 3
-Javascript, AngularJS 1.2.5
-PHP, Laravel 4

