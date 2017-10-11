$(document).ready(function () {
    var contadore = 0;
    $('#card_calendar_add_date').on('click',function(){
    var screenwidth = $(document).width();
    if(screenwidth > 768){
        if(contadore == 0){
            $('#add_dates').append('<div class="one_date date_initial_class_100">            <h3>Seleccione la fecha y hora</h3>        <input type="datetime-local" name="way2[date][]">            </div>');
            contadore++;
        }else{

            if(contadore == 1){
                $('#add_dates').append('<div class="one_date date_initial_class_50">            <h3>Seleccione la fecha y hora</h3>        <input type="datetime-local" name="way2[date][]">            </div>');
                $('.one_date').removeClass('date_initial_class_100');
                $('.one_date').addClass('date_initial_class_50');
                contadore++;
            }else{
                if(contadore == 2){
                    $('#add_dates').append('<div class="one_date">            <h3>Seleccione la fecha y hora</h3>        <input type="datetime-local" name="way2[date][]">            </div>');
                    $('.one_date').removeClass('date_initial_class_100');
                    $('.one_date').removeClass('date_initial_class_50');
                }
            }

        }

    }else{
        $('#add_dates').append('<div class="one_date">            <h3>Seleccione la fecha y hora</h3>        <input type="datetime-local" name="way2[date][]">            </div>');
    }









    });


    $("input[type='submit']").on('click',function(){
       $('#frontend_userrequests_type').submit();
    });


    $('#userrequests_submit_button_way1').on('click',function(){
        var name= $('#card_userdetails').find('input[name="name"]').val();
        var email= $('#card_userdetails').find('input[name="email"]').val();
        var phone= $('#card_userdetails').find('input[name="phone"]').val();
        if(name == "" || email == "" || phone == ""){
            alert('Por favor ingresa todos los datos');
        }
    });

    $('#userrequests_submit_button_way2').on('click',function(){
        var name= $('#card_userdetails_way2').find('input[name="name_way2"]').val();
        var email= $('#card_userdetails_way2').find('input[name="email_way2"]').val();
        var phone= $('#card_userdetails_way2').find('input[name="phone_way2"]').val();
        if(name == "" || email == "" || phone == ""){
            alert('Por favor ingresa todos los datos');
        }
    });

    $('#userrequests_submit_button_way3').on('click',function(){
        var name= $('#card_userdetails_way3').find('input[name="name_way3"]').val();
        var email= $('#card_userdetails_way3').find('input[name="email_way3"]').val();
        var phone= $('#card_userdetails_way3').find('input[name="phone_way3"]').val();
        if(name == "" || email == "" || phone == ""){
            alert('Por favor ingresa todos los datos');
        }
    });

    /* WAY 1 */
    $('#card_address').addClass('active');

     $('#card_address_next').on('click',function(){


         if($("input[name='address']").val() == ""){
             alert('Por favor ingresa tu dirección');
         }else {
             var isInside = validateAddress();
             if(isInside == true){
                 $('#card_address').removeClass('active');
                 $('#card_outreach').addClass('active');
             }else{

                 swal({
                        type: 'error',
                        html: '<p>Lo sentimos, el domicilio que ingresó no se encuentra dentro del rango para brindar el servicio, por favor pruebe de nuevo con una zona mas cercana a zona rio, dentro de 10 kilometros a la redonda.</p>',
                        showCloseButton: true
                     }
                 );
             }

         }

    });

    $('#servicio1').on('click',function(){
        $('#card_outreach').removeClass('active');
        $('#card_people').addClass('active');
    });



    $('.people_option').on('click',function(){
        var pplno = $(this).val();
        fillPrices(pplno);
        $('#card_people').removeClass('active');
        $('#card_mealtypes').addClass('active');
    });

    $('.setrata').on('click',function(){
        $('#card_mealtypes').removeClass('active');
        $('#card_foodtypes').addClass('active');
    });

    $('.foodtype').on('click',function(){
        $('#card_foodtypes').removeClass('active');
        $('#card_restrictions').addClass('active');
    });

    $('#restrictions_answ1').on('click',function(){
        $('#card_restrictions').removeClass('active');
        $('#card_restrictions2').addClass('active');
    });

    $('#restrictions_answ2').on('click',function(){
        $('#card_restrictions').removeClass('active');
        $('#card_notes').addClass('active');
    });

    $('#continue_restrictions2').on('click',function(){
       var checkLength = $('#card_restrictions2').find('input[type=checkbox]:checked').length;
       var textAreaLength = $("#restrictions_especificaciones").val();

        if(checkLength == 0 && textAreaLength == "")
        {
            alert('Por favor especifica una restricción alimenticia');
        }else{
           $('#card_restrictions2').removeClass('active');
           $('#card_notes').addClass('active');
       }
    });

    $('#card_notes_continue').on('click',function(){
        $('#card_notes').removeClass('active');
        $('#card_fires').addClass('active');
    });

    $('.fire').on('click',function(){
        $('#card_fires').removeClass('active');
        $('#card_stove').addClass('active');
    });

    $('.stovetype').on('click',function(){
        $('#card_stove').removeClass('active');
        $('#card_oven').addClass('active');
    });

    $('.oven_answ').on('click',function(){
        $('#card_oven').removeClass('active');
        $('#card_calendar').addClass('active');
    });

    $('#card_calendar_continue').on('click',function(){

        var startDate = $('#card_calendar').find('input[name="wpbs-form-start-date"]').val();
        if(startDate == ""){
            alert('Por favor selecciona una fecha');
        }else{
            $('#card_calendar').removeClass('active');
            $('#card_rangeofprices').addClass('active');
        }

    });

    $('.price').on('click',function(){
        $('#card_rangeofprices').removeClass('active');
        $('#card_userdetails').addClass('active');
    });



    /* END WAY 1 */


    /* WAY 2 */

    $('#servicio2').on('click',function(){
        $('#card_outreach').removeClass('active');
        $('#card_foodtypes_way2').addClass('active');
    });

    $('.foodtype_way2').on('click',function(){
        $('#card_foodtypes_way2').removeClass('active');
        $('#card_calendar_way2').addClass('active');
    });

    $('#card_calendar_continue_way2').on('click',function(){

        var startDate = $('#card_calendar_way2').find('input[name="wpbs-form-start-date"]').val();
        if(startDate == ""){
            alert('Por favor selecciona una fecha');
        }else {
            $('#card_calendar_way2').removeClass('active');
            $('#card_people_way2').addClass('active');
        }
    });

    $('.people_option_way2').on('click',function(){
        var pplno = $(this).val();
        fillPrices(pplno);
        $('#card_people_way2').removeClass('active');
        $('#card_rangeofprices_way2').addClass('active');
    });

    $('.price_way2').on('click',function(){
        $('#card_people_way2').removeClass('active');
        $('#card_rangeofprices_way2').addClass('active');
    });



    $('.price_way2').on('click',function(){
        $('#card_rangeofprices_way2').removeClass('active');
        $('#card_userdetails_way2').addClass('active');
    });




    /* END WAY 2 */



    /* WAY 3 */



    $('#servicio3').on('click',function(){
        $('#card_outreach').removeClass('active');
        $('#card_specifications').addClass('active');
    });

    $('#card_specifications_continue_way3').on('click',function(){
        $('#card_specifications').removeClass('active');
        $('#card_people_way3').addClass('active');
    });

    $('.people_option_way3').on('click',function(){
        $('#card_people_way3').removeClass('active');
        $('#card_restrictions_way3').addClass('active');
    });

    $('#restrictions_answ1_way3').on('click',function(){
        $('#card_restrictions_way3').removeClass('active');
        $('#card_restrictions2_way3').addClass('active');
    });

    $('#restrictions_answ2_way3').on('click',function(){
        $('#card_restrictions_way3').removeClass('active');
        $('#card_notes_way3').addClass('active');
    });

    $('#continue_restrictions2_way3').on('click',function(){

        var checkLength = $('#card_restrictions2_way3').find('input[type=checkbox]:checked').length;
        var textAreaLength = $("#restrictions_especificaciones_way3").val();

        if(checkLength == 0 && textAreaLength == "")
        {
            alert('Por favor especifica una restricción alimenticia');
        }else {
            $('#card_restrictions2_way3').removeClass('active');
            $('#card_notes_way3').addClass('active');
        }
    });

    $('#card_notes_continue_way3').on('click',function(){
        $('#card_notes_way3').removeClass('active');
        $('#card_userdetails_way3').addClass('active');
    });





    /* END WAY 3 */






    /* PREVIOUS BUTTONS */

    /*  WAY 1 */
    $('#card_address_prev').on('click',function(){
        $('#card_address').addClass('active');
        $('#card_outreach').removeClass('active');
    });

    $('#card_people_prev').on('click',function(){
        $('#card_outreach').addClass('active');
        $('#card_people').removeClass('active');
    });

    $('#card_mealtypes_prev').on('click',function(){
        $('#card_people').addClass('active');
        $('#card_mealtypes').removeClass('active');
    });

    $('#card_footypes_prev').on('click',function(){
        $('#card_mealtypes').addClass('active');
        $('#card_foodtypes').removeClass('active');
    });

    $('#card_restrictions_prev').on('click',function(){
        $('#card_foodtypes').addClass('active');
        $('#card_restrictions').removeClass('active');
    });

    $('#card_restrictions2_prev').on('click',function(){
        $('#card_restrictions').addClass('active');
        $('#card_restrictions2').removeClass('active');
    });

    $('#card_notes_prev').on('click',function(){
        $('#card_restrictions').addClass('active');
        $('#card_notes').removeClass('active');
    });

    $('#card_fires_prev').on('click',function(){
        $('#card_notes').addClass('active');
        $('#card_fires').removeClass('active');
    });

    $('#card_stove_prev').on('click',function(){
        $('#card_fires').addClass('active');
        $('#card_stove').removeClass('active');
    });

    $('#card_oven_prev').on('click',function(){
        $('#card_stove').addClass('active');
        $('#card_oven').removeClass('active');
    });

    $('#card_calendar_prev').on('click',function(){
        $('#card_oven').addClass('active');
        $('#card_calendar').removeClass('active');
    });

    $('#card_rangeofprices_prev').on('click',function(){
        $('#card_calendar').addClass('active');
        $('#card_rangeofprices').removeClass('active');
    });

    $('#card_userdetails_prev').on('click',function(){
        $('#card_rangeofprices').addClass('active');
        $('#card_userdetails').removeClass('active');
    });

    /* END WAY 1 */

    /* WAY 2 */



    $('#card_footypes_prev_way2').on('click',function(){
        $('#card_outreach').addClass('active');
        $('#card_foodtypes_way2').removeClass('active');
    });

    $('#card_calendar_prev_way2').on('click',function(){
        $('#card_foodtypes_way2').addClass('active');
        $('#card_calendar_way2').removeClass('active');
    });

    $('#card_people_prev_way2').on('click',function(){
        $('#card_calendar_way2').addClass('active');
        $('#card_people_way2').removeClass('active');
    });

    $('#card_rangeofprices_prev_way2').on('click',function(){
        $('#card_people_way2').addClass('active');
        $('#card_rangeofprices_way2').removeClass('active');
    });



    $('#card_userdetails_prev_way2').on('click',function(){
        $('#card_rangeofprices_way2').addClass('active');
        $('#card_userdetails_way2').removeClass('active');
    });

    /* END WAY 2 */


    /* WAY 3 */

    $('#card_specifications_prev_way3').on('click',function(){
        $('#card_outreach').addClass('active');
        $('#card_specifications').removeClass('active');
    });

    $('#card_people_prev_way3').on('click',function(){
        $('#card_specifications').addClass('active');
        $('#card_people_way3').removeClass('active');
    });

    $('#card_restrictions_prev_way3').on('click',function(){
        $('#card_people_way3').addClass('active');
        $('#card_restrictions_way3').removeClass('active');
    });

    $('#card_restrictions2_prev_way3').on('click',function(){
        $('#card_restrictions_way3').addClass('active');
        $('#card_restrictions2_way3').removeClass('active');
    });

    $('#card_notes_prev_way3').on('click',function(){
        $('#card_restrictions_way3').addClass('active');
        $('#card_notes_way3').removeClass('active');
    });

    $('#card_userdetails_prev_way3').on('click',function(){
        $('#card_notes_way3').addClass('active');
        $('#card_userdetails_way3').removeClass('active');
    });





    /* END WAY 3 */


    /* END PREVIOUS BUTTONS */

});
