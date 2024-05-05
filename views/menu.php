
<div class="flex-menu">
        <nav>
            <ul>
                <li><a href="/PCSFSD_final_project/">Domů</a></li>
                <li><a href="/PCSFSD_final_project/ovocne-stromy">Ovocné stromy</a></li>
                <li><a href="/PCSFSD_final_project/jedle-kere">Jedlé keře</a></li>
                <li><a href="/PCSFSD_final_project/filter">Filtrovat podle</a></li>
                <form action="/PCSFSD_final_project/findInDatabase">
                    <input type="text" name="search" class="findInDatabase" placeholder="Hledej v databázi">
                </form>
            </ul>
        </nav>
        
        <div class="buttons">
            <a href="admin">Admin</a>
            <a href="about-us">O databázi</a>   
            <!-- nahodit do routes tuhle cestu nahore about-us -->
        </div>
    </div>

    <div class="queries-menu">
        <img class="queries-menu__img" src="./resources/img/hamburgermenu.png" alt="hamburger menu">
    </div>

    <div class="container">
    <script src="./resources/switcherMenu.js"></script>