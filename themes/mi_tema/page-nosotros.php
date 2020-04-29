<?php get_header() ?>

<section class="section">
        <div class="section__container">
            <div class="row">
                <div class="row col-12  my-4 mb-4">

                    <div class="col-md-5  ">
                        <img src="assets/img/nosotros.jpeg" alt="nosotros" class="">
                    </div>
                    <div class=" col-md-7 mt-4">

                        <h4>hola!</h4>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi perferendis iste reprehenderit veniam porro? Quidem vero, officia corrupti magnam illum.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi perferendis iste reprehenderit veniam porro? Quidem vero, officia corrupti magnam illum.</p>
                    </div>


                </div>
                <div class="nosotros__form col-12 mb-4">
                    <h2>Contáctenos</h2>
                    <form action="enviar.php" method="post" name="contacto" id="contacto">
                        <fieldset class="fielset">


                            <p>
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" placeholder="Ingresar tu nombre" class="input">

                            </p>
                            <p>
                                <label for="mail">Mail:</label>
                                <input type="mail" name="mail" placeholder="Ingresar tu mail" class="input">

                            </p>

                            <p>
                                <label for=" asunto ">Asunto:</label>
                                <input type="text " name="asunto " placeholder="Asunto" class="input">

                            </p>

                            <label for=" mensaje ">Mensaje:</label><br />
                            <textarea name="mensaje " id="mensaje " cols="20 "></textarea><br />

                            <button class="btn-tercero mt-4" href="#">Enviar</button>

                    </form>
                    </fieldset>
                </div>

            </div>
    </section>

<?php get_footer() ?>