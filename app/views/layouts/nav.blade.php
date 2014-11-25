
      <!-- Static navbar -->
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Issue Tracker</a>
          </div><!-- nav-header -->
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <!-- <li><a href="/">Home</a></li> -->
              <!-- <li><a href="/about">About</a></li> -->
              @if(!Auth::user())
                <li>{{ HTML::link('about', 'About') }}
                <li>{{ HTML::link('who', 'Who') }}  
              @endif
              <!-- <li><a href="/gallery">Gallery</a></li> -->
              <!-- <li><a href="/dashboard">Dashboard</a></li> -->
              @if(Auth::user())
                <li>{{ HTML::link('dashboard', 'Dashboard') }}
              @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <!-- <li><a href="/registe">Registe</a></li> -->
              <!-- <li><a href="/login">Login</a></li> -->
              @if(Auth::user())
                <li>{{ HTML::link('logout', Auth::user()->username . ', Logout') }}</li>
              @else
                <li>{{ HTML::link('login', 'Login') }}</li>
              @endif
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div><!-- nav bar -->