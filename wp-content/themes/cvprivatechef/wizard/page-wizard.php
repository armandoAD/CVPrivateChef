<?php
/*

Template Name: Wizard

*/
get_header();
?>
    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>"  method="POST" id="frontend_userrequests_type">
<div id="cards" class="cards-flex-wrapper">
    <header>
       <div class="container-fluid">
          <!--  <div class="progress">
                <div class="progress-bar">
                    <div class="progress-complete"></div>
                </div>
                <div class="row">
                    <div class="col-xs-2">
                        <div class="step">
                            <span></span>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="step complete">
                            <i class="step-dot"></i>
                            <div class="step-icon">
                                <i class="icon-people-xs"></i>
                                <span>El Evento</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="step">
                            <i class="step-dot"></i>
                            <div class="step-icon">
                                <i class="icon-progress-cutlery"></i>
                                <span>La Experiencia</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="step">
                            <i class="step-dot"></i>
                            <div class="step-icon">
                                <i class="icon-progress-home"></i>
                                <span>El Espacio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="step">
                            <i class="step-dot"></i>
                            <div class="step-icon">
                                <i class="icon-progress-info"></i>
                                <span>Los Detalles</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="step">
                            <i class="step-dot"></i>
                            <div class="step-icon">
                                <i class="icon-progress-flag"></i>
                                <span>La Meta</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </header>

        <input type="hidden" name="action" value="wizard_action">

        <section id="card_address">
            <div class="card-content">
                <div class="card-title">
                    <h1>Nuestra dirección es</h1>
                </div>
                <div class="form-item">
                    <div class="left-address">
                        <label for="frontend_userrequests_type_usereqAddress">
                            <span class="icon-map-marker"></span>
                            <span>Dirección:</span>
                        </label>
                    </div>
                    <div class="right-address">
                        <input type="text" id="frontend_userrequests_type_usereqAddress" name="address" />
                    </div>


                    <div style="display: none; visibility: hidden">
                        <input type="text" id="frontend_userrequests_type_usereqLongitude" name="frontend_userrequests_type[usereqLongitude]" />
                        <input type="text" id="frontend_userrequests_type_usereqLatitude" name="frontend_userrequests_type[usereqLatitude]" />
                    </div>
                </div>
                <div class="card-footer">
                    <a class="tac-button tac-medium" id="card_address_next">Continuar</a>
                </div>
            </div>
        </section>

        <section id="card_outreach">
            <div class="card-content">
                <div class="card-title">
                    <h1>Selecciona el servicio...</h1>
                </div>
                <div class="section-item">
                    <input name="service" type="radio" id="servicio1" value="Servicio Unico"  />
                    <label for=servicio1 >
                        <span class="card-icon icon-service1"></span>
                        <span class="card-label-1">Servicio único</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="service" type="radio" id="servicio2" value="Clases Privadas"  />
                    <label for=servicio2 >
                        <span class="card-icon icon-service3"></span>
                        <span class="card-label-1">Clases Privadas</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="service" type="radio" id="servicio3" value="Dietas"  />
                    <label for=servicio3 >
                        <span class="card-icon icon-service2"></span>
                        <span class="card-label-1">Dietas</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="card-footer">
                    <a href="#next" class="tac-button tac-medium" id="card_address_prev">Anterior</a>
                </div>
            </div>
        </section>


        <section id="card_people">
            <div class="card-content">
                <div class="card-title">
                    <h1>Somos...</h1>
                </div>
                <div class="section-item">
                    <input name="way1[peopleno]" type="radio" id="people_option" class="people_option" value="2 Personas"  data-value="0" />
                    <label for="people_option">
                        <span class="card-icon icon-2-ppl"></span>
                        <span class="card-label-1">2 personas</span>
                        <span class="card-label-2"></span>
                        <div class="person-card-price">
                            <span class="from-price">desde</span>
                            <span id="range_of_prices_info_from0" class="people-price-from">$1000</span>
                        </div>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way1[peopleno]" type="radio" id="people_option2" class="people_option" value="3 a 6 personas"  data-value="1" />
                    <label for="people_option2">
                        <span class="card-icon icon-3-ppl"></span>
                        <span class="card-label-1">3 a 6 personas</span>
                        <span class="card-label-2"></span>
                        <div class="person-card-price">
                            <span class="from-price">desde</span>
                            <span id="range_of_prices_info_from1" class="people-price-from">$800</span>
                        </div>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way1[peopleno]" type="radio" id="people_option3" class="people_option" value="7 a 12 Personas"  data-value="2" />
                    <label for="people_option3">
                        <span class="card-icon icon-7-ppl"></span>
                        <span class="card-label-1">7 a 12 personas</span>
                        <span class="card-label-2"></span>
                        <div class="person-card-price">
                            <span class="from-price">desde</span>
                            <span id="range_of_prices_info_from2" class="people-price-from">$700</span>
                        </div>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way1[peopleno]" type="radio" id="people_option4" class="people_option" value="13+ Personas"  data-value="3" />
                    <label for="people_option4">
                        <span class="card-icon icon-13-ppl"></span>
                        <span class="card-label-1">13+ personas</span>
                        <span class="card-label-2"></span>
                        <div class="person-card-price">
                            <span class="from-price">desde</span>
                            <span id="range_of_prices_info_from3" class="people-price-from">$600</span>
                        </div>
                    </label>
                </div>
                <div class="card-footer">
                    <a href="#" class="tac-button tac-medium" id="card_people_prev">Anterior</a>
                </div>
            </div>
        </section>



        <section id="card_people_way2">
            <div class="card-content">
                <div class="card-title">
                    <h1>Somos...</h1>
                </div>
                <div class="section-item">
                    <input name="way2[peopleno_way2]" type="radio" id="people_option_way2" class="people_option_way2" value="2 Personas"  data-value="0" />
                    <label for="people_option_way2">
                        <span class="card-icon icon-2-ppl"></span>
                        <span class="card-label-1">2 personas</span>
                        <span class="card-label-2"></span>
                        <div class="person-card-price">
                            <span class="from-price">desde</span>
                            <span id="range_of_prices_info_from0" class="people-price-from">$1500</span>
                        </div>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way2[peopleno_way2]" type="radio" id="people_option2_way2" class="people_option_way2" value="3 a 6 personas"  data-value="1" />
                    <label for="people_option2_way2">
                        <span class="card-icon icon-3-ppl"></span>
                        <span class="card-label-1">3 a 6 personas</span>
                        <span class="card-label-2"></span>
                        <div class="person-card-price">
                            <span class="from-price">desde</span>
                            <span id="range_of_prices_info_from1" class="people-price-from">$1500</span>
                        </div>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way2[peopleno_way2]" type="radio" id="people_option3_way2" class="people_option_way2" value="7 a 12 Personas"  data-value="2" />
                    <label for="people_option3_way2">
                        <span class="card-icon icon-7-ppl"></span>
                        <span class="card-label-1">7 a 12 personas</span>
                        <span class="card-label-2"></span>
                        <div class="person-card-price">
                            <span class="from-price">desde</span>
                            <span id="range_of_prices_info_from2" class="people-price-from">$1500</span>
                        </div>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way2[peopleno_way2]" type="radio" id="people_option4_way2" class="people_option_way2" value="13+ Personas"  data-value="3" />
                    <label for="people_option4_way2">
                        <span class="card-icon icon-13-ppl"></span>
                        <span class="card-label-1">13+ personas</span>
                        <span class="card-label-2"></span>
                        <div class="person-card-price">
                            <span class="from-price">desde</span>
                            <span id="range_of_prices_info_from3" class="people-price-from">$1500</span>
                        </div>
                    </label>
                </div>
                <div class="card-footer">
                    <a href="#" class="tac-button tac-medium" id="card_people_prev_way2">Anterior</a>
                </div>
            </div>
        </section>



        <section id="card_people_way3">
            <div class="card-content">
                <div class="card-title">
                    <h1>Somos...</h1>
                </div>
                <div class="section-item">
                    <input name="way3[peopleno_way3]" type="radio" id="people_option_way3" class="people_option_way3" value="2 Personas"  data-value="0" />
                    <label for="people_option_way3">
                        <span class="card-icon icon-2-ppl"></span>
                        <span class="card-label-1">2 personas</span>
                        <span class="card-label-2"></span>
                        <div class="person-card-price">
                            <span class="from-price">desde</span>
                            <span id="range_of_prices_info_from0" class="people-price-from">$1500</span>
                        </div>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way3[peopleno_way3]" type="radio" id="people_option2_way3" class="people_option_way3" value="3 a 6 personas"  data-value="1" />
                    <label for="people_option2_way3">
                        <span class="card-icon icon-3-ppl"></span>
                        <span class="card-label-1">3 a 6 personas</span>
                        <span class="card-label-2"></span>
                        <div class="person-card-price">
                            <span class="from-price">desde</span>
                            <span id="range_of_prices_info_from1" class="people-price-from">$1500</span>
                        </div>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way3[peopleno_way3]" type="radio" id="people_option3_way3" class="people_option_way3" value="7 a 12 Personas"  data-value="2" />
                    <label for="people_option3_way3">
                        <span class="card-icon icon-7-ppl"></span>
                        <span class="card-label-1">7 a 12 personas</span>
                        <span class="card-label-2"></span>
                        <div class="person-card-price">
                            <span class="from-price">desde</span>
                            <span id="range_of_prices_info_from2" class="people-price-from">$1500</span>
                        </div>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way3[peopleno_way3]" type="radio" id="people_option4_way3" class="people_option_way3" value="13+ Personas"  data-value="3" />
                    <label for="people_option4_way3">
                        <span class="card-icon icon-13-ppl"></span>
                        <span class="card-label-1">13+ personas</span>
                        <span class="card-label-2"></span>
                        <div class="person-card-price">
                            <span class="from-price">desde</span>
                            <span id="range_of_prices_info_from3" class="people-price-from">$1500</span>
                        </div>
                    </label>
                </div>
                <div class="card-footer">
                    <a href="#" class="tac-button tac-medium" id="card_people_prev_way3">Anterior</a>
                </div>
            </div>
        </section>


        <section id="card_number_of_diners">
            <div class="card-content">
                <div class="card-title">
                    <h1>Somos</h1>
                </div>
                <div class="custom-row">
                    <div class="count">
                        <input type="text" id="frontend_userrequests_type_usereqNumberofadults" name="frontend_userrequests_type[usereqNumberofadults]" value="0" />
                    </div>
                    <div class="description">
                        <h4>Adultos</h4>
                        <p>Mayores de 16 años</p>
                    </div>
                    <div class="controls" id="diners_adults">
                        <span class="decrease">
                        <span>-</span>
                        </span>
                        <span class="increase">
                        <span>+</span>
                        </span>
                    </div>
                </div>
                <div class="custom-row">
                    <div class="count">
                        <input type="text" id="frontend_userrequests_type_usereqNumberofadolescents" name="frontend_userrequests_type[usereqNumberofadolescents]" value="0" />
                    </div>
                    <div class="description">
                        <h4>Adolescentes</h4>
                        <p>12 - 15 años</p>
                    </div>
                    <div class="controls" id="diners_adolescents">
                        <span class="decrease">
                        <span>-</span>
                        </span>
                        <span class="increase">
                        <span>+</span>
                        </span>
                    </div>
                </div>
                <div class="custom-row">
                    <div class="count">
                        <input type="text" id="frontend_userrequests_type_usereqNumberofchildren" name="frontend_userrequests_type[usereqNumberofchildren]" value="0" />
                    </div>
                    <div class="description">
                        <h4>Niños</h4>
                        <p>2 - 11 años</p>
                    </div>
                    <div class="controls" id="diners_children">
                        <span class="decrease">
                        <span>-</span>
                        </span>
                        <span class="increase">
                        <span>+</span>
                        </span>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="tac-button tac-medium">Continuar</button>
                </div>
            </div>
        </section>


        <section id="card_mealtypes">
            <div class="card-content">
                <div class="card-title">
                    <h1>Se trata de una</h1>
                </div>
                <div class="section-item">
                    <input name="way1[setrata]" type="radio" id="setrata" class="setrata" value="Comida"  data-value="2" />
                    <label for="setrata">
                        <span class="card-icon icon-day"></span>
                        <span class="card-label-1">Comida</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way1[setrata]" type="radio" id="setrata2" class="setrata" value="Cena"  data-value="4" />
                    <label for="setrata2">
                        <span class="card-icon icon-night"></span>
                        <span class="card-label-1">Cena</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way1[setrata]" type="radio" id="setrata3" class="setrata" value="Coffe Break"  data-value="6" />
                    <label for="setrata3">
                        <span class="card-icon icon-coffee"></span>
                        <span class="card-label-1">Coffe Break</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
            </div>
            <div class="card-footer" style="text-align:center;">
                <a href="#" class="tac-button tac-medium" id="card_mealtypes_prev">Anterior</a>
            </div>
        </section>



        <section id="card_foodtypes">
            <div class="card-content">
                <div class="card-title">
                    <h1>Preferencias gastronómicas</h1>
                </div>
                <div class="section-item">
                    <input name="way1[foodtypes]" type="radio" id="foodtype1" class="foodtype" value="Vegana"  />
                    <label  for=foodtype1
                            class="wizard-selector">
                        <span class="card-icon icon-vegan"></span>
                        <span class="card-label-1">Vegana</span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way1[foodtypes]" type="radio" id="foodtype2" class="foodtype" value="Italiana"  />
                    <label
                            for=foodtype2
                            class="wizard-selector">
                        <span class="card-icon icon-italian"></span>
                        <span class="card-label-1">Italiana</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way1[foodtypes]" type="radio" id="foodtype3" class="foodtype" value="Francesa"  />
                    <label
                            for=foodtype3
                            class="wizard-selector">
                        <span class="card-icon icon-french"></span>
                        <span class="card-label-1">Francesa</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way1[foodtypes]" type="radio" id="foodtype4" class="foodtype" value="Japonesa"  />
                    <label
                            for=foodtype4
                            class="wizard-selector">
                        <span class="card-icon icon-japanese"></span>
                        <span class="card-label-1">Japonesa</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way1[foodtypes]" type="radio" id="foodtype5" class="foodtype" value="Baja - Med"  />
                    <label
                            for=foodtype5
                            class="wizard-selector">
                        <span class="card-icon icon-bajamed"></span>
                        <span class="card-label-1">Baja - Med</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way1[foodtypes]" type="radio" id="foodtype6" class="foodtype" value="Sorpresa / Fusión"  />
                    <label
                            for=foodtype6
                            class="wizard-selector">
                        <span class="card-icon icon-sorpresa"></span>
                        <span class="card-label-1">Sorpresa / Fusión</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="card-footer">
                    <a href="#" class="tac-button tac-medium" id="card_footypes_prev">Anterior</a>
                </div>
            </div>
        </section>

        <section id="card_foodtypes_way2">
            <div class="card-content">
                <div class="card-title">
                    <h1>Preferencias gastronómicas</h1>
                </div>
                <div class="section-item">
                    <input name="way2[foodtypes_way2]" type="radio" id="foodtype1_way2" class="foodtype_way2" value="Vegana"  />
                    <label  for=foodtype1_way2
                            class="wizard-selector">
                        <span class="card-icon icon-vegan"></span>
                        <span class="card-label-1">Vegana</span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way2[foodtypes_way2]" type="radio" id="foodtype2_way2" class="foodtype_way2" value="Italiana"  />
                    <label
                            for=foodtype2_way2
                            class="wizard-selector">
                        <span class="card-icon icon-italian"></span>
                        <span class="card-label-1">Italiana</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way2[foodtypes_way2]" type="radio" id="foodtype3_way2" class="foodtype_way2" value="Francesa"  />
                    <label
                            for=foodtype3_way2
                            class="wizard-selector">
                        <span class="card-icon icon-french"></span>
                        <span class="card-label-1">Francesa</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way2[foodtypes_way2]" type="radio" id="foodtype4_way2" class="foodtype_way2" value="Japonesa"  />
                    <label
                            for=foodtype4_way2
                            class="wizard-selector">
                        <span class="card-icon icon-japanese"></span>
                        <span class="card-label-1">Japonesa</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way2[foodtypes_way2]" type="radio" id="foodtype5_way2" class="foodtype_way2" value="Baja - Med"  />
                    <label
                            for=foodtype5_way2
                            class="wizard-selector">
                        <span class="card-icon icon-bajamed"></span>
                        <span class="card-label-1">Baja - Med</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="card-footer">
                    <a href="#" class="tac-button tac-medium" id="card_footypes_prev_way2">Anterior</a>
                </div>
            </div>
        </section>


        <section id="card_notes">
            <div class="card-content">
                <div class="card-title">
                    <h1>Nuestro chef debe saber que...</h1>
                </div>
                <div class="section-item">
                    <textarea id="frontend_userrequests_type_usereqNotes" name="way1[card_notes]" placeholder="Hola chef! Nos gustaría que el menú tuviera dos entrantes, principal y postre. ¡Gracias!"></textarea>
                </div>
                <div class="card-footer">
                    <button id="card_notes_continue" class="tac-button tac-medium">Continuar</button>
                </div>
                <div class="card-footer">
                    <button id="card_notes_prev" class="tac-button tac-medium">Anterior</button>
                </div>
            </div>
        </section>

        <section id="card_notes_way3">
            <div class="card-content">
                <div class="card-title">
                    <h1>Nuestro chef debe saber que...</h1>
                </div>
                <div class="section-item">
                    <textarea id="frontend_userrequests_type_usereqNotes" name="way3[card_notes]" placeholder="Hola chef! Nos gustaría que el menú tuviera dos entrantes, principal y postre. ¡Gracias!"></textarea>
                </div>
                <div class="card-footer">
                    <button id="card_notes_continue_way3" class="tac-button tac-medium">Continuar</button>
                </div>
                <div class="card-footer">
                    <button id="card_notes_prev_way3" class="tac-button tac-medium">Anterior</button>
                </div>
            </div>
        </section>

        <section id="card_specifications">
            <div class="card-content">
                <div class="card-title">
                    <h1>Especificaciones</h1>
                </div>
                <div class="section-item">
                    <textarea id="frontend_userrequests_type_usereqNotes" name="way3[specifications]" placeholder="Hola chef! Nos gustaría que el menú tuviera dos entrantes, principal y postre. ¡Gracias!"></textarea>
                </div>
                <div class="card-footer">
                    <button id="card_specifications_continue_way3" class="tac-button tac-medium">Continuar</button>
                </div>
                <div class="card-footer">
                    <button id="card_specifications_prev_way3" class="tac-button tac-medium">Anterior</button>
                </div>
            </div>
        </section>




        <section id="card_calendar">
            <div class="card-content">
                <div class="card-title">
                    <h1>El día...</h1>
                </div>
                <div>
                <?php echo do_shortcode('[wpbs id="1" form="1" title="no"  legend="yes" language="es"]'); ?>
                </div>
                <div class="card-footer">
                    <button id="card_calendar_continue" class="tac-button tac-medium">Continuar</button>
                </div>
                <div class="card-footer">
                    <button id="card_calendar_prev" class="tac-button tac-medium">Anterior</button>
                </div>
            </div>
        </section>


        <section id="card_calendar_way2">
            <div class="card-content">
                <div class="card-title">
                    <h1>El día...</h1>
                </div>
                
                <div class="add_dates" id="add_dates">

                </div>
                <div class="calendar_footer">
                    <div class="card-footer">
                        <button id="card_calendar_add_date" class="tac-button tac-medium">Agregar fecha</button>
                    </div>
                    <div class="card-footer">
                        <button id="card_calendar_continue_way2" class="tac-button tac-medium">Continuar</button>
                    </div>
                    <div class="card-footer">
                        <button id="card_calendar_prev_way2" class="tac-button tac-medium">Anterior</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="card_calendar_from">
            <div class="card-content">
                <div class="card-title">
                    <h1>Desde</h1>
                </div>
                <div id="datepicker_usereqDateFrom" class="tac-calendar"></div>
            </div>
        </section>
        <section id="card_calendar_to">
            <div class="card-content">
                <div class="card-title">
                    <h1>Hasta</h1>
                </div>
                <div id="datepicker_usereqDateTo" class="tac-calendar"></div>
            </div>
        </section>



        <section id="card_mealslots">
            <div class="card-content">
                <div class="card-title">
                    <h1>Quiero disfrutar del servicio los días</h1>
                </div>
                <div class="custom-row">
                    <div class="mealslots-header">
                        <div>
                            <span>Fecha</span>
                        </div>
                        <div>
                            <span>Desayuno</span>
                        </div>
                        <div>
                            <span>Comida</span>
                        </div>
                        <div>
                            <span>Cena</span>
                        </div>
                    </div>
                    <div class="mealslots" data-prototype="&lt;div&#x20;id&#x3D;&quot;frontend_userrequests_type_usereqMealSlots___name__&quot;&gt;&lt;div&gt;&lt;label&#x20;for&#x3D;&quot;frontend_userrequests_type_usereqMealSlots___name___date&quot;&gt;date&lt;&#x2F;label&gt;&lt;input&#x20;type&#x3D;&quot;text&quot;&#x20;id&#x3D;&quot;frontend_userrequests_type_usereqMealSlots___name___date&quot;&#x20;name&#x3D;&quot;frontend_userrequests_type&#x5B;usereqMealSlots&#x5D;&#x5B;__name__&#x5D;&#x5B;date&#x5D;&quot;&#x20;&#x2F;&gt;&lt;&#x2F;div&gt;&lt;div&gt;&lt;label&gt;breakfast&lt;&#x2F;label&gt;&lt;div&#x20;id&#x3D;&quot;frontend_userrequests_type_usereqMealSlots___name___breakfast&quot;&gt;&lt;input&#x20;type&#x3D;&quot;radio&quot;&#x20;id&#x3D;&quot;frontend_userrequests_type_usereqMealSlots___name___breakfast_0&quot;&#x20;name&#x3D;&quot;frontend_userrequests_type&#x5B;usereqMealSlots&#x5D;&#x5B;__name__&#x5D;&#x5B;breakfast&#x5D;&quot;&#x20;value&#x3D;&quot;breakfast&quot;&#x20;checked&#x3D;&quot;checked&quot;&#x20;&#x2F;&gt;&lt;label&#x20;for&#x3D;&quot;frontend_userrequests_type_usereqMealSlots___name___breakfast_0&quot;&gt;slot&lt;&#x2F;label&gt;&lt;&#x2F;div&gt;&lt;&#x2F;div&gt;&lt;div&gt;&lt;label&gt;lunch&lt;&#x2F;label&gt;&lt;div&#x20;id&#x3D;&quot;frontend_userrequests_type_usereqMealSlots___name___lunch&quot;&gt;&lt;input&#x20;type&#x3D;&quot;radio&quot;&#x20;id&#x3D;&quot;frontend_userrequests_type_usereqMealSlots___name___lunch_0&quot;&#x20;name&#x3D;&quot;frontend_userrequests_type&#x5B;usereqMealSlots&#x5D;&#x5B;__name__&#x5D;&#x5B;lunch&#x5D;&quot;&#x20;value&#x3D;&quot;lunch&quot;&#x20;checked&#x3D;&quot;checked&quot;&#x20;&#x2F;&gt;&lt;label&#x20;for&#x3D;&quot;frontend_userrequests_type_usereqMealSlots___name___lunch_0&quot;&gt;slot&lt;&#x2F;label&gt;&lt;&#x2F;div&gt;&lt;&#x2F;div&gt;&lt;div&gt;&lt;label&gt;dinner&lt;&#x2F;label&gt;&lt;div&#x20;id&#x3D;&quot;frontend_userrequests_type_usereqMealSlots___name___dinner&quot;&gt;&lt;input&#x20;type&#x3D;&quot;radio&quot;&#x20;id&#x3D;&quot;frontend_userrequests_type_usereqMealSlots___name___dinner_0&quot;&#x20;name&#x3D;&quot;frontend_userrequests_type&#x5B;usereqMealSlots&#x5D;&#x5B;__name__&#x5D;&#x5B;dinner&#x5D;&quot;&#x20;value&#x3D;&quot;dinner&quot;&#x20;checked&#x3D;&quot;checked&quot;&#x20;&#x2F;&gt;&lt;label&#x20;for&#x3D;&quot;frontend_userrequests_type_usereqMealSlots___name___dinner_0&quot;&gt;slot&lt;&#x2F;label&gt;&lt;&#x2F;div&gt;&lt;&#x2F;div&gt;&lt;&#x2F;div&gt;"></div>
                    <p class="legend">Desactiva las casillas para los días en los que <span>no</span> necesites un servicio. Desliza hacia abajo la tabla para ver todas las fechas.</p>
                </div>
                <div class="card-footer">
                    <a href="#next" class="tac-button tac-medium">
                        Continuar
                    </a>
                </div>
            </div>
        </section>



        <section id="card_stove">
            <div class="card-content">
                <div class="card-title">
                    <h1>Nuestra cocina tiene</h1>
                </div>
                <div class="section-item">
                    <input name="way1[stovetype]" type="radio" id="stovetype" class="stovetype" value="2 fuegos"  data-value="2" />
                    <label for="stovetype">
                        <span class="card-icon icon-stove-2"></span>                        <span class="card-label-1">2 fuegos</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way1[stovetype]" type="radio" id="stovetype2" class="stovetype" value="3 fuegos"  data-value="3" />
                    <label for="stovetype2">
                        <span class="card-icon icon-stove-3"></span>
                        <span class="card-label-1">3 fuegos</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way1[stovetype]" type="radio" id="stovetype3" class="stovetype" value="4 fuegos"  data-value="4" />
                    <label for="stovetype3">
                        <span class="card-icon icon-stove-4"></span>                        <span class="card-label-1">4 fuegos</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way1[stovetype]" type="radio" id="stovetype4" class="stovetype" value="5 fuegos"  data-value="5" />
                    <label for="stovetype4">
                        <span class="card-icon icon-stove-5"></span>                        <span class="card-label-1">5 fuegos</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="card-footer">
                    <a href="#" id="card_stove_prev" class="tac-button tac-medium">
                        Anterior
                    </a>
                </div>
            </div>
        </section>
        <section id="card_fires">
            <div class="card-content">
                <div class="card-title">
                    <h1>Nuestra cocina es de</h1>
                </div>
                <div class="section-item">
                    <input name="way1[fire]" type="radio" id="fire" class="fire" value="Vitrocerámica"  data-value="4" />
                    <label for="fire">
                        <span class="card-icon icon-kitchen-vitro"></span>                        <span class="card-label-1">Vitrocerámica</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way1[fire]" type="radio" id="fire2" class="fire" value="Inducción"  data-value="1" />
                    <label for="fire2">
                        <span class="card-icon icon-kitchen-induction"></span>                        <span class="card-label-1">Inducción</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way1[fire]" type="radio" id="fire3" class="fire" value="Gas"  data-value="2" />
                    <label for="fire3">
                        <span class="card-icon icon-kitchen-gas"></span>                        <span class="card-label-1">Gas</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="card-footer">
                    <a href="#" id="card_fires_prev" class="tac-button tac-medium">
                        Anterior
                    </a>
                </div>
            </div>
        </section>
        <section id="card_oven">
            <div class="card-content">
                <div class="card-title">
                    <h1>Tenemos horno</h1>
                </div>
                <div class="section-item">
                    <input name="way1[oven_answ]" type="radio" id="oven_answ" class="oven_answ" value="Si"  data-value="1" />
                    <label for="oven_answ">
                        <span class="card-icon icon-oven"></span>                        <span class="card-label-1">Si</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="section-item">
                    <input name="way1[oven_answ]" type="radio" id="oven_answ2" class="oven_answ" value="No"  data-value="0" />
                    <label for="oven_answ2">
                        <span class="card-icon icon-oven-no"></span>                        <span class="card-label-1">No</span>
                        <span class="card-label-2"></span>
                    </label>
                </div>
                <div class="card-footer">
                    <a href="#" id="card_oven_prev" class="tac-button tac-medium">
                        Anterior
                    </a>
                </div>
            </div>
        </section>
        <section id="card_rangeofprices" class="card_rangeofprices">
            <div class="card-content">
                <div class="card-title">
                    <h1>Queremos disfrutar de una experiencia gastronómica...</h1>
                </div>
                <div class="section-item">
                    <input name="way1[price]" type="radio" id="price1" class="price" value="Básico"  data-value="0" />
                    <label for="price1">
                        <span class="card-label-1">Básico</span>
                        <span class="card-label-2">Precio por persona</span>
                        <span class="card-label-3"></span>
                        <span class="card-label-4"></span>
                        <input type="hidden" name="way1[price1]" value="" class="pr_price1">
                    </label>
                </div>
                <div class="section-item">
                    <input name="way1[price]" type="radio" id="price2" class="price" value="Gourmet"  data-value="1" />
                    <label for="price2">
                        <span class="card-label-1">Gourmet</span>
                        <span class="card-label-2">Precio por persona</span>
                        <span class="card-label-3"></span>
                        <span class="card-label-4"></span>
                        <input type="hidden" name="way1[price2]" value="" class="pr_price2">
                    </label>
                </div>
                <div class="section-item">
                    <input name="way1[price]" type="radio" id="price3" class="price" value="Premium"  data-value="2" />
                    <label for="price3">
                        <span class="card-label-1">Premium</span>
                        <span class="card-label-2">Precio por persona</span>
                        <span class="card-label-3"></span>
                        <span class="card-label-4"></span>
                        <input type="hidden" name="way1[price3]" value="" class="pr_price3">
                    </label>
                </div>
                <div class="card-footer">
                    <a href="#" id="card_rangeofprices_prev" class="tac-button tac-medium">
                        Anterior
                    </a>
                </div>
            </div>
        </section>


        <section id="card_rangeofprices_way2" class="card_rangeofprices">
            <div class="card-content">
                <div class="card-title">
                    <h1>Rango de precios...</h1>
                </div>
                <div class="section-item">
                    <input name="way2[price_way2]" type="radio" id="price1_way2" class="price_way2" value="Básico"  data-value="0" />
                    <label for="price1_way2">
                        <span class="card-label-1">Básico</span>
                        <span class="card-label-2">Precio por persona</span>
                        <span class="card-label-3"></span>
                        <span class="card-label-4"></span>
                        <input type="hidden" name="way2[price1]" value="" class="pr_price1">
                    </label>
                </div>
                <div class="section-item">
                    <input name="way2[price_way2]" type="radio" id="price2_way2" class="price_way2" value="Gourmet"  data-value="1" />
                    <label for="price2_way2">
                        <span class="card-label-1">Gourmet</span>
                        <span class="card-label-2">Precio por persona</span>
                        <span class="card-label-3"></span>
                        <span class="card-label-4"></span>
                        <input type="hidden" name="way2[price2]" value="" class="pr_price2">
                    </label>
                </div>
                <div class="section-item">
                    <input name="way2[price_way2]" type="radio" id="price3_way2" class="price_way2" value="Premium"  data-value="2" />
                    <label for="price3_way2">
                        <span class="card-label-1">Premium</span>
                        <span class="card-label-2">Precio por persona</span>
                        <span class="card-label-3"></span>
                        <span class="card-label-4"></span>
                        <input type="hidden" name="way2[price3]" value="" class="pr_price3">
                    </label>
                </div>
                <div class="card-footer">
                    <a href="#" id="card_rangeofprices_prev_way2" class="tac-button tac-medium">
                        Anterior
                    </a>
                </div>
            </div>
        </section>


        <section id="card_restrictions">
            <div class="card-content">
                <div class="card-title">
                    <h1>Tenemos restricciones alimentarias</h1>
                </div>
                <div class="section-item">
                    <label
                            for=restrictions_answ1
                    >
                     <span class="card-label-1">
                     Si
                     </span>
                    </label>
                    <input name="way1[restrictions_answ]" type="radio" id="restrictions_answ1" value="Si"  />
                </div>
                <div class="section-item">
                    <label
                            for=restrictions_answ2
                    >
                     <span class="card-label-1">
                     No
                     </span>
                    </label>
                    <input name="way1[restrictions_answ]" type="radio" id="restrictions_answ2" value="No"  />
                </div>
                <div class="card-footer">
                    <a href="#" class="tac-button tac-medium" id="card_restrictions_prev">Anterior</a>
                </div>
            </div>
        </section>



        <section id="card_restrictions_way3">
            <div class="card-content">
                <div class="card-title">
                    <h1>Tenemos restricciones alimentarias</h1>
                </div>
                <div class="section-item">
                    <label
                            for=restrictions_answ1_way3
                    >
                     <span class="card-label-1">
                     Si
                     </span>
                    </label>
                    <input name="way3[restrictions_answ_way3]" type="radio" id="restrictions_answ1_way3" value="Si"  />
                </div>
                <div class="section-item">
                    <label
                            for=restrictions_answ2_way3
                    >
                     <span class="card-label-1">
                     No
                     </span>
                    </label>
                    <input name="way3[restrictions_answ_way3]" type="radio" id="restrictions_answ2_way3" value="No"  />
                </div>
                <div class="card-footer">
                    <a href="#" class="tac-button tac-medium" id="card_restrictions_prev_way3">Anterior</a>
                </div>
            </div>
        </section>


        <section id="card_restrictions2">
            <div class="card-content">
                <div class="card-title">
                    <h1>Concretamente</h1>
                </div>
                <div class="custom-row allergens-list">
                    <div class="section-item">
                        <input id="restrictions" name="way1[restrictions][]" type="checkbox" value="Vegetariano"  />
                        <label
                                for=restrictions
                        >
                            <span class="card-icon icon-restriction-steak"></span>
                            <span class="card-label-1">Vegetariano</span>
                        </label>
                    </div>
                    <div class="section-item">
                        <input id="restrictions2" name="way1[restrictions][]" type="checkbox" value="Gluten"  />
                        <label
                                for=restrictions2
                        >
                            <span class="card-icon icon-restriction-gluten"></span>
                            <span class="card-label-1">Gluten</span>
                        </label>
                    </div>
                    <div class="section-item">
                        <input id="restrictions3" name="way1[restrictions][]" type="checkbox" value="Frutos Secos"  />
                        <label
                                for=restrictions3
                        >
                            <span class="card-icon icon-restriction-peanut"></span>
                            <span class="card-label-1">Frutos Secos</span>
                        </label>
                    </div>
                    <div class="section-item">
                        <input id="restrictions4" name="way1[restrictions][]" type="checkbox" value="Marisco"  />
                        <label
                                for=restrictions4
                        >
                            <span class="card-icon icon-restriction-prawn"></span>
                            <span class="card-label-1">Marisco</span>
                        </label>
                    </div>
                    <div class="section-item">
                        <input id="restrictions5" name="way1[restrictions][]" type="checkbox" value="Lácteos"  />
                        <label
                                for=restrictions5
                        >
                            <span class="card-icon icon-restriction-dairy"></span>
                            <span class="card-label-1">Lácteos</span>
                        </label>
                    </div>
                </div>
                <div class="custom-row allergens-notes">
                    <textarea id="restrictions_especificaciones" name="way1[restrictions_especificaciones]" placeholder="Ej. Soy diabetico, padezco de hipertensión, vesicula inflamada, etc..."></textarea>
                </div>
                <div class="card-footer">
                    <button id="continue_restrictions2" class="tac-button tac-medium">Continuar</button>
                </div>
                <div class="card-footer">
                    <a href="#" class="tac-button tac-medium" id="card_restrictions2_prev">Anterior</a>
                </div>
            </div>
        </section>

        <section id="card_restrictions2_way3">
            <div class="card-content">
                <div class="card-title">
                    <h1>Concretamente</h1>
                </div>
                <div class="custom-row allergens-list">
                    <div class="section-item">
                        <input id="restrictions_way3" name="way3[restrictions_way3][]" type="checkbox" value="Vegetariano"  />
                        <label
                                for=restrictions_way3
                        >
                            <span class="card-icon icon-restriction-steak"></span>
                            <span class="card-label-1">Vegetariano</span>
                        </label>
                    </div>
                    <div class="section-item">
                        <input id="restrictions2_way3" name="way3[restrictions_way3][]" type="checkbox" value="Gluten"  />
                        <label
                                for=restrictions2_way3
                        >
                            <span class="card-icon icon-restriction-gluten"></span>
                            <span class="card-label-1">Gluten</span>
                        </label>
                    </div>
                    <div class="section-item">
                        <input id="restrictions3_way3" name="way3[restrictions_way3][]" type="checkbox" value="Frutos Secos"  />
                        <label
                                for=restrictions3_way3
                        >
                            <span class="card-icon icon-restriction-peanut"></span>
                            <span class="card-label-1">Frutos Secos</span>
                        </label>
                    </div>
                    <div class="section-item">
                        <input id="restrictions4_way3" name="way3[restrictions_way3][]" type="checkbox" value="Marisco"  />
                        <label
                                for=restrictions4_way3
                        >
                            <span class="card-icon icon-restriction-prawn"></span>
                            <span class="card-label-1">Marisco</span>
                        </label>
                    </div>
                    <div class="section-item">
                        <input id="restrictions5_way3" name="way3[restrictions_way3][]" type="checkbox" value="Lácteos"  />
                        <label
                                for=restrictions5_way3
                        >
                            <span class="card-icon icon-restriction-dairy"></span>
                            <span class="card-label-1">Lácteos</span>
                        </label>
                    </div>
                </div>
                <div class="custom-row allergens-notes">
                    <textarea id="restrictions_especificaciones_way3" name="way3[restrictions_especificaciones_way3]" placeholder="Ej. Soy diabetico, padezco de hipertensión, vesicula inflamada, etc..."></textarea>
                </div>
                <div class="card-footer">
                    <button id="continue_restrictions2_way3" class="tac-button tac-medium">Continuar</button>
                </div>
                <div class="card-footer">
                    <a href="#" class="tac-button tac-medium" id="card_restrictions2_prev_way3">Anterior</a>
                </div>
            </div>
        </section>



        <section id="card_userdetails">
            <div class="card-content">
                <div class="card-title">
                    <h1>Nuestra información de contacto es</h1>
                </div>
                <div class="form-item">
                    <label for="frontend_userrequests_type_usereqUserFullname">
                        <span class="icon-user-o"></span>
                        <span>Nombre:</span>
                    </label>
                    <input type="text" id="frontend_userrequests_type_usereqUserFullname" name="way1[name]" />
                </div>
                <div class="form-item">
                    <label for="frontend_userrequests_type_usereqUserEmail">
                        <span class="icon-at-email"></span>
                        <span>E-mail:</span>
                    </label>
                    <input type="text" id="frontend_userrequests_type_usereqUserEmail" name="way1[email]" />
                </div>
                <div class="form-item">
                    <label for="frontend_userrequests_type_usereqUserPhone">
                        <span class="icon-phone"></span>
                        <span>Teléfono:</span>
                    </label>
                    <input type="text" id="frontend_userrequests_type_usereqUserPhone" name="way1[phone]" />
                </div>
                <div class="card-footer">
                    <input type="submit" id="userrequests_submit_button_way1" class="tac-button tac-medium" value="Enviar"/>
                </div>
                <div class="card-footer">
                    <a href="#" class="tac-button tac-medium" id="card_userdetails_prev">Anterior</a>
                </div>

            </div>
        </section>

        <section id="card_userdetails_way2">
            <div class="card-content">
                <div class="card-title">
                    <h1>Nuestra información de contacto es</h1>
                </div>
                <div class="form-item">
                    <label for="frontend_userrequests_type_usereqUserFullname">
                        <span class="icon-user-o"></span>
                        <span>Nombre:</span>
                    </label>
                    <input type="text" id="frontend_userrequests_type_usereqUserFullname" name="way2[name_way2]" />
                </div>
                <div class="form-item">
                    <label for="frontend_userrequests_type_usereqUserEmail">
                        <span class="icon-at-email"></span>
                        <span>E-mail:</span>
                    </label>
                    <input type="text" id="frontend_userrequests_type_usereqUserEmail" name="way2[email_way2]" />
                </div>
                <div class="form-item">
                    <label for="frontend_userrequests_type_usereqUserPhone">
                        <span class="icon-phone"></span>
                        <span>Teléfono:</span>
                    </label>
                    <input type="text" id="frontend_userrequests_type_usereqUserPhone" name="way2[phone_way2]" />
                </div>
                <div class="card-footer">
                    <input type="submit" id="userrequests_submit_button_way2" class="tac-button tac-medium" value="Enviar"/>
                </div>
                <div class="card-footer">
                    <a href="#" class="tac-button tac-medium" id="card_userdetails_prev_way2">Anterior</a>
                </div>

            </div>
        </section>

        <section id="card_userdetails_way3">
            <div class="card-content">
                <div class="card-title">
                    <h1>Nuestra información de contacto es</h1>
                </div>
                <div class="form-item">
                    <label for="frontend_userrequests_type_usereqUserFullname">
                        <span class="icon-user-o"></span>
                        <span>Nombre:</span>
                    </label>
                    <input type="text" id="frontend_userrequests_type_usereqUserFullname" name="way3[name_way3]" />
                </div>
                <div class="form-item">
                    <label for="frontend_userrequests_type_usereqUserEmail">
                        <span class="icon-at-email"></span>
                        <span>E-mail:</span>
                    </label>
                    <input type="text" id="frontend_userrequests_type_usereqUserEmail" name="way3[email_way3]" />
                </div>
                <div class="form-item">
                    <label for="frontend_userrequests_type_usereqUserPhone">
                        <span class="icon-phone"></span>
                        <span>Teléfono:</span>
                    </label>
                    <input type="text" id="frontend_userrequests_type_usereqUserPhone" name="way3[phone_way3]" />
                </div>
                <div class="card-footer">
                    <input type="submit" id="userrequests_submit_button_way3" class="tac-button tac-medium" value="Enviar"/>
                </div>
                <div class="card-footer">
                    <a href="#" class="tac-button tac-medium" id="card_userdetails_prev_way3">Anterior</a>
                </div>

            </div>
        </section>


        <div style="display: none;">
            <div>
                <label>outreatypId</label>
                <div id="frontend_userrequests_type_outreatypId"><input type="radio" id="frontend_userrequests_type_outreatypId_0" name="frontend_userrequests_type[outreatypId]" value="1" /><label for="frontend_userrequests_type_outreatypId_0">1</label><input type="radio" id="frontend_userrequests_type_outreatypId_1" name="frontend_userrequests_type[outreatypId]" value="2" /><label for="frontend_userrequests_type_outreatypId_1">2</label></div>
            </div>
            <div>
                <label>meatypId</label>
                <div id="frontend_userrequests_type_meatypId"><input type="radio" id="frontend_userrequests_type_meatypId_0" name="frontend_userrequests_type[meatypId]" value="2" /><label for="frontend_userrequests_type_meatypId_0">2</label><input type="radio" id="frontend_userrequests_type_meatypId_1" name="frontend_userrequests_type[meatypId]" value="4" /><label for="frontend_userrequests_type_meatypId_1">4</label></div>
            </div>
            <div>
                <label>footypIds</label>
                <div id="frontend_userrequests_type_footypIds"><input type="checkbox" id="frontend_userrequests_type_footypIds_0" name="frontend_userrequests_type[footypIds]" value="256" /><label for="frontend_userrequests_type_footypIds_0">256</label><input type="checkbox" id="frontend_userrequests_type_footypIds_1" name="frontend_userrequests_type[footypIds]" value="4" /><label for="frontend_userrequests_type_footypIds_1">4</label><input type="checkbox" id="frontend_userrequests_type_footypIds_2" name="frontend_userrequests_type[footypIds]" value="2" /><label for="frontend_userrequests_type_footypIds_2">2</label><input type="checkbox" id="frontend_userrequests_type_footypIds_3" name="frontend_userrequests_type[footypIds]" value="8" /><label for="frontend_userrequests_type_footypIds_3">8</label><input type="checkbox" id="frontend_userrequests_type_footypIds_4" name="frontend_userrequests_type[footypIds]" value="32" /><label for="frontend_userrequests_type_footypIds_4">32</label><input type="checkbox" id="frontend_userrequests_type_footypIds_5" name="frontend_userrequests_type[footypIds]" value="128" /><label for="frontend_userrequests_type_footypIds_5">128</label></div>
            </div>
            <div>
                <label>footypIdsMultiple</label>
                <div id="frontend_userrequests_type_footypIdsMultiple"><input type="checkbox" id="frontend_userrequests_type_footypIdsMultiple_0" name="frontend_userrequests_type[footypIdsMultiple]" value="256" /><label for="frontend_userrequests_type_footypIdsMultiple_0">mediterranean</label><input type="checkbox" id="frontend_userrequests_type_footypIdsMultiple_1" name="frontend_userrequests_type[footypIdsMultiple]" value="4" /><label for="frontend_userrequests_type_footypIdsMultiple_1">italian</label><input type="checkbox" id="frontend_userrequests_type_footypIdsMultiple_2" name="frontend_userrequests_type[footypIdsMultiple]" value="2" /><label for="frontend_userrequests_type_footypIdsMultiple_2">french</label><input type="checkbox" id="frontend_userrequests_type_footypIdsMultiple_3" name="frontend_userrequests_type[footypIdsMultiple]" value="8" /><label for="frontend_userrequests_type_footypIdsMultiple_3">japanese</label><input type="checkbox" id="frontend_userrequests_type_footypIdsMultiple_4" name="frontend_userrequests_type[footypIdsMultiple]" value="32" /><label for="frontend_userrequests_type_footypIdsMultiple_4">mexican</label><input type="checkbox" id="frontend_userrequests_type_footypIdsMultiple_5" name="frontend_userrequests_type[footypIdsMultiple]" value="512" /><label for="frontend_userrequests_type_footypIdsMultiple_5">bbq</label><input type="checkbox" id="frontend_userrequests_type_footypIdsMultiple_6" name="frontend_userrequests_type[footypIdsMultiple]" value="1024" /><label for="frontend_userrequests_type_footypIdsMultiple_6">paella</label><input type="checkbox" id="frontend_userrequests_type_footypIdsMultiple_7" name="frontend_userrequests_type[footypIdsMultiple]" value="2048" /><label for="frontend_userrequests_type_footypIdsMultiple_7">tapas</label><input type="checkbox" id="frontend_userrequests_type_footypIdsMultiple_8" name="frontend_userrequests_type[footypIdsMultiple]" value="128" /><label for="frontend_userrequests_type_footypIdsMultiple_8">surprise</label></div>
            </div>
            <div>
                <label>lanIds</label>
                <div id="frontend_userrequests_type_lanIds"><input type="radio" id="frontend_userrequests_type_lanIds_0" name="frontend_userrequests_type[lanIds]" value="2" /><label for="frontend_userrequests_type_lanIds_0">english</label><input type="radio" id="frontend_userrequests_type_lanIds_1" name="frontend_userrequests_type[lanIds]" value="4" /><label for="frontend_userrequests_type_lanIds_1">french</label><input type="radio" id="frontend_userrequests_type_lanIds_2" name="frontend_userrequests_type[lanIds]" value="1" /><label for="frontend_userrequests_type_lanIds_2">spanish</label><input type="radio" id="frontend_userrequests_type_lanIds_3" name="frontend_userrequests_type[lanIds]" value="8" /><label for="frontend_userrequests_type_lanIds_3">german</label><input type="radio" id="frontend_userrequests_type_lanIds_4" name="frontend_userrequests_type[lanIds]" value="16" /><label for="frontend_userrequests_type_lanIds_4">portuguese</label><input type="radio" id="frontend_userrequests_type_lanIds_5" name="frontend_userrequests_type[lanIds]" value="32" /><label for="frontend_userrequests_type_lanIds_5">italian</label><input type="radio" id="frontend_userrequests_type_lanIds_6" name="frontend_userrequests_type[lanIds]" value="64" /><label for="frontend_userrequests_type_lanIds_6">russian</label><input type="radio" id="frontend_userrequests_type_lanIds_7" name="frontend_userrequests_type[lanIds]" value="0" /><label for="frontend_userrequests_type_lanIds_7">others</label></div>
            </div>
            <div>
                <label>range_of_diners</label>
                <div id="frontend_userrequests_type_range_of_diners"><input type="radio" id="frontend_userrequests_type_range_of_diners_0" name="frontend_userrequests_type[range_of_diners]" value="0" /><label for="frontend_userrequests_type_range_of_diners_0">0</label><input type="radio" id="frontend_userrequests_type_range_of_diners_1" name="frontend_userrequests_type[range_of_diners]" value="1" /><label for="frontend_userrequests_type_range_of_diners_1">1</label><input type="radio" id="frontend_userrequests_type_range_of_diners_2" name="frontend_userrequests_type[range_of_diners]" value="2" /><label for="frontend_userrequests_type_range_of_diners_2">2</label><input type="radio" id="frontend_userrequests_type_range_of_diners_3" name="frontend_userrequests_type[range_of_diners]" value="3" /><label for="frontend_userrequests_type_range_of_diners_3">3</label></div>
            </div>
            <div>
                <label>any_type_of_restriction</label>
                <div id="frontend_userrequests_type_any_type_of_restriction"><input type="radio" id="frontend_userrequests_type_any_type_of_restriction_0" name="frontend_userrequests_type[any_type_of_restriction]" value="0" /><label for="frontend_userrequests_type_any_type_of_restriction_0">0</label><input type="radio" id="frontend_userrequests_type_any_type_of_restriction_1" name="frontend_userrequests_type[any_type_of_restriction]" value="1" /><label for="frontend_userrequests_type_any_type_of_restriction_1">1</label></div>
            </div>
            <div><label for="frontend_userrequests_type_usereqDate">usereqDate</label><input type="text" id="frontend_userrequests_type_usereqDate" name="frontend_userrequests_type[usereqDate]" /></div>
            <div><label for="frontend_userrequests_type_usereqDateFrom">usereqDateFrom</label><input type="text" id="frontend_userrequests_type_usereqDateFrom" name="frontend_userrequests_type[usereqDateFrom]" /></div>
            <div><label for="frontend_userrequests_type_usereqDateTo">usereqDateTo</label><input type="text" id="frontend_userrequests_type_usereqDateTo" name="frontend_userrequests_type[usereqDateTo]" /></div>
            <div><label for="frontend_userrequests_type_couCountry">couCountry</label><input type="text" id="frontend_userrequests_type_couCountry" name="frontend_userrequests_type[couCountry]" /></div>
            <div>
                <label>someRestrictionsQuestion</label>
                <div id="frontend_userrequests_type_someRestrictionsQuestion"><input type="radio" id="frontend_userrequests_type_someRestrictionsQuestion_0" name="frontend_userrequests_type[someRestrictionsQuestion]" value="0" /><label for="frontend_userrequests_type_someRestrictionsQuestion_0">0</label><input type="radio" id="frontend_userrequests_type_someRestrictionsQuestion_1" name="frontend_userrequests_type[someRestrictionsQuestion]" value="1" /><label for="frontend_userrequests_type_someRestrictionsQuestion_1">1</label></div>
            </div>
            <div>
                <label>restypIds</label>
                <div id="frontend_userrequests_type_restypIds"><input type="checkbox" id="frontend_userrequests_type_restypIds_0" name="frontend_userrequests_type[restypIds]" value="1" /><label for="frontend_userrequests_type_restypIds_0">vegetarian</label><input type="checkbox" id="frontend_userrequests_type_restypIds_1" name="frontend_userrequests_type[restypIds]" value="4" /><label for="frontend_userrequests_type_restypIds_1">gluten</label><input type="checkbox" id="frontend_userrequests_type_restypIds_2" name="frontend_userrequests_type[restypIds]" value="128" /><label for="frontend_userrequests_type_restypIds_2">dry_fruits</label><input type="checkbox" id="frontend_userrequests_type_restypIds_3" name="frontend_userrequests_type[restypIds]" value="256" /><label for="frontend_userrequests_type_restypIds_3">shellfish</label><input type="checkbox" id="frontend_userrequests_type_restypIds_4" name="frontend_userrequests_type[restypIds]" value="8" /><label for="frontend_userrequests_type_restypIds_4">dairy</label></div>
            </div>
            <input type="hidden" id="frontend_userrequests_type_usereqReferrer" name="frontend_userrequests_type[usereqReferrer]" />
            <div>
                <label>usereqMealSlots</label>
                <div id="frontend_userrequests_type_usereqMealSlots" data-prototype=""></div>
            </div>
            <input type="hidden" id="frontend_userrequests_type_cheId" name="frontend_userrequests_type[cheId]" value="0" /><input type="hidden" id="frontend_userrequests_type_camcodCode" name="frontend_userrequests_type[camcodCode]" /><input type="hidden" id="frontend_userrequests_type__token" name="frontend_userrequests_type[_token]" value="PYJTxbfCqABVd9Epg5w9XVMGOpLNnuaAsTDsXL09R6Q" />
        </div>

