<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" />

        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .default_content {
                text-align: center;
                display: inline-block;
            }

            .default_title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="default_content">
                <div class="default_title">Welcome.</div>
                <p>Please enter your name using only letters and whitespaces.</p>
                <p>Please enter your email using standard email@email.something format.</p>
                <p>If either field is empty or invalid, your information will not save and the page will refresh.</p>
                <p>If your information saves successfully, you will be redirected to a "Thank You" page.</p>
            </div>
        </div>
        <div class="container">
          <h3>Enter the information.</h3>
          <form name="form" id="formID" action="{{ URL::route('createUser') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <input name="name" class="form-control" type="text" placeholder="Name" />
            </div>
            <div class="form-group">
              <input name="email" class="form-control" type="text" placeholder="Email" />
            </div>
            <input type="submit" value="Register" class="btn btn-primary" />
          </form>
        </div>
    </body>
</html>
