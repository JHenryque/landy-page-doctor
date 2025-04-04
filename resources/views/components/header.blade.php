<header class="header" id="header">
    
        <a class="header__logo" href="{{ route('home') }}"><strong>Doctor.</strong>Online</a>
    
    <nav class="nav_bar">
        <ul class="nav_list">
            <li class="nav_link">
                <a href="{{ route('home') }}">Inicio</a>
            </li>
            <li class="nav_link">
                <a href="#sobre">Sobre</a>
            </li>
            <li class="nav_link">
                <a href="#servicos" >Serviços</a>
            </li>
            <li class="nav_link">
                <a href="#faq">Faqs</a>
            </li>
            <li class="nav_link">
                <a href="#contato" >Contatato</a>
            </li>
        </ul>
        <div class="nav_button">
            <a href="{{ route('agendar-contato') }}" >AGENDER CONSULTA</a>
        </div>
    </nav>

    <div class="mobile_button" id="btnmobile"><i class="fa-solid fa-bars"></i></div>
    <nav class="nav_mobile">
        <ul class="mobile_list">
            <li class="m_link">
                <a href="{{ route('home') }}">Inicio</a>
            </li>
            <li class="m_link">
                <a href="#sobre">Sobre</a>
            </li>
            <li class="m_link">
                <a href="#servicos" >Serviços</a>
            </li>
            <li class="m_link">
                <a href="#faq">Faqs</a>
            </li>
            <li class="m_link">
                <a href="#contato" >Contatato</a>
            </li>
            <a class="nav_button-mobile" href="{{ route('agendar-contato') }}" >AGENDER CONSULTA</a>
        </ul>
        
    </nav>
</header>