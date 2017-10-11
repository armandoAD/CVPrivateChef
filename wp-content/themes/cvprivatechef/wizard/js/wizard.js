
    function haversine() {
        var radians = Array.prototype.map.call(arguments, function(deg) { return deg/180.0 * Math.PI; });
        var lat1 = radians[0], lon1 = radians[1], lat2 = radians[2], lon2 = radians[3];
        var R = 6372.8; // km
        var dLat = lat2 - lat1;
        var dLon = lon2 - lon1;
        var a = Math.sin(dLat / 2) * Math.sin(dLat /2) + Math.sin(dLon / 2) * Math.sin(dLon /2) * Math.cos(lat1) * Math.cos(lat2);
        var c = 2 * Math.asin(Math.sqrt(a));
        return R * c;
    }

    function validateAddress(){
        var $address = $('#frontend_userrequests_type_usereqAddress').val(); //User's Address
        var lat1 = 32.5207815; //Zona rio lat
        var lon1 = -117.0154871; //Zona rio lon
        var isInside = false;
        $.ajax({
            dataType: "json",
            url: 'https://maps.googleapis.com/maps/api/geocode/json',
            data: {

                address : $address,
                key : 'AIzaSyA2JpjLBxx_OFC3Zs_pAQlDbGVBDE1xxws',
                sensor :false
            },
            success: function(response){
                var lat2 = response.results[0].geometry.location.lat;
                var lon2 = response.results[0].geometry.location.lng;
                var resKm = haversine(lat1, lon1, lat2, lon2);
                if( resKm <= 10 ){
                    isInside = true;
                }

            },
            error: function(response){
                console.log(response);
            },
            async: false
        });

        return isInside;


    }

    function fillPrices(pplno){

        switch(pplno){
            case '2 Personas':

                $('[for=price1]').find('.card-label-3').html('$1000 - $1250');
                $('[for=price2]').find('.card-label-3').html('$1250 - $1500');
                $('[for=price3]').find('.card-label-3').html('$1500 - $1750');

                $('[for=price1_way2]').find('.card-label-3').html('$1000 - $1250');
                $('[for=price2_way2]').find('.card-label-3').html('$1250 - $1500');
                $('[for=price3_way2]').find('.card-label-3').html('$1500 - $1750');

                $('.pr_price1').val('$1000 - $1250');
                $('.pr_price2').val('$1250 - $1500');
                $('.pr_price3').val('$1500 - $1750');


                break;

            case '3 a 6 personas':

                $('[for=price1]').find('.card-label-3').html('$800 - $950');
                $('[for=price2]').find('.card-label-3').html('$950 - $1200');
                $('[for=price3]').find('.card-label-3').html('$1200 - $1500');

                $('[for=price1_way2]').find('.card-label-3').html('$800 - $950');
                $('[for=price2_way2]').find('.card-label-3').html('$950 - $1200');
                $('[for=price3_way2]').find('.card-label-3').html('$1200 - $1500');

                $('.pr_price1').val('$800 - $950');
                $('.pr_price2').val('$950 - $1200');
                $('.pr_price3').val('$1200 - $1500');

                break;

            case '7 a 12 Personas':

                $('[for=price1]').find('.card-label-3').html('$700 - $850');
                $('[for=price2]').find('.card-label-3').html('$850 - $1100');
                $('[for=price3]').find('.card-label-3').html('$1100 - $1400');

                $('[for=price1_way2]').find('.card-label-3').html('$700 - $850');
                $('[for=price2_way2]').find('.card-label-3').html('$850 - $1100');
                $('[for=price3_way2]').find('.card-label-3').html('$1100 - $1400');

                $('.pr_price1').val('$700 - $850');
                $('.pr_price2').val('$850 - $1100');
                $('.pr_price3').val('$1100 - $1400');

                break;

            case '13+ Personas':

                $('[for=price1]').find('.card-label-3').html('$600 - $800');
                $('[for=price2]').find('.card-label-3').html('$800 - $1000');
                $('[for=price3]').find('.card-label-3').html('$1000 - $1200');

                $('[for=price1_way2]').find('.card-label-3').html('$600 - $800');
                $('[for=price2_way2]').find('.card-label-3').html('$800 - $1000');
                $('[for=price3_way2]').find('.card-label-3').html('$1000 - $1200');

                $('.pr_price1').val('$600 - $800');
                $('.pr_price2').val('$800 - $1000');
                $('.pr_price3').val('$1000 - $1200');


                break;
        }
    }