<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" />

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
                <div class="default_title">Laravel 5</div>
            </div>
        </div>
        <div class="container">
          <h3>Enter the information.</h3>
          <form action="{{ URL::route('createUser') }}" method="post">
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
