
<nav>
    <a href="/" class="contacts_top"> <span class="material-icons call">call</span>+7 (922) 698-40-41</a>
    <a href="/" class="contacts_top"><span class="material-icons mail">email</span>gidro_nex@mail.ru</a>
</nav>

<div class="navbar">
    <div class="navbar_wrapper">
        <div class="logo"><a href="/"> <img src="https://i.ibb.co/6P6GsQZ/Component-1.png" alt="company_logo" class="icon_header"></a></div>
        <div class="contacts">
            <span class="material-icons" style="font-size: 50px; margin: auto auto; color: white">
                location_off
                </span>
            <p>
                Челябинск, ул. Павелецкая 2-я, 36, нежилое помещение 8, оф. 1
            </p>
        </div>
        <div class="header-wrapper">
            <ul>
                <li><a href="/" class="contact_menu">Главная</a></li>
                <li><a href="/categories" class="contact_menu">Ассортимент</a></li>
                <li><a href="{{route('contact')}}" class="contact_menu">Связаться с нами</a></li>
                <li><a href="{{route('basket')}}" class="contact_menu"><span class="material-icons search" style=" color: white; margin-bottom: 50px">search</span></a></li>
                <li><a href="{{route('basket')}}" class="contact_menu"><span class="material-icons search" style="color: white">shopping_basket</span><span>{{\Cart::session($_COOKIE['sessionIds'])->getTotalQuantity()}}</span></a></li>
            </ul>
        </div>
    </div>
</div>

