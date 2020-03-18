{{-- @dd(Request::route()->getName()) --}}
@include('partials.header')
    <header>
        <nav>
            <div class="wrap-menu">
                <img src="https://www.boolean.careers/images/common/logo.png" alt="">
                <ul>
                    <li>
                    <a class="{{(Request::route()->getName() == "home") ? "active" : ""}}" href="{{route("home")}}">Home</a>
                    </li>
                    <li>
                        <a class="{{(Request::route()->getName() == "corso") ? "active" : ""}}" href="{{route("corso")}}">Corso</a>
                    </li>
                    <li>
                        <a class="{{(Request::route()->getName() == "postCorso") ? "active" : ""}}" href="{{route("postCorso")}}"> Dopo il corso</a>
                    </li>
                    <li>
                    <a class="{{(Request::route()->getName() == "students") ? "active" : ""}}" href="{{route("students")}}">Students</a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('header')
    </header>
 
    <main>
        @yield("main")
    </main>
       @yield("script")
@include('partials.footer')

