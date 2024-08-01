<header>
    <a href="{{url('/home')}}"><span class="des">Dashboard</span></a>
    <div class="type">
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><span>Amdin</span></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</header>
