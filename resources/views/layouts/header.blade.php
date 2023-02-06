@section('header')
<link rel="stylesheet" href="{{asset("/css/nav/header.css")}}">
<header id="header" class="site-header">
  <div class="wrapper site-header__wrapper">
    <a href="/prefectures" class="brand">
        <div class="title_logo">
            <img src="{{ asset('image/tabetabi.png') }}" alt="logo">
        </div>
    </a>
    <nav class="nav">
      <ul class="nav__wrapper">
        <li class="nav__item"><a href='/store/prefecture'>Create</a></li>
        <li class="nav__item"><a href='/profile'>Mypage</a></li>
        @auth
        <li class="nav__item">
            <form action="{{ route('logout') }}" method="POST" name="hogeForm">
            @csrf
                <a href="javascript:document.hogeForm.submit()">Logout</a>
            </form>
        </li>
        @endauth
      </ul>
    </nav>
  </div>
</header>
<div class="blank">
</div>
@endsection