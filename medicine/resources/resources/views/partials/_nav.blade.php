<div class="container">
        <div class="row">
            <header>
                <nav class="navbar navbar-default " id="navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                        </div>
                   <div class="navbar-collapse collapse">
                    <ul class="nav nav-justified" id="nav">
                        <li class="{{ Request::is('/medicine/public') ? "active" : "" }}" ><a data-scroll href="/medicine/public">HOME</a></li>
                        @if (Auth::check())
                        <li class="{{ Request::is('medicine') ? "active" : "" }}" ><a data-scroll href="medicine">Medicine</a></li>
                        <ul class="nav navbar-nav navbar-right">
                        </ul>  
                        @endif
                    </ul>
                 </div>
                </div>
                </nav>
            </header>
