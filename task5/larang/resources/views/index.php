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
      <form name="myForm" ng-submit="submitUser()" novalidate> <!-- ng-submit will disable the default form action and use our function -->

          <!-- NAME -->
          <div class="form-group">
              Name:
              <input type="text" class="form-control input-sm" name="name" ng-model="userData.name" ng-pattern="/^[a-zA-Z ]*$/" required>
              <p ng-show="myForm.name.$invalid" class="help-block">Name is required. Letters and whitespaces only.</p>
          </div>

          <!-- EMAIL -->
          <div class="form-group">
              Email:
              <input type="email" class="form-control input-sm" name="email" ng-model="userData.email" ng-pattern="/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/" required>
              <p ng-show="myForm.email.$invalid" class="help-block">Email is required. Format: example@email.com</p>
          </div>

          <!-- PHONE -->
          <div class="form-group">
              Phone Number (10 digits, no spaces or dashes):
              <input type="tel" class="form-control input-sm" name="phone" ng-model="userData.phone" ng-pattern="/^[0-9]{10}$/" required>
              <p ng-show="myForm.phone.$invalid" class="help-block">Phone number is required. Format: 3337770000</p>
          </div>

          <!-- SUBMIT BUTTON -->
          <div class="form-group text-center">
              </br>
              <button type="submit" id="btn" class="btn btn-primary btn-lg" ng-model="button" ng-disabled="myForm.$valid==false">Submit</button>
          </div>
      </form>
    </div>

    <!-- Thank you message. Only show if form submitted successfully -->
    <div ng-hide="!submitSuccess">
        <h3 id="thankyou">Thank You</h3>
        <p>Your information has been successfully registered.</p>
    </div>

</div>
</body>
</html>
