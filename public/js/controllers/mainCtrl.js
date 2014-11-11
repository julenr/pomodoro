
// public/js/controllers/mainCtrl.js
angular.module('mainCtrl', [])
	.controller('mainController', ['$scope', '$http', 'Task' ,
		function($scope, $http, Task) {
			// object to hold all the data for the new task form
			$scope.taskData = {};

			// loading variable to show the spinning loading icon
			$scope.loading = true;

			// get all the tasks first and bind it to the $scope.tasks object
			// use the function we created in our service
			// GET ALL TASKS ====================================================
			Task.get()
				.success(function(data) {
					$scope.tasks = data;
					$scope.loading = false;
				});

			// function to handle submitting the form
			// SAVE A TASK ======================================================
			$scope.submitTask = function() {
				$scope.loading = true;

				// save the task. pass in task data from the form
				// use the function we created in our service
				Task.save($scope.taskData)
					.success(function(data) {

						
						// if successful, we'll need to refresh the tasks list
						Task.get()
							.success(function(getData) {
								$scope.tasks = getData;
								$scope.loading = false;
							});

					})
					.error(function(data) {
						console.log(data);
					});
			};
		

	}])
	.controller('counterController', ['$scope', '$interval',
	    function($scope, $interval) {
	      $scope.minutes = 25;
	      $scope.seconds = 0;

	      var stop;
	      $scope.startCounter = function() {
	        // Don't start a new fight if we are already fighting
	        if ( angular.isDefined(stop) ) return;
	        if($scope.minutes == 0 && $scope.seconds == 0 ){
	        	$scope.minutes = 25;
	      		$scope.seconds = 0;
	      	}

	      	stop = $interval(function() {
		    	if ($scope.seconds == 0) {
		    		$scope.seconds = 59;	
		          	$scope.minutes --;	         
		        } else {
		        	$scope.seconds --;	          	
		        	}
		        if($scope.minutes == 0 && $scope.seconds == 0 ){
		        	$scope.stopCounter();
		        }

	      	}, 1000);
	    };

	    $scope.stopCounter = function() {
	      if (angular.isDefined(stop)) {
	        $interval.cancel(stop);
	        stop = undefined;
	      }
	    };

	    $scope.resetCounter = function() {
	      $scope.minutes = 25;
	      $scope.seconds = 0;
	    };

	    $scope.$on('$destroy', function() {
	      // Make sure that the interval is destroyed too
	      $scope.stopCounter();
	    });
}]);