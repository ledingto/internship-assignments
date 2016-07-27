angular.module('userService', [])

.factory('User', function($http) {

    return {
        // get all the users
        get : function() {
            return $http.get('/api/users');
        },

        // save a user (pass in user data)
        save : function(userData) {
            return $http({
                method: 'POST',
                url: '/api/users',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(userData)
            });
        }
    }

});
