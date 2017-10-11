        $(function () {
             objectFitImages();
         });

         if ($(window).width() < 480) {
             function usereqHideStuff() {
                 $('header, .card-title, footer, .allergens-list').hide()
             }

             function usereqShowStuff() {
                 $('header, .card-title, footer, .allergens-list').show()
             }

             $('#frontend_userrequests_type_usereqRestrictionsNotes, #frontend_userrequests_type_usereqNotes, #card_userdetails input, #card_address input').focus(usereqHideStuff);
             $('#frontend_userrequests_type_usereqRestrictionsNotes, #frontend_userrequests_type_usereqNotes, #card_userdetails input, #card_address input').blur(usereqShowStuff);
         }
   
         $(document).ready(function () {
             // Create the measurement node
             var scrollDiv = document.createElement("div");
             scrollDiv.className = "scrollbar-measure";
             document.body.appendChild(scrollDiv);

             // Get the scrollbar width
             var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;
             // console.log(scrollbarWidth);

             $('#card_mealslots').find('.mealslots-header div:last-child').css('padding-right', scrollbarWidth);

             // Delete the DIV
             document.body.removeChild(scrollDiv);
         })
   
         window.locale = 'es_MX';
         window.country = 'MX';
         window.previousCountry = window.country;
         window.can_show_price_and_number_of_diners = true;
         window.range_of_prices_per_locale = {"default":[["$1000-$63000","$63000-$70000","$70000-$84000"],["$800-$42000","$42000-$49000","$49000-$1000"],["$700-$31500","$31500-$42000","$42000-$1000"],["$600-$31500","$31500-$42000","$42000-$1000"]],"christmas_default":[["$120-$140","$140-$160","$160-$180"],["$80-$100","$100-$120","$120-$140"],["$70-$80","$80-$100","$100-$120"],["$70-$80","$80-$100","$100-$120"]],"christmas_catering":[["$60-$70","$70-$80","$80-$90"],["$40-$50","$50-$60","$60-$70"],["$30-$40","$40-$50","$50-$60"],["$30-$40","$40-$50","$50-$60"]],"saintvalentine_catering":[["$60-$70","$70-$80","$80-$90"],["$40-$50","$50-$60","$60-$70"],["$30-$40","$40-$50","$50-$60"],["$30-$40","$40-$50","$50-$60"]],"saintvalentine_default":[["$70-$80","$80-$90","$90-$100"],["$50-$60","$60-$70","$70-$80"],["$30-$40","$40-$60","$60-$80"],["$30-$40","$40-$60","$60-$80"]]};
         window.is_default_campaign = true;
         
         window.OCCTYP_CHRISTMAS_DEFAULT = '1';
         window.OCCTYP_CHRISTMAS_CATERING = '2';
         window.OCCTYP_SAINTVALENTINE_CATERING = '8';
         window.OCCTYP_SAINTVALENTINE_DEFAULT = '4';
         
         window.tac_frontend_userrequests_ajax = '/es-cl/user-requests-wizard/ajax';
         
         window.reel = JSON.parse("{\"card_address\":{\"validation\":\"userRequestsValidations.validateAddress\"}}");
         

     
         var userrequests_loader_text = 'Preparando tu propuesta';
         var userrequests_valid_empty_name = 'Necesitamos que nos indique su nombre para poder personalizarle una propuesta gastronómica';
         var userrequests_valid_empty_email = 'Necesitamos que nos indique su e-mail de contacto válido poder mandarle una propuesta gastronómica';
         var userrequests_valid_empty_phone = 'Necesitamos que nos indique su teléfono de contacto válido';
         var userrequests_valid_address_not_found = 'No podemos encontrar tu dirección :(. Por favor indícanos la población.';
         var userrequests_address_placeholder = 'Ejemplo: Madrid';
         var userrequests_address_label = 'Población:';
         var userrequests_date_is_too_early = 'Solicitar con al menos 5 días de antelación';

         var userrequests_per_person_label = 'por persona';
         var common_holiday_title_text = 'Día Festivo';
         var common_notholiday_title_text = 'Día no Festivo';
         var cardsDefaultErrorMessage = 'Debe indicar una opción';
         var userrequests_date_not_available = 'Día no disponible para la fecha seleccionada';

         var js_option_required = 'Debe marcar una opción';
         var js_date_must_be_later_to_today = 'La fecha debe ser posterior al día de hoy';
         var js_date_not_valid = 'Fecha no válida';
         var js_date_to_must_be_later_to_from = 'La fecha del último día del servicio no puede ser menor que la fecha del primer día del servicio';

         var js_valid_empty_name = 'Necesitamos que nos indique su nombre para poder personalizarle una propuesta gastronómica';
         var js_address_not_found = 'No podemos encontrar tu dirección :(. Por favor indícanos la población.';
         var js_address_placeholder = 'Ejemplo: Madrid';
         var js_address_label = 'Población:';
         var js_valid_empty_email = 'Necesitamos que nos indique su e-mail de contacto válido poder mandarle una propuesta gastronómica';
         var js_valid_empty_phone = 'Necesitamos que nos indique su teléfono de contacto válido';


