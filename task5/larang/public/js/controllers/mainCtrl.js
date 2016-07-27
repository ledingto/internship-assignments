angular.module('mainCtrl', [])

// inject the User service into our controller
.controller('mainController', function($scope, $http, User) {
    // object to hold all the data for the new user form
    $scope.userData = {};

    // loading variable to show the spinning loading icon
    $scope.loading = true;

    // get all the users first and bind it to the $scope.users object
    // use the function we created in our service
    // GET ALL USERS ==============
    User.get()
        .success(function(data) {
            $scope.users = data;
            $scope.loading = false;
        });

    // function to handle submitting the form
    // SAVE A USER ================
    $scope.submitUser = function() {
        $scope.loading = true;

        // save the user. pass in user data from the form
        // use the function we created in our service
        User.save($scope.userData)
            .success(function(data) {

                // if successful, we'll need to refresh the user list
                User.get()
                    .success(function(getData) {
                        $scope.users = getData;
                        $scope.loading = false;
                    });

            })
            .error(function(data) {
                console.log(data);
            });
    };

});
