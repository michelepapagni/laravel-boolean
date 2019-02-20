<header>
    <div class="header-left">
        <img src="https://www.boolean.careers/images/common/logo.png" alt="Boolean Logo">
    </div>
    <div class="header-right">
        <ul>
            <li class="nav_item{{ (Request::route()->getName() == 'home') ? ' active' : null }}">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav_item{{ (Request::route()->getName() == 'students.index') ? ' active' : null }}">
                <a href="{{ route('students.index')}}">Studenti</a>
            </li>
            <li class="nav_item{{ (Request::route()->getName() == 'static.privacy') ? ' active' : null }}">
                <a href="{{ route('static.privacy') }}">Privacy Policy</a>
            </li>
            <li class="nav_item{{ (Request::route()->getName() == 'static.work') ? ' active' : null }}">
                <a href="{{ route('static.work')}}">Lavora con noi</a>
            </li>
        </ul>
    </div>
</header>
