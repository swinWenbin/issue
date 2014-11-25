
          <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
              <li><a href="/dashboard">Overview</a></li>
              <li><a href="/projects">Projects</a></li>
              <li><a href="/issues">Issues</a></li>
              @if(Auth::user()->role_id==1)
			  <li><a href="/assign">AssignUsers</a></li>
              <li><a href="/users">Users</a></li>
              <li><a href="/roles">Roles</a></li>
			  <li><a href="/status">Status</a></li>
              @endif
            </ul>
            <ul class="nav nav-sidebar">
              @if(Auth::user()->role_id!=3)
              <li><a href="/myIssues">My Issues</a></li>
              @endif
            </ul>
          </div>