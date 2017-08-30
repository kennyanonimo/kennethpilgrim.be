<nav id="homeBar" class="navbar navbar-default">
    <div class="container-fullwidth">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
            </button>
            <a id="kpImg" href="./" class="logo pull-left navbar-brand">
                <img alt="Kenneth Pilgrim" title="Kenneth Pilgrim" src="img/kenneth-pilgrim.jpg" />
            </a>
            <a class="navbar-brand" href="./">Kenneth Pilgrim</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <!-- <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li> -->
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            <li id="dashboard"><a href="./dashboard">Dashboard</a></li>
                            <li id="comments"><a href="./comments">Comments</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li id="home"><a href="./">Home</a></li>
                <li id="skills"><a href="./skills">Skills</a></li>
                <li id="contact"><a href="./contact">Contact</a></li>
                <li id="portfolio"><a href="./portfolio">Portfolio</a></li>
            </ul>
        </div>
    </div>
</nav>

<script type="text/javascript">
    var el = document.getElementById('{{ $page }}');
    if(el) { el.className += el.className ? ' active' : 'active'; }
</script>


