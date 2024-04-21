<?php
Core\View::render("header", ["title" => "Databáze ovocných dřevin"]);
Core\View::render("menu");
?>

    <section class="one-section">
        <p class="one-section__p">Pěstování ovocných stromů není pouze zahradnickou činností; je to investice do zdraví, přírody a společnosti. Ovocné stromy nejenže poskytují lahodné plody, ale mají také hlubší význam pro naše životy a planetu jako celek. Čerstvé ovoce, které z ovocných stromů získáme, je bohaté na esenciální vitamíny, minerály a antioxidanty, které jsou nezbytné pro optimální fungování našeho těla. Obsahuje vlákninu, která podporuje zdravé trávení a udržuje hladinu cholesterolu v normálním rozmezí. Díky svému vysokému obsahu vitamínu C, ovoce z ovocných stromů posiluje imunitní systém, čímž nás chrání před nachlazením a jinými infekčními chorobami.</p>
        <img class="one-section__img" src="resources/img/raspberry.jpg" alt="raspberry">
    </section>

    <section class="one-section">
        <img class="one-section__img" src="resources/img/berries.jpg" alt="berries">
        <p class="one-section__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem corporis dolorem omnis. Omnis perspiciatis possimus adipisci sapiente sed recusandae a, dolore doloribus atque iusto temporibus nihil veritatis repudiandae dignissimos? Est vero assumenda ex iure deleniti suscipit officia sit cum nam placeat eum fuga deserunt natus qui dolor nulla officiis vitae accusamus et ut, asperiores in aliquid. Dolorem, qui labore eligendi totam iste minima cumque perspiciatis impedit architecto molestiae. Minus reiciendis explicabo corrupti, repudiandae, rem aperiam eos asperiores quaerat iure exercitationem possimus harum autem distinctio officiis cum expedita veritatis? Tenetur quasi suscipit provident vero reiciendis mollitia, velit voluptatem repellat hic eveniet molestias minus explicabo praesentium delectus impedit ratione quia officiis magnam qui cumque eos! A perspiciatis laborum animi eveniet necessitatibus dolorum?</p>
    </section>

<?php 
Core\View::render("footer"); 
?>