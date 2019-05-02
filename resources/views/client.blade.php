@extends('layouts.app')

@section('content')


    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a href="/home" class="navbar-brand">
                    Awesome Blog App
                </a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <ul class="navbar-nav ml-auto">
                       <li class="nav-item">
                        <a href="/user" class="nav-link">Users</a>
                       </li>
                       <li class="nav-item dropdown">
                       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {$firstname $lastname} <span class="caret"></span>
                        </a>
                           <div aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-right">
                               <a href="/home" class="dropdown-item">Profile</a>
                               <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">
                                        Logout
                                </a>
                                    <form id="logout-form" action="http://awesome-blog-app.herokuapp.com/logout" method="POST" style="display: none;">
                                    <input type="hidden" name="_token" value="9U7FRHxVnym5jkPY6HHwY2EZgR8hFcgIKlwkWIPt">
                                    </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main>

        </main>
    </div>
    <div id="UMS_TOOLTIP" style="position: absolute; cursor: pointer; z-index: 2147483647; background: transparent; top: -100000px; left: -100000px;">
    </div>

@endsection