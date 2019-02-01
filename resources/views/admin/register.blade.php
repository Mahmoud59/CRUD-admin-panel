<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="{{asset('../resources/assets/admin/favicon_16.ico')}}"/>
    <link rel="bookmark" href="{{asset('../resources/assets/admin/favicon_16.ico')}}"/>
    <!-- site css -->
    <link rel="stylesheet" href="{{asset('../resources/assets/admin/dist/css/site.min.css')}}">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{asset('../resources/assets/admin/dist/js/site.min.js')}}"></script>
    <style>
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #303641;
        color: #C1C3C6
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form class="form-signin" role="form" action="{{ url('registeration') }}" method="post">
      	{{ csrf_field() }}
        <h3 class="form-signin-heading">Please sign up</h3>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="glyphicon glyphicon-user"></i>
            </div>
            <input type="text" class="form-control" name="name" id="username" placeholder="Username" autocomplete="on" />
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="glyphicon glyphicon-user"></i>
            </div>
            <input type="email" class="form-control" name="email" id="username" placeholder="Email" autocomplete="on" />
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class=" glyphicon glyphicon-lock "></i>
            </div>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="on" />
          </div>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
      </form>

    </div>
    <div class="clearfix"></div>
    <br><br>
    <!--footer-->
  </body>
</html>
