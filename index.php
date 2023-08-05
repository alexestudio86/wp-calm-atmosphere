<!DOCTYPE html>
<html lang="es">

<!-- Header -->
<?php get_header(); ?>

<body>

    <!-- Navbar -->
    <nav class="w3-top" id="home">
        <div class="container w3-bar w3-blue-gray rounded-bottom">
            <div class="w3-bar-item">
                <span class="w3-button w3-wide uppercase">Home</span>
            </div>
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'nav-menu',
                    'container_class' => 'w3-right p-2',
                    'add_li_class'  => 'xyz'
                )
            ); ?>
        </div>
    </nav>


    <!-- Head -->


    <!-- Promotions -->
    <div class="w3-row container" id="promotions">
        <h1 class="w3-center w3-xxlarge w3-padding-64">Promociones</h1>
        <div class="w3-third">
            <div class="w3-container">
                <figure class="w3-card">
                    <img src="/src/assets/promotions/item-3Quesos.jpg" alt="Hamburguesa de res triple, 3 quesos" class="w3-image" />
                    <div class="w3-container">
                        <figcaption class="w3-xlarge">Hamburguesa de res triple, 3 quesos</figcaption>
                        <p class="w3-medium">Mezcla de queso gouda, mozarella, chihuahua y tocin</p>
                    </div>
                </figure>
            </div>
        </div>
        <div class="w3-third">
            <div class="w3-container">
                <figure class="w3-card">
                    <img src="/src/assets/promotions/item-arracheraasada.jpg" alt="Hamburguesa de res triple, 3 quesos" class="w3-image" />
                    <div class="w3-container">
                        <figcaption class="w3-xlarge">Hamburguesa de res triple, 3 quesos</figcaption>
                        <p class="w3-medium">Mezcla de queso gouda, mozarella, chihuahua y tocin</p>
                    </div>
                </figure>
            </div>
        </div>
        <div class="w3-third">
            <div class="w3-container">
                <figure class="w3-card">
                    <img src="/src/assets/promotions/item-pechugapoblana.jpg" alt="Hamburguesa de res triple, 3 quesos" class="w3-image" />
                    <div class="w3-container">
                        <figcaption class="w3-xlarge">Hamburguesa de res triple, 3 quesos</figcaption>
                        <p class="w3-medium">Mezcla de queso gouda, mozarella, chihuahua y tocin</p>
                    </div>
                </figure>
            </div>
        </div>
    </div>

    <!-- Products -->
    <main class="w3-row w3-light-gray" id="menu">
        <div class="container">
            <h1 class="w3-padding-64 w3-center w3-xxlarge">Nuestros Productos</h1>
            <div class="w3-row">
                <article class="w3-half">
                    <a href="#">
                        <div class="w3-row w3-white w3-border-bottom w3-hover-opacity">
                            <div class="w3-col s5">
                                <img src="/src/assets/products/dummy-image.jpg" alt="Producto #1" class="w3-image" />
                            </div>
                            <div class="w3-rest">
                                <div class="w3-row">
                                    <div class="w3-col s12">
                                        <h1 class="w3-large text-uppercase font-weight-bold">Desayuno #1</h1>
                                        <span class="Desayunos">Desayunos</span>
                                        <p class="w3-medium w3-justify"> Arrachera asada (150g) acompañada de una enchilada o chilaquiles y frijoles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </article>
                <article class="w3-half">
                    <a href="#">
                        <div class="w3-row w3-white w3-border-bottom w3-hover-opacity">
                            <div class="w3-col s5">
                                <img src="/src/assets/products/dummy-image.jpg" alt="Producto #1" class="w3-image" />
                            </div>
                            <div class="w3-rest">
                                <div class="w3-row">
                                    <div class="w3-col s12">
                                        <h1 class="w3-large text-uppercase font-weight-bold">Desayuno #1</h1>
                                        <span class="Desayunos">Desayunos</span>
                                        <p class="w3-medium w3-justify"> Arrachera asada (150g) acompañada de una enchilada o chilaquiles y frijoles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </article>
            </div>
        </div>
    </main>

    <!-- Products -->
    <div class="w3-row" id="contact">
        <div class="container">
            <div class="w3-padding-64">
                <h1 class="w3-center w3-xxlarge">Contacto</h1>
            </div>
            <div class="w3-row">
                <div class="w3-half">
                    <div class="w3-container">
                        <h2 class="w3-large">Dirección</h2>
                        <p>Calle Av. Independencia 35-99, San Nicolas Tolentino Otzacatipan, 50200 San Nicolás Tolentino, Méx.</p>
                        <h2 class="w3-large">Teléfono</h2>
                        <p>722 247 8451</p>
                        <h2 class="w3-center w3-xlarge">Horarios</h2>
                        <div class="w3-col s6 w3-container w3-right-align">
                            <p>
                                <span>Lunes</span>
                                <span>Cerrado</span>
                            </p>
                            <p>
                                <span>Martes</span>
                                <span>09h - 18h</span>
                            </p>
                            <p>
                                <span>Miércoles</span>
                                <span>09h - 18h</span>
                            </p>
                            <p>
                                <span>Jueves</span>
                                <span>09h - 18h</span>
                            </p>
                            <p>
                                <span>Viernes</span>
                                <span>09h - 18h</span>
                            </p>
                            <p>
                                <span>Sábado</span>
                                <span>09h - 18h</span>
                            </p>
                            <p>
                                <span>Domingo</span>
                                <span>09h - 18h</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w3-half">
                    <div class="w3-container">
                        <h2 class="w3-center w3-xlarge">Mapa</h2>
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.4064250158417!2d-99.5793105857096!3d19.351546886930464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d275100ac99801%3A0x650fb852d249eeb1!2sHamburguesas%20%7C%20Carnes%20%7C%20Ensaladas!5e0!3m2!1sen!2smx!4v1595902976350!5m2!1sen!2smx" style="border: 0;" tabindex="0" allowfullscreen="yes" aria-hidden="false" frameborder="0" height="400px" width="100%" ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php get_footer(); ?>

</body>
</html>