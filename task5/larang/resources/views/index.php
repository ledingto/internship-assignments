<!doctype html> <html lang="en"> <head> <meta charset="UTF-8"> <title>User Registration</title>

    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <style>
        body     { padding-top:30px; }
        form     { padding-bottom:20px; }
        .user    { padding-bottom:20px; }
    </style>

    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->

    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
        <script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
        <script src="js/services/userService.js"></script> <!-- load our service -->
        <script src="js/app.js"></script> <!-- load our application -->


</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="userApp" ng-controller="mainController"> <div class="col-md-8 col-md-offset-2">

    <!-- Hide div "register-form" if information saves successfully -->
    <div class="register-form" ng-hide="submitSuccess">
      <div class="page-header">
          <h2>User Registration</h2>
          <h4>Please Enter Your Information</h4>
      </div>

      <!-- NEW USER FORM =============================================== -->
      <form ng-submit="submitUser()"> <!-- ng-submit will disable the default form action and use our function -->

          <!-- NAME -->
          <div class="form-group">
              <input type="text" class="form-control input-sm" name="name" ng-model="userData.name" placeholder="Name">
          </div>

          <!-- EMAIL -->
          <div class="form-group">
              <input type="text" class="form-control input-sm" name="email" ng-model="userData.email" placeholder="Email">
          </div>

          <!-- PHONE -->
          <div class="form-group">
              <input type="text" class="form-control input-sm" name="phone" ng-model="userData.phone" placeholder="Phone Number">
          </div>

          <!-- SUBMIT BUTTON -->
          <div class="form-group text-right">
              <button type="submit" class="btn btn-primary btn-lg">Submit</button>
          </div>
      </form>
    </div>

    <!-- Thank you message. Only show if form submitted successfully -->
    <div class="redirect" ng-hide="!submitSuccess">
        <h3>Thank You</h3>
        <p>Your information has been successfully registered.</p>
    </div>

</div>
</body>
</html>
