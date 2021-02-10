
<nav>
    <a href="/" class="contacts_top"> <span class="material-icons call">call</span>+7 (922) 698-40-41</a>
    <a href="/" class="contacts_top"><span class="material-icons mail">email</span>gidro_nex@mail.ru</a>
</nav>

<div class="navbar">
        <div class="logo"><a href="/"> <img src="https://i.ibb.co/6P6GsQZ/Component-1.png" alt="company_logo" class="icon_header"></a></div>
        <div class="header-wrapper">
            <ul class="nav_links">
                <li><a href="/" class="contact_menu">Главная</a></li>
                <li><a href="/categories" class="contact_menu">Ассортимент</a></li>
                <li><a href="{{route('contact')}}" class="contact_menu">Связаться с нами</a></li>
                <li><a href="{{route('basket')}}" class="contact_menu"><span class="material-icons search" style=" color: white; margin-bottom: 50px">search</span></a></li>
                <li><a href="{{route('basket')}}" class="contact_menu"><span class="material-icons search" style="color: white">shopping_basket</span><span>{{\Cart::session($_COOKIE['sessionIds'])->getTotalQuantity()}}</span></a></li>
            </ul>
        </div>

    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</div>
<div class="nav-active"></div>
<script src="//code-ya.jivosite.com/widget/z9Rog8jtXf" async></script>
<script>
    const navSlide = () => {
        const burger = document.querySelector('.burger');
        const nav = document.querySelector('.nav_links');
        const navLinks = document.querySelectorAll('.nav_links li a');

        burger.addEventListener('click',() => {
            nav.classList.toggle('nav-active');
        })

        navLinks.forEach((link , index)=>{
            if(link.style.animation){
                link.style.animation = '';
            }
            link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 2}s`;
        })
        burger.classList.toggle('toggle');
    }
    navSlide();

</script>


