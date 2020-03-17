@include('partials.header')
    <header>
        <nav>
            <div class="wrap-menu">
                <img src="https://www.boolean.careers/images/common/logo.png" alt="">
                <ul>
                    <li>
                    <a href="{{route("home")}}">Home</a>
                    </li>
                    <li>
                        <a href="">Corso</a>
                    </li>
                    <li>
                        <a href=""> Dopo il corso</a>
                    </li>
                    <li>
                    <a href="{{route("students")}}">Students</a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('header')
    </header>
 
    <main>
        @yield("main")
    </main>
    
@include('partials.footer')

