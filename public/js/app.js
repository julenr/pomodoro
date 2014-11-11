
// public/js/app.js
var taskApp = angular.module('taskApp', ['mainCtrl', 'taskService', 'ngRoute']);


taskApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/pastTasks', {
        templateUrl: 'views/view-tasks-list.html'
      }).
      when('/newTask', {
        templateUrl: 'views/view-new-task.html'
      });
  }]);