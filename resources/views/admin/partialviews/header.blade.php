<header class="header">
    <h2><i class="fa-solid fa-user-tie"></i> Easy Admin</h2>
    <div class="user-dropdown">
        <button class="dropbtn">Hoş geldin, <b>{{Auth::user()->name}} ▼</b></button>
        <div class="dropdown-content">
            <a href="#">Profilim</a>
            <a href="#">Ayarlar</a>
            <hr>
            <a href="#" onclick="document.getElementById('adminLogoutForm').submit()" class="logout">Çıkış Yap</a>
            <form id="adminLogoutForm" action="{{route('admin.logout')}}" method="POST">
                @csrf
            </form>
        </div>
    </div>
</header>