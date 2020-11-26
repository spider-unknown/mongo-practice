<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
    <div class="main-navbar">
        <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                    <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;"
                         src="{{asset('images/mongodb-1.png')}}" alt="">
                    <span class="d-none d-md-inline ml-1">MongoPractice</span>
                </div>
            </a>
            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
            </a>
        </nav>
    </div>
    <div class="nav-wrapper">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{\App\Helpers\Helper::urlActiveHelperStartsWith('welcome')}}"
                   href="{{route('welcome')}}">
                    <i class="material-icons">dashboard</i>
                    <span>Главное</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{\App\Helpers\Helper::urlActiveHelperStartsWith('medical_equipment')}}"
                   href="{{route('medical_equipment.index')}}">
                    <i class="material-icons">dashboard</i>
                    <span>Медицинская техника</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{\App\Helpers\Helper::urlActiveHelperStartsWith('sanatory.arman')}}"
                   href="{{route('sanatory.arman.index')}}">
                    <i class="material-icons">dashboard</i>
                    <span>Санатория Арман</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{\App\Helpers\Helper::urlActiveHelperStartsWith('sanatory.kazakhstan')}}"
                   href="{{route('sanatory.kazakhstan.index')}}">
                    <i class="material-icons">dashboard</i>
                    <span>Санатория Казахстан</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