</div>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<script type="text/javascript" src="/wp-content/themes/cvprivatechef/wizard/js/app-navigation.js"></script>
<script src="/wp-content/themes/cvprivatechef/wizard/js/bootstrap.min.js"></script>
<script>
    $('#myModal').appendTo("body").modal({
        keyboard: true
    });
    $(document).ready(function(){
        $("#tac-alert-modal .close").click(function(){
            $("#tac-alert-modal").toggleClass("hide-modal");
        });
        $("#tac-alert-modal .modal-footer button").click(function(){
            $("#tac-alert-modal").toggleClass("hide-modal");
        });
    });
</script>
<script src="http://maps.google.com/maps/api/js?libraries=places&amp;region=CL&amp;language=es-cl&amp;sensor=true&amp;key=AIzaSyA2JpjLBxx_OFC3Zs_pAQlDbGVBDE1xxws"></script>
<script src="/wp-content/themes/cvprivatechef/wizard/js/jquery-ui.min.js"></script>
<script>window.jQuery.ui || document.write('<script src="/wp-content/themes/cvprivatechef/wizard/js/jquery-ui.min.js"><\/script>')</script>
<script type="text/javascript" src="/wp-content/themes/cvprivatechef/wizard/js/frontend-frontend.js"></script>
<script type="text/javascript" src="/wp-content/themes/cvprivatechef/wizard/js/wizard.js"></script>
<script type="text/javascript" src="/wp-content/themes/cvprivatechef/wizard/js/wizard-navigation.js"></script>
<script type="text/javascript" src="/wp-content/themes/cvprivatechef/wizard/js/scriptOld.js"></script>
<script type="text/javascript" src="/wp-content/themes/cvprivatechef/wizard/js/frontend-userrequests.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.min.js"></script>



    </form>

<?php get_footer(); ?>