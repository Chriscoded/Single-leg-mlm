<div class="sidebar" data-background-color="white" data-active-color="danger">
  
  <div class="sidebar-wrapper">
        <div class="logo">
            <a href="" class="simple-text">
                Admin Panel
            </a>
        </div>

        <ul class="nav">
        
            <li class="{{ Request::is('index') ? 'active' : '' }}">
                <a href="../{{ 'index' }}">
                    <i class="fa fa-tachometer"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::is('users') ? 'active' : '' }}">
                <a href="../{{ 'users' }}">
                    <i class="fa fa-share-alt"></i>
                    <p>My Downline</p>
                </a>
            </li>
            <li class="{{ Request::is('alluserslist') ? 'active' : '' }}">
                {{-- <li class="{{ Request::is('alluserslist') ? 'active' : '' }} or {{ Request::is('alluserslist/$refkey') ? 'active' : '' }}"> --}}
                <a href="../{{ 'alluserslist' }}">
                    <i class="fa fa-users"></i>
                    <p>All Users List</p>
                </a>
            </li>
            {{--  <li>
                <a href="../{{ 'users' }}">
                    <i class="fa fa-user"></i>
                    <p>Commision Setting</p>
                </a>
            </li>  --}}
            <li  class="{{ Request::is('levelSetting') ? 'active' : '' }}">
                <a href="../{{ 'levelSetting' }}">
                    <i class="fa fa-link "></i>
                    <p>Level Setting</p>
                </a>
            </li>
            
            <li class="{{ Request::is('epinRequested') ? 'active' : '' }}">
                <a href="../{{ 'epinRequested' }}">
                    <i class="fa fa-credit-card"></i>
                    <p>Requested E-pin</p>
                </a>
            </li>
            <li class="{{ Request::is('epinOrder') ? 'active' : '' }}">
                <a href="../{{ 'epinOrder' }}">
                    <i class="fa fa-shopping-cart"></i>
                    <p>Buy E-pin</p>
                </a>
            </li>
            <li class="{{ Request::is('myepin') ? 'active' : '' }}">
                <a href="../{{ 'myepin' }}">
                    <i class="fa fa-credit-card"></i>
                    <p>My E-pin</p>
                </a>
            </li>
            <li class="{{ Request::is('income') ? 'active' : '' }}">
                <a href="../{{ 'income' }}">
                    <span style="display: inline-block;
                    font: normal normal normal 14px/1 FontAwesome; text-rendering: auto;
                    -webkit-font-smoothing: antialiased;font-size: 24px; transform: translate(0, 0); float:left; padding-right:25px; padding-left:5px">₦</span>
                    <p>My Level Income</p>
                </a>
            </li>
            <li class="{{ Request::is('directincome') ? 'active' : '' }}">
                <a href="../{{ 'directincome' }}">
                    <span style="display: inline-block;
                    font: normal normal normal 14px/1 FontAwesome; text-rendering: auto;
                    -webkit-font-smoothing: antialiased;font-size: 24px; transform: translate(0, 0); float:left; padding-right:25px; padding-left:5px">₦</span>
                    <p>My Direct Income</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-caret-down"></i>
                    <p>Report Section </p>
                </a>
            </li>
            <li class="{{ Request::is('reports') ? 'active' : '' }}">
                <a href="../{{'reports'}}">
                    <span style="display: inline-block;
                    font: normal normal normal 14px/1 FontAwesome; text-rendering: auto;
                    -webkit-font-smoothing: antialiased;font-size: 24px; transform: translate(0, 0); float:left; padding-right:25px; padding-left:5px">₦</span>
                    <p>Level Outcome </p>
                </a>
            </li>
            <li class="{{ Request::is('directoutcome') ? 'active' : '' }}">
                <a href="../{{'directoutcome'}}">
                    <span style="display: inline-block;
                    font: normal normal normal 14px/1 FontAwesome; text-rendering: auto;
                    -webkit-font-smoothing: antialiased;font-size: 24px; transform: translate(0, 0); float:left; padding-right:25px; padding-left:5px">₦</span>
                    <p> Direct Outcome </p>
                </a>
            </li>
            <li class="{{ Request::is('comincome') ? 'active' : '' }}">
                <a href="../{{'comincome'}}">
                    <span style="display: inline-block;
                    font: normal normal normal 14px/1 FontAwesome; text-rendering: auto;
                    -webkit-font-smoothing: antialiased;font-size: 24px; transform: translate(0, 0); float:left; padding-right:25px; padding-left:5px">₦</span>
                    <p>Total Company Income </p>
                </a>
            </li>
            {{--  <li>
                <a href="../#reports.html">
                    <i class="fa fa-file"></i>
                    <p>Profile Reports</p>
                </a>
            </li>
            <li>
                <a href="../#reports.html">
                    <i class="fa fa-file"></i>
                    <p>Joining Reports</p>
                </a>
            </li>
            <li>
                <a href="../#reports.html">
                    <i class="fa fa-file"></i>
                    <p>Bonus Reports</p>
                </a>
            </li>  --}}
            {{--  <li class="{{ Request::is('recursion') ? 'active' : '' }}">
                <a href="../recursion">
                    <i class="fa fa-cog"></i>
                    <p>Recursive</p>
                </a>
            </li>  --}}
            
        </ul>
  </div>
</div>