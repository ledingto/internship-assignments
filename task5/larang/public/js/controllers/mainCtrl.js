angular.module('mainCtrl', [])

// inject the User service into our controller
.controller('mainController', function($scope, $http, User) {
    // object to hold all the data for the new user form
    $scope.userData = {};

    // default submit success
    $scope.submitSuccess = false;

    // get all the users first and bind it to the $scope.users object
    // use the function we created in our service
    // GET ALL USERS ==============
    User.get()
        .success(function(data) {
            $scope.users = data;
        });

    // function to handle submitting the form
    // SAVE A USER ================
    $scope.submitUser = function() {
        // save the user. pass in user data from the form
        // use the function we created in our service
        User.save($scope.userData)
            .success(function(data) {

                // if successful, we'll need to refresh the user list
                User.get()
                    .success(function(getData) {
                        $scope.users = getData;
                        $scope.submitSuccess = true;
                    });

            })
            .error(function(data) {
                console.log(data);
            });
    };

});
