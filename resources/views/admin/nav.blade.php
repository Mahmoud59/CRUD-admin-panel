    <nav role="navigation" class="navbar navbar-custom">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="{{url('client')}}" class="navbar-brand">Home</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#">{{session()->get('name')}}  </a></li>
              <!-- <li class="disabled"><a href="#">Link</a></li> -->
              <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">Account <b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">        
                  <li class="disabled"><a href="{{url('logout')}}">Signout</a></li>
                </ul>
              </li>
            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    <!--header-->
    <body>
    <!--nav-->

    <div class="container-fluid">
    <!--documents-->
        <div class="row row-offcanvas row-offcanvas-left">
          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
            <ul class="list-group panel">
                <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>SIDE PANEL</b></li>
                <li class="list-group-item"><a href="{{asset('../resources/assets/admin/index.html')}}"><i class="glyphicon glyphicon-home"></i>Dashboard </a></li>
                <li>
                  <a href="#demo3" class="list-group-item " data-toggle="collapse">Client  <span class="glyphicon glyphicon-chevron-right"></span></a>
                  <div class="collapse" id="demo3">
                    <a href="{{url('client/create')}}" class="list-group-item">Add Client</a>
                    <a href="{{url('client')}}" class="list-group-item">Show Clients</a>
                  </div>
                </li>
                <li>
                  <a href="#demo4" class="list-group-item " data-toggle="collapse">Services <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo4">
                      <a href="{{url('service/create')}}" class="list-group-item">Add Service</a>
                    <a href="{{url('service')}}" class="list-group-item">Show Services</a>
                    </li>
                </li>

              </ul>
          </div>