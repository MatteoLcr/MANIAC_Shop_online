<div class="container-fluid  nabaaaar">
    <div class="row navContainer flex-row">
        <div class="col-4 navTitle d-flex justify-content-center align-items-end">
            <a href="{{route('welcome')}}" class="ancor">
                <h1 class="title">MANIAC</h1>
            </a>
        </div>
        <div class="col-8">
            <ul class="d-flex flex-row justify-content-end mt-3 ul">

                @guest
                <li class="me-4"> <a href="{{route('login')}}" class="ancor">LOGIN</a></li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle me-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Benvenuto, {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Il mio profilo</a></li>
                        <li><a class="dropdown-item" href="{{route('cloths.create')}}">Cloth Create</a></li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit">logout</button>
                        </form>
                    </ul>
                </li>
                @endguest
                <li class="me-4"> <a href="" class="ancor">CONTATTACI</a></li>
                <li class="me-4"> <a href="" class="ancor">CARRELLO</a></li>
            </ul>
        </div>
        <div class="col-12 ">
            <ul class="categoryContainer d-flex flex-row justify-content-start">
                @foreach($categories as $category)
                <li class="me-3"><a href="{{route('categoryIndex', compact('category'))}}" class="ancor">{{$category->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>