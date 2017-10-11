// Min Length for Phone numbers based on Country.
// Used in Validations
window.phone_min_lengths = {
    'es_ES': 7,
    'es_MX': 7,
    'es_AR': 7,
    'pt_PT': 7,
    'en_GB': 7,
    'it_IT': 7,
    'en_EN': 7,
    'en_US': 7,
    'en_CA': 7,
    'en_AU': 7,
    'en_ZA': 7,
    'es_CL': 7,
    'en_AE': 7,
    'en_IE': 7,
    'en_NL': 7,
    'en_FR': 7,
    'en_SG': 7,
    'en_IN': 7,
    'en_ID': 7,
    'en_TH': 7,
    'en_PH': 7,
    'en_MY': 7,
    'en_AW': 7
};

window.validCountries = ['ES', 'MX', 'AR', 'PT', 'GB', 'IT', 'US', 'CA', 'AU', 'ZA', 'CL', 'AE', 'IE', 'NL', 'FR', 'SG', 'IN', 'ID', 'TH', 'PH', 'MY', 'AW'];


// @TODO => Faltaría en_ES, no se puede meter conforme está planteado, pq existirían 2 entradas con la misma key. a revisar código!
window.countriesLocales = {
    'ES': 'es_ES',
    'MX': 'es_MX',
    'AR': 'es_AR',
    'PT': 'pt_PT',
    'GB': 'en_GB',
    'IT': 'it_IT',
    'WW': 'en_EN',
    'US': 'en_US',
    'CA': 'en_CA',
    'AU': 'en_AU',
    'ZA': 'en_ZA',
    'CL': 'es_CL',
    'AE': 'en_AE',
    'IE': 'en_IE',
    'NL': 'en_NL',
    'FR': 'en_FR',
    'SG': 'en_SG',
    'IN': 'en_IN',
    'ID': 'en_ID',
    'TH': 'en_TH',
    'PH': 'en_PH',
    'MY': 'en_MY',
    'AW': 'en_AW'
};

// Longitude & Latitude:
// http://www.mapcoordinates.net/en
// https://www.saberespractico.com/estudios/paises-y-capitales-del-mundo/
window.default_latitudes = {
    'es_ES': 40.416761,
    'en_ES': 40.416761,
    'es_MX': 19.419962818527534,
    'es_AR': -34.6517,
    'pt_PT': 38.72225,
    'en_GB': 51.50735,
    'it_IT': 41.9027835,
    'en_EN': 40.741895,
    'en_US': 40.74196686434069,
    'en_CA': 45.4215296,
    'en_AU': -35.3075,
    'en_ZA': -33.9248685,
    'es_CL': -33.4249571,
    'en_AE': 25.204849,
    'en_IE': 53.349805,
    'en_NL': 52.370216,
    'en_FR': 48.856614,
    'en_SG': 1.352083,
    'en_IN': 28.613939,
    'en_ID': -6.17511,
    'en_TH': 13.756331,
    'en_PH': 14.599512,
    'en_MY': 3.139003,
    'en_AW': 12.509204
};

window.default_longitudes = {
    'es_ES': -3.703544,
    'en_ES': -3.703544,
    'es_MX': -99.13793906347654,
    'es_AR': -58.5780,
    'pt_PT': -9.13934,
    'en_GB': -0.12776,
    'it_IT': 12.4963655,
    'en_EN': -73.989308,
    'en_US': -73.98900419749452,
    'en_CA': -75.6971931,
    'en_AU': 149.124417,
    'en_ZA': 18.4240553,
    'es_CL': -70.7014778,
    'en_AE': 55.270783,
    'en_IE': -6.26031,
    'en_NL': 4.895168,
    'en_FR': 2.352222,
    'en_SG': 103.819836,
    'en_IN': 77.209021,
    'en_ID': 106.865039,
    'en_TH': 100.501765,
    'en_PH': 120.98422,
    'en_MY': 101.686855,
    'en_AW': -70.008631
};

var dayMonthYearEs1 = {
    dayNamesMin: ["D", "L", "M", "X", "J", "V", "S"],
    dayNames: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
    monthNamesMin: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
    monthNames: ["Enero", "Febero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
    dateFormat: 'dd/mm/yy',
    firstDay: 1
};

var dayMonthYearEs7 = {
    dayNamesMin: ["D", "L", "M", "X", "J", "V", "S"],
    dayNames: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
    monthNamesMin: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
    monthNames: ["Enero", "Febero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
    dateFormat: 'dd/mm/yy',
    firstDay: 7
};

var dayMonthYearPt = {
    dayNamesMin: ["D", "2", "3", "4", "5", "6", "S"],
    dayNames: ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"],
    monthNamesMin: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
    monthNames: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
    dateFormat: 'dd/mm/yy',
    firstDay: 1
};

var dayMonthYearEn1 = {
    dayNamesMin: ["U", "M", "T", "W", "R", "F", "S"],
    dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
    monthNamesMin: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
    dateFormat: 'dd/mm/yy',
    firstDay: 1
};

var dayMonthYearIt = {
    dayNamesMin: ["D", "L", "M", "M", "G", "V", "S"],
    dayNames: ["Domenica", "Lunedì", "Martedì", "Mercoledì", "Giovedì", "Venerdì", "Sabato"],
    monthNamesMin: ["Gen", "Feb", "Mar", "Apr", "Mag", "Giu", "Lug", "Ago", "Set", "Ott", "Nov", "Dic"],
    monthNames: ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"],
    dateFormat: 'dd/mm/yy',
    firstDay: 1
};

var yearMonthDayEn7 = {
    dayNamesMin: ["U", "M", "T", "W", "R", "F", "S"],
    dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
    monthNamesMin: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
    dateFormat: 'yy/mm/dd',
    firstDay: 7
};

var monthDayYearEn7 = {
    dayNamesMin: ["U", "M", "T", "W", "R", "F", "S"],
    dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
    monthNamesMin: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
    dateFormat: 'mm/dd/yy',
    firstDay: 7
};

var dayMonthYearEn7 = {
    dayNamesMin: ["U", "M", "T", "W", "R", "F", "S"],
    dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
    monthNamesMin: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
    dateFormat: 'dd/mm/yy',
    firstDay: 7
};

window.calendar = {
    'es_ES': dayMonthYearEs1,
    'es_MX': dayMonthYearEs1,
    'es_AR': dayMonthYearEs1,
    'pt_PT': dayMonthYearPt,
    'en_GB': dayMonthYearEn1,
    'en_ES': dayMonthYearEn1,
    'it_IT': dayMonthYearIt,
    'en_EN': yearMonthDayEn7,
    'en_US': monthDayYearEn7,
    'en_CA': dayMonthYearEn7,
    'en_AU': dayMonthYearEn1,
    'en_ZA': dayMonthYearEn7,
    'es_CL': dayMonthYearEs7,
    'en_AE': dayMonthYearEn7,
    'en_IE': dayMonthYearEn1,
    'en_NL': dayMonthYearEn1,
    'en_FR': dayMonthYearEn1,
    'en_SG': dayMonthYearEn1,
    'en_IN': dayMonthYearEn7,
    'en_ID': dayMonthYearEn7,
    'en_TH': dayMonthYearEn1,
    'en_PH': dayMonthYearEn7,
    'en_MY': dayMonthYearEn1,
    'en_AW': dayMonthYearEn7
};

window.getLocaleByCountry = function (country) {

    for (locale in phone_min_lengths) {
        if (locale.substr(-3, 3) == '_' + country.toUpperCase()) {
            return locale;
        }
    }
};
consoleLog = function (text, expanded) {

    try {
        expanded = expanded || false;

        if (!expanded) {
            if (window.console) console.log(text);
        } else {
            if (window.console) for (a in text) console.log(a + ': ' + text[a]);
        }

    } catch (err) {
    }
};


// FN: Get URL parameters
window.getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }

};

if (!String.prototype.startsWith) {
    String.prototype.startsWith = function(searchString, position) {
        position = position || 0;
        return this.indexOf(searchString, position) === position;
    };
}

window.copyToClipboard = function (value) {
    var aux = document.createElement("input");
    aux.setAttribute("value", value);
    document.body.appendChild(aux);
    aux.select();
    document.execCommand("copy");
    document.body.removeChild(aux);
};
// *** Google Maps Address Parser Library ***
// This library provides a clean way to get place from a place object and to parse exposing understandable methods

GoogleMapsAddressParser = function (place) {
    this.place = place;
};

GoogleMapsAddressParser.prototype.setPlace = function (place) {
    this.place = place;
};

GoogleMapsAddressParser.prototype.getCountry = function () {

    var addressComponents = this.place.address_components;

    for (var i = 0; i < addressComponents.length; i++) {

        if (addressComponents[i].types[0] === "country") {
            return addressComponents[i].short_name;
        }

        if (addressComponents[i].types.length == 2) {
            if (addressComponents[i].types[0] == "political") {
                return addressComponents[i].short_name;
            }
        }
    }
    return false;
};

GoogleMapsAddressParser.prototype.getLatitude = function () {
    return this.place.geometry.location.lat();
};

GoogleMapsAddressParser.prototype.getLongitude = function () {
    return this.place.geometry.location.lng();
};

GoogleMapsAddressParser.prototype.getAddress = function () {
    return this.place.formatted_address.split('Unnamed Road, ').join('').trim();
};

GoogleMapsAddressParser.prototype.getFullAddressObject = function () {

    var place = this.place;
    for (i = 0; i < place.address_components.length; i++) {
        var ac = place.address_components[i];
        place[ac.types[0]] = ac.short_name;
    }

    var administrative_area_level_1 = ('administrative_area_level_1' in place) ? place.administrative_area_level_1 : '';
    var administrative_area_level_2 = ('administrative_area_level_2' in place) ? place.administrative_area_level_2 : '';

    var locality = ('locality' in place) ? place.locality : '';
    var country = ('administrative_area_level_2' in place) ? place.administrative_area_level_2 : '';
    var latitude = this.getLatitude();
    var longitude = this.getLongitude();
    var route = ('route' in place) ? place.route : '';
    var street_number = ('street_number' in place) ? (place.street_number) : '';
    var postal_code = ('postal_code' in place) ? (place.postal_code) : '';

    fullAddress = {
        'level_1': administrative_area_level_1,
        'level_2': administrative_area_level_2,
        'locality': locality,
        'country': country,
        'latitude': latitude,
        'longitude': longitude,
        'route': route.trim(),
        'street_number': street_number,
        'postal_code': postal_code
    };
    return fullAddress;
};
GoogleMapsAutocomplete = function (data) {

    this.inputAddressId = data.input_address_id;
    this.autocompleteInput = document.getElementById(this.inputAddressId);
    this.autocompleteObject = new google.maps.places.Autocomplete(this.autocompleteInput, {types: ['geocode']});
    this.addressLoaded = false;
};

GoogleMapsAutocomplete.prototype.triggerGoogleMapsAutocompleted = function (place) {
    $(document).trigger('google_maps_autocompleted', [{'place': place}]);
    this.addressLoaded = true;
};

GoogleMapsAutocomplete.prototype.triggerGoogleMapsAddressNotValid = function () {
    $(document).trigger('google_maps_address_not_valid');
    this.addressLoaded = false;
};

GoogleMapsAutocomplete.prototype.updateAddressInputValue = function (value) {
    this.autocompleteInput.value = value;
};

GoogleMapsAutocomplete.prototype.selectItem = function (itemSelector) {

    $(".pac-container").hide();

    itemFull = $(itemSelector).text();
    itemQuery = $(itemSelector + " .pac-item-query").text();
    firstResult = itemQuery + ' ' + itemFull.substring(itemQuery.length);

    if (firstResult !== '') {

        var me = this;
        var geocoder = new google.maps.Geocoder();

        geocoder.geocode({"address": firstResult}, function (results, status) {

            if (status.toUpperCase() === 'OK') {
                me.updateAddressInputValue(firstResult);
                me.triggerGoogleMapsAutocompleted(results[0]);
            } else {
                me.triggerGoogleMapsAddressNotValid();
            }
        });
    }
};

GoogleMapsAutocomplete.prototype.autoSelect = function () {

    if ($(".pac-container .pac-item-selected").length > 0) {
        this.selectItem(".pac-container .pac-item-selected");
    } else {
        this.selectItem(".pac-container .pac-item:first");
    }
};

GoogleMapsAutocomplete.prototype.googleMapsAddressParsersAutocompleteListener = function () {

    var me = this;
    this.autocompleteObject.addListener('place_changed', function () {

        if (!me.addressLoaded) {

            var place = me.autocompleteObject.getPlace();
            if (place.hasOwnProperty('geometry')) {
                me.triggerGoogleMapsAutocompleted(place);
            } else {
                me.autoSelect();
            }
        }
    });

    google.maps.event.addDomListener(this.autocompleteInput, 'keypress', function (event) {

        // tab (9), intro (13), esc (27), left (37), up (38), right (39), down (40), end (35), home (36)
        var keys2ignore = [9, 13, 27, 37, 38, 39, 40, 35, 36];
        modifierKeyIsPressed = event.ctrlKey || event.altKey || event.shiftKey || event.metaKey;

        // console.log(event.which);
        if (keys2ignore.indexOf(event.which) === -1 || modifierKeyIsPressed) {
            me.triggerGoogleMapsAddressNotValid();
        }

    });

    google.maps.event.addDomListener(this.autocompleteInput, 'keydown', function (event) {
        if (event.which == 9 && !me.addressLoaded) {
            me.autoSelect();
        }

        // backspace (8), delete (46)
        var keys2ignore = [8, 46];
        if (keys2ignore.indexOf(event.which) !== -1) {
            me.triggerGoogleMapsAddressNotValid();
        }
    });
};

GoogleMapsAutocomplete.prototype.init = function () {
    this.googleMapsAddressParsersAutocompleteListener();
};
/*
MODULE THAT MANAGES INSERTED GOOGLE MAPS ADDRESS IN THE AUTOCOMPLETE DROPDOWN

LISTENS FOR:
    - google_maps_autocompleted
    - google_maps_address_not_valid

DEPENDENCIES:
    - google_maps_autocomplete
    - google_maps_place

REVIEW USED MODULES: userrequests
*/

UserRequestsAddressManager = function (data) {
    this.inputAddressId = data.input_address_id;
    this.countryId = data.country_id;
    this.longitudeId = data.longitude_id;
    this.latitudeId = data.latitude_id;
};

UserRequestsAddressManager.prototype.fillInFormFields = function (data) {

    var $countryId = $('#' + this.countryId);
    var $latitudeId = $('#' + this.latitudeId);
    var $longitudeId = $('#' + this.longitudeId);

    if ($countryId.length) {
        $countryId.val(data.country)
    }

    if ($latitudeId.length) {
        $latitudeId.val(data.latitude)
    }

    if ($longitudeId.length) {
        $longitudeId.val(data.longitude)
    }

    window.country = data.country;
};

UserRequestsAddressManager.prototype.googleMapsAutocompletedListener = function () {

    var me = this;
    $(document).bind('google_maps_autocompleted', function (event, data) {

        var googleMapsAddressParser = new GoogleMapsAddressParser(data.place);
        data = {
            'country': googleMapsAddressParser.getCountry(),
            'latitude': googleMapsAddressParser.getLatitude(),
            'longitude': googleMapsAddressParser.getLongitude()
        };
        me.fillInFormFields(data);

        $(document).trigger('google_maps_address_data_updated');
    });

};

UserRequestsAddressManager.prototype.googleMapsAddressNotValidListener = function () {

    var me = this;
    $(document).bind('google_maps_address_not_valid', function () {
        data = {'country': '', 'latitude': '', 'longitude': ''};
        me.fillInFormFields(data);
    });
};

UserRequestsAddressManager.prototype.initGoogleMapsAutocomplete = function () {

    var data = {'input_address_id': this.inputAddressId};
    var googleMapsAutocomplete = new GoogleMapsAutocomplete(data);
    googleMapsAutocomplete.init();
};

UserRequestsAddressManager.prototype.init = function () {
    this.googleMapsAutocompletedListener();
    this.googleMapsAddressNotValidListener();
    this.initGoogleMapsAutocomplete();
};
var Card = function (id, options, index, defaultErrorMessage) {

    var _id = id;           // id-key of the card
    var _options = options; // custom options
    var _prev = false;      // can go prev
    var _next = false;      // can go next
    var _index = index;     // index of the card
    var _error_message = defaultErrorMessage; // 'Debe indicar una opción';

    // consoleLog(id + ' ' + index);
    var _validationFunction = null;
    var _validationParameters = null;

    // http://stackoverflow.com/questions/359788/how-to-execute-a-javascript-function-when-i-have-its-name-as-a-string
    this.getCallableFunctionByName = function (functionName, context, args) {
        var namespaces = functionName.split(".");
        var func = namespaces.pop();
        for (var i = 0; i < namespaces.length; i++) {
            context = context[namespaces[i]];
        }
        return context[func].apply(context, args);
    };


    // Manage Validation via "options"
    if (options !== undefined && options['validation'] !== undefined) {

        var args = {};
        args['caller'] = this;
        if (options['validation_parameters'] !== undefined) {
            args['validation_parameters'] = options['validation_parameters'];
        }

        this.isValid = function (jsPassedParams) {
            if (jsPassedParams != undefined) { // if data passed from javascript, merge objects (Not Arrays)
                for (var attrname in jsPassedParams) {
                    args[attrname] = jsPassedParams[attrname];
                }
            }
            return this.getCallableFunctionByName(options['validation'], window, [args]);
        };

    } else {
        this.isValid = function () {
            _error_message = '';
            return true;
        };
    }


    this.getId = function () {
        return _id;
    };

    this.allowNext = function (b) {
        _next = b;
    };

    this.allowPrev = function (b) {
        _prev = b;
    };

    this.canGoNext = function () {
        return _next;
    };

    this.canGoPrev = function () {
        return _prev;
    };

    this.setErrorMessage = function (error_message) {
        _error_message = error_message;
    };

    this.getErrorMessage = function () {
        return _error_message;
    };

    this.getOptions = function () {
        return _options;
    };

    this.setIndex = function (index) {
        _index = index;
    };

    this.getIndex = function () {
        return _index;
    };
};


var Cards = function (wrapper_id, defaultErrorMessage) {

    var _cards = [];
    var _index = 0;
    var _length = 0;

    var _next_index = null;
    var _wrapper_id = wrapper_id;

    var _default_error_message = 'Debe indicar una opción';

    this.setDefaultErrorMessage = function (defaultErrorMessage) {
        _default_error_message = defaultErrorMessage;
    };

    // Dispatch Event
    this.dispatchEvent = function (data) {
        $('#' + _wrapper_id).trigger("move", data);
    };

    this.getLength = function () {
        return _length;
    };

    this.init = function (id) {

        var card = this.get(id);

        _index = card.getIndex();
        _next_index = (_index < _length - 1) ? (_index + 1) : _index;

      /*  $("#" + id).addClass('active');
        $("#" + id).show(); */

        this.dispatchEvent({'id': this.get(0).getId()});
    };


    this.add = function (id, options) {
        _cards.push(new Card(id, options, _length, _default_error_message));
        _length++;

        if (_next_index == null) {
            _next_index = 1;
        }
    };


    this.get = function (index) {
        if (!isNaN(index)) {
            return _cards[index];
        } else {
            for (i = 0; i < _length; i++) {
                if (_cards[i].getId() == index) return _cards[i];
            }
        }
    };


    this.setCurrentIndex = function (index) {
        _index = index;
    };


    this.setNextIndex = function (next_index) {
        _next_index = next_index;
    };


    this.getCurrentCard = function () {
        return _cards[_index];
    };

    this.getCurrentIndex = function () {
        return _index;
    };

    this.getCards = function () {
        return _cards;
    };


    this.moveNext = function (event, fade) {
        var currentCard = _cards[_index];
        currentCard.setErrorMessage('');

        var current_id = currentCard.getId();
        var next_id = _cards[_next_index].getId();

       /* $("#" + current_id).removeClass('active');
        $("#" + next_id).addClass('active'); */

        //console.log('current: ' + current_id);
        //console.log('next: ' + next_id);

        _index = _next_index; // Current Index
        _next_index = (_index < _length - 1) ? (_next_index + 1) : _next_index;


        this.dispatchEvent({'from': current_id, 'to': next_id});
    };


};
// $zopim(function() {
//     $zopim.livechat.hideAll();
//     $zopim.livechat.window.onHide(function(){
//         $zopim.livechat.hideAll();
//         $('#cp-phone').show();
//
//     });
// });
// window.showZopim = function(){
//     if( $zopim.livechat.window.getDisplay()){
//         $('#cp-phone').show();
//         $zopim.livechat.hideAll();
//     } else {
//         $('#cp-phone').hide();
//         $zopim.livechat.window.show();
//     }
// };
typeof JSON!="object"&&(JSON={}),function(){"use strict";function f(e){return e<10?"0"+e:e}function quote(e){return escapable.lastIndex=0,escapable.test(e)?'"'+e.replace(escapable,function(e){var t=meta[e];return typeof t=="string"?t:"\\u"+("0000"+e.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+e+'"'}function str(e,t){var n,r,i,s,o=gap,u,a=t[e];a&&typeof a=="object"&&typeof a.toJSON=="function"&&(a=a.toJSON(e)),typeof rep=="function"&&(a=rep.call(t,e,a));switch(typeof a){case"string":return quote(a);case"number":return isFinite(a)?String(a):"null";case"boolean":case"null":return String(a);case"object":if(!a)return"null";gap+=indent,u=[];if(Object.prototype.toString.apply(a)==="[object Array]"){s=a.length;for(n=0;n<s;n+=1)u[n]=str(n,a)||"null";return i=u.length===0?"[]":gap?"[\n"+gap+u.join(",\n"+gap)+"\n"+o+"]":"["+u.join(",")+"]",gap=o,i}if(rep&&typeof rep=="object"){s=rep.length;for(n=0;n<s;n+=1)typeof rep[n]=="string"&&(r=rep[n],i=str(r,a),i&&u.push(quote(r)+(gap?": ":":")+i))}else for(r in a)Object.prototype.hasOwnProperty.call(a,r)&&(i=str(r,a),i&&u.push(quote(r)+(gap?": ":":")+i));return i=u.length===0?"{}":gap?"{\n"+gap+u.join(",\n"+gap)+"\n"+o+"}":"{"+u.join(",")+"}",gap=o,i}}typeof Date.prototype.toJSON!="function"&&(Date.prototype.toJSON=function(e){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+f(this.getUTCMonth()+1)+"-"+f(this.getUTCDate())+"T"+f(this.getUTCHours())+":"+f(this.getUTCMinutes())+":"+f(this.getUTCSeconds())+"Z":null},String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(e){return this.valueOf()});var cx=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,escapable=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,gap,indent,meta={"\b":"\\b","	":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},rep;typeof JSON.stringify!="function"&&(JSON.stringify=function(e,t,n){var r;gap="",indent="";if(typeof n=="number")for(r=0;r<n;r+=1)indent+=" ";else typeof n=="string"&&(indent=n);rep=t;if(!t||typeof t=="function"||typeof t=="object"&&typeof t.length=="number")return str("",{"":e});throw new Error("JSON.stringify")}),typeof JSON.parse!="function"&&(JSON.parse=function(text,reviver){function walk(e,t){var n,r,i=e[t];if(i&&typeof i=="object")for(n in i)Object.prototype.hasOwnProperty.call(i,n)&&(r=walk(i,n),r!==undefined?i[n]=r:delete i[n]);return reviver.call(e,t,i)}var j;text=String(text),cx.lastIndex=0,cx.test(text)&&(text=text.replace(cx,function(e){return"\\u"+("0000"+e.charCodeAt(0).toString(16)).slice(-4)}));if(/^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,"")))return j=eval("("+text+")"),typeof reviver=="function"?walk({"":j},""):j;throw new SyntaxError("JSON.parse")})}(),function(e,t){"use strict";var n=e.History=e.History||{},r=e.jQuery;if(typeof n.Adapter!="undefined")throw new Error("History.js Adapter has already been loaded...");n.Adapter={bind:function(e,t,n){r(e).bind(t,n)},trigger:function(e,t,n){r(e).trigger(t,n)},extractEventData:function(e,n,r){var i=n&&n.originalEvent&&n.originalEvent[e]||r&&r[e]||t;return i},onDomLoad:function(e){r(e)}},typeof n.init!="undefined"&&n.init()}(window),function(e,t){"use strict";var n=e.document,r=e.setTimeout||r,i=e.clearTimeout||i,s=e.setInterval||s,o=e.History=e.History||{};if(typeof o.initHtml4!="undefined")throw new Error("History.js HTML4 Support has already been loaded...");o.initHtml4=function(){if(typeof o.initHtml4.initialized!="undefined")return!1;o.initHtml4.initialized=!0,o.enabled=!0,o.savedHashes=[],o.isLastHash=function(e){var t=o.getHashByIndex(),n;return n=e===t,n},o.isHashEqual=function(e,t){return e=encodeURIComponent(e).replace(/%25/g,"%"),t=encodeURIComponent(t).replace(/%25/g,"%"),e===t},o.saveHash=function(e){return o.isLastHash(e)?!1:(o.savedHashes.push(e),!0)},o.getHashByIndex=function(e){var t=null;return typeof e=="undefined"?t=o.savedHashes[o.savedHashes.length-1]:e<0?t=o.savedHashes[o.savedHashes.length+e]:t=o.savedHashes[e],t},o.discardedHashes={},o.discardedStates={},o.discardState=function(e,t,n){var r=o.getHashByState(e),i;return i={discardedState:e,backState:n,forwardState:t},o.discardedStates[r]=i,!0},o.discardHash=function(e,t,n){var r={discardedHash:e,backState:n,forwardState:t};return o.discardedHashes[e]=r,!0},o.discardedState=function(e){var t=o.getHashByState(e),n;return n=o.discardedStates[t]||!1,n},o.discardedHash=function(e){var t=o.discardedHashes[e]||!1;return t},o.recycleState=function(e){var t=o.getHashByState(e);return o.discardedState(e)&&delete o.discardedStates[t],!0},o.emulated.hashChange&&(o.hashChangeInit=function(){o.checkerFunction=null;var t="",r,i,u,a,f=Boolean(o.getHash());return o.isInternetExplorer()?(r="historyjs-iframe",i=n.createElement("iframe"),i.setAttribute("id",r),i.setAttribute("src","#"),i.style.display="none",n.body.appendChild(i),i.contentWindow.document.open(),i.contentWindow.document.close(),u="",a=!1,o.checkerFunction=function(){if(a)return!1;a=!0;var n=o.getHash(),r=o.getHash(i.contentWindow.document);return n!==t?(t=n,r!==n&&(u=r=n,i.contentWindow.document.open(),i.contentWindow.document.close(),i.contentWindow.document.location.hash=o.escapeHash(n)),o.Adapter.trigger(e,"hashchange")):r!==u&&(u=r,f&&r===""?o.back():o.setHash(r,!1)),a=!1,!0}):o.checkerFunction=function(){var n=o.getHash()||"";return n!==t&&(t=n,o.Adapter.trigger(e,"hashchange")),!0},o.intervalList.push(s(o.checkerFunction,o.options.hashChangeInterval)),!0},o.Adapter.onDomLoad(o.hashChangeInit)),o.emulated.pushState&&(o.onHashChange=function(t){var n=t&&t.newURL||o.getLocationHref(),r=o.getHashByUrl(n),i=null,s=null,u=null,a;return o.isLastHash(r)?(o.busy(!1),!1):(o.doubleCheckComplete(),o.saveHash(r),r&&o.isTraditionalAnchor(r)?(o.Adapter.trigger(e,"anchorchange"),o.busy(!1),!1):(i=o.extractState(o.getFullUrl(r||o.getLocationHref()),!0),o.isLastSavedState(i)?(o.busy(!1),!1):(s=o.getHashByState(i),a=o.discardedState(i),a?(o.getHashByIndex(-2)===o.getHashByState(a.forwardState)?o.back(!1):o.forward(!1),!1):(o.pushState(i.data,i.title,encodeURI(i.url),!1),!0))))},o.Adapter.bind(e,"hashchange",o.onHashChange),o.pushState=function(t,n,r,i){r=encodeURI(r).replace(/%25/g,"%");if(o.getHashByUrl(r))throw new Error("History.js does not support states with fragment-identifiers (hashes/anchors).");if(i!==!1&&o.busy())return o.pushQueue({scope:o,callback:o.pushState,args:arguments,queue:i}),!1;o.busy(!0);var s=o.createStateObject(t,n,r),u=o.getHashByState(s),a=o.getState(!1),f=o.getHashByState(a),l=o.getHash(),c=o.expectedStateId==s.id;return o.storeState(s),o.expectedStateId=s.id,o.recycleState(s),o.setTitle(s),u===f?(o.busy(!1),!1):(o.saveState(s),c||o.Adapter.trigger(e,"statechange"),!o.isHashEqual(u,l)&&!o.isHashEqual(u,o.getShortUrl(o.getLocationHref()))&&o.setHash(u,!1),o.busy(!1),!0)},o.replaceState=function(t,n,r,i){r=encodeURI(r).replace(/%25/g,"%");if(o.getHashByUrl(r))throw new Error("History.js does not support states with fragment-identifiers (hashes/anchors).");if(i!==!1&&o.busy())return o.pushQueue({scope:o,callback:o.replaceState,args:arguments,queue:i}),!1;o.busy(!0);var s=o.createStateObject(t,n,r),u=o.getHashByState(s),a=o.getState(!1),f=o.getHashByState(a),l=o.getStateByIndex(-2);return o.discardState(a,s,l),u===f?(o.storeState(s),o.expectedStateId=s.id,o.recycleState(s),o.setTitle(s),o.saveState(s),o.Adapter.trigger(e,"statechange"),o.busy(!1)):o.pushState(s.data,s.title,s.url,!1),!0}),o.emulated.pushState&&o.getHash()&&!o.emulated.hashChange&&o.Adapter.onDomLoad(function(){o.Adapter.trigger(e,"hashchange")})},typeof o.init!="undefined"&&o.init()}(window),function(e,t){"use strict";var n=e.console||t,r=e.document,i=e.navigator,s=!1,o=e.setTimeout,u=e.clearTimeout,a=e.setInterval,f=e.clearInterval,l=e.JSON,c=e.alert,h=e.History=e.History||{},p=e.history;try{s=e.sessionStorage,s.setItem("TEST","1"),s.removeItem("TEST")}catch(d){s=!1}l.stringify=l.stringify||l.encode,l.parse=l.parse||l.decode;if(typeof h.init!="undefined")throw new Error("History.js Core has already been loaded...");h.init=function(e){return typeof h.Adapter=="undefined"?!1:(typeof h.initCore!="undefined"&&h.initCore(),typeof h.initHtml4!="undefined"&&h.initHtml4(),!0)},h.initCore=function(d){if(typeof h.initCore.initialized!="undefined")return!1;h.initCore.initialized=!0,h.options=h.options||{},h.options.hashChangeInterval=h.options.hashChangeInterval||100,h.options.safariPollInterval=h.options.safariPollInterval||500,h.options.doubleCheckInterval=h.options.doubleCheckInterval||500,h.options.disableSuid=h.options.disableSuid||!1,h.options.storeInterval=h.options.storeInterval||1e3,h.options.busyDelay=h.options.busyDelay||250,h.options.debug=h.options.debug||!1,h.options.initialTitle=h.options.initialTitle||r.title,h.options.html4Mode=h.options.html4Mode||!1,h.options.delayInit=h.options.delayInit||!1,h.intervalList=[],h.clearAllIntervals=function(){var e,t=h.intervalList;if(typeof t!="undefined"&&t!==null){for(e=0;e<t.length;e++)f(t[e]);h.intervalList=null}},h.debug=function(){(h.options.debug||!1)&&h.log.apply(h,arguments)},h.log=function(){var e=typeof n!="undefined"&&typeof n.log!="undefined"&&typeof n.log.apply!="undefined",t=r.getElementById("log"),i,s,o,u,a;e?(u=Array.prototype.slice.call(arguments),i=u.shift(),typeof n.debug!="undefined"?n.debug.apply(n,[i,u]):n.log.apply(n,[i,u])):i="\n"+arguments[0]+"\n";for(s=1,o=arguments.length;s<o;++s){a=arguments[s];if(typeof a=="object"&&typeof l!="undefined")try{a=l.stringify(a)}catch(f){}i+="\n"+a+"\n"}return t?(t.value+=i+"\n-----\n",t.scrollTop=t.scrollHeight-t.clientHeight):e||c(i),!0},h.getInternetExplorerMajorVersion=function(){var e=h.getInternetExplorerMajorVersion.cached=typeof h.getInternetExplorerMajorVersion.cached!="undefined"?h.getInternetExplorerMajorVersion.cached:function(){var e=3,t=r.createElement("div"),n=t.getElementsByTagName("i");while((t.innerHTML="<!--[if gt IE "+ ++e+"]><i></i><![endif]-->")&&n[0]);return e>4?e:!1}();return e},h.isInternetExplorer=function(){var e=h.isInternetExplorer.cached=typeof h.isInternetExplorer.cached!="undefined"?h.isInternetExplorer.cached:Boolean(h.getInternetExplorerMajorVersion());return e},h.options.html4Mode?h.emulated={pushState:!0,hashChange:!0}:h.emulated={pushState:!Boolean(e.history&&e.history.pushState&&e.history.replaceState&&!/ Mobile\/([1-7][a-z]|(8([abcde]|f(1[0-8]))))/i.test(i.userAgent)&&!/AppleWebKit\/5([0-2]|3[0-2])/i.test(i.userAgent)),hashChange:Boolean(!("onhashchange"in e||"onhashchange"in r)||h.isInternetExplorer()&&h.getInternetExplorerMajorVersion()<8)},h.enabled=!h.emulated.pushState,h.bugs={setHash:Boolean(!h.emulated.pushState&&i.vendor==="Apple Computer, Inc."&&/AppleWebKit\/5([0-2]|3[0-3])/.test(i.userAgent)),safariPoll:Boolean(!h.emulated.pushState&&i.vendor==="Apple Computer, Inc."&&/AppleWebKit\/5([0-2]|3[0-3])/.test(i.userAgent)),ieDoubleCheck:Boolean(h.isInternetExplorer()&&h.getInternetExplorerMajorVersion()<8),hashEscape:Boolean(h.isInternetExplorer()&&h.getInternetExplorerMajorVersion()<7)},h.isEmptyObject=function(e){for(var t in e)if(e.hasOwnProperty(t))return!1;return!0},h.cloneObject=function(e){var t,n;return e?(t=l.stringify(e),n=l.parse(t)):n={},n},h.getRootUrl=function(){var e=r.location.protocol+"//"+(r.location.hostname||r.location.host);if(r.location.port||!1)e+=":"+r.location.port;return e+="../index.html",e},h.getBaseHref=function(){var e=r.getElementsByTagName("base"),t=null,n="";return e.length===1&&(t=e[0],n=t.href.replace(/[^\/]+$/,"")),n=n.replace(/\/+$/,""),n&&(n+="../index.html"),n},h.getBaseUrl=function(){var e=h.getBaseHref()||h.getBasePageUrl()||h.getRootUrl();return e},h.getPageUrl=function(){var e=h.getState(!1,!1),t=(e||{}).url||h.getLocationHref(),n;return n=t.replace(/\/+$/,"").replace(/[^\/]+$/,function(e,t,n){return/\./.test(e)?e:e+"/"}),n},h.getBasePageUrl=function(){var e=h.getLocationHref().replace(/[#\?].*/,"").replace(/[^\/]+$/,function(e,t,n){return/[^\/]$/.test(e)?"":e}).replace(/\/+$/,"")+"/";return e},h.getFullUrl=function(e,t){var n=e,r=e.substring(0,1);return t=typeof t=="undefined"?!0:t,/[a-z]+\:\/\//.test(e)||(r==="/"?n=h.getRootUrl()+e.replace(/^\/+/,""):r==="#"?n=h.getPageUrl().replace(/#.*/,"")+e:r==="?"?n=h.getPageUrl().replace(/[\?#].*/,"")+e:t?n=h.getBaseUrl()+e.replace(/^(\.\/)+/,""):n=h.getBasePageUrl()+e.replace(/^(\.\/)+/,"")),n.replace(/\#$/,"")},h.getShortUrl=function(e){var t=e,n=h.getBaseUrl(),r=h.getRootUrl();return h.emulated.pushState&&(t=t.replace(n,"")),t=t.replace(r,"../index.html"),h.isTraditionalAnchor(t)&&(t="./"+t),t=t.replace(/^(\.\/)+/g,"index.html").replace(/\#$/,""),t},h.getLocationHref=function(e){return e=e||r,e.URL===e.location.href?e.location.href:e.location.href===decodeURIComponent(e.URL)?e.URL:e.location.hash&&decodeURIComponent(e.location.href.replace(/^[^#]+/,""))===e.location.hash?e.location.href:e.URL.indexOf("#")==-1&&e.location.href.indexOf("#")!=-1?e.location.href:e.URL||e.location.href},h.store={},h.idToState=h.idToState||{},h.stateToId=h.stateToId||{},h.urlToId=h.urlToId||{},h.storedStates=h.storedStates||[],h.savedStates=h.savedStates||[],h.normalizeStore=function(){h.store.idToState=h.store.idToState||{},h.store.urlToId=h.store.urlToId||{},h.store.stateToId=h.store.stateToId||{}},h.getState=function(e,t){typeof e=="undefined"&&(e=!0),typeof t=="undefined"&&(t=!0);var n=h.getLastSavedState();return!n&&t&&(n=h.createStateObject()),e&&(n=h.cloneObject(n),n.url=n.cleanUrl||n.url),n},h.getIdByState=function(e){var t=h.extractId(e.url),n;if(!t){n=h.getStateString(e);if(typeof h.stateToId[n]!="undefined")t=h.stateToId[n];else if(typeof h.store.stateToId[n]!="undefined")t=h.store.stateToId[n];else{for(;;){t=(new Date).getTime()+String(Math.random()).replace(/\D/g,"");if(typeof h.idToState[t]=="undefined"&&typeof h.store.idToState[t]=="undefined")break}h.stateToId[n]=t,h.idToState[t]=e}}return t},h.normalizeState=function(e){var t,n;if(!e||typeof e!="object")e={};if(typeof e.normalized!="undefined")return e;if(!e.data||typeof e.data!="object")e.data={};return t={},t.normalized=!0,t.title=e.title||"",t.url=h.getFullUrl(e.url?e.url:h.getLocationHref()),t.hash=h.getShortUrl(t.url),t.data=h.cloneObject(e.data),t.id=h.getIdByState(t),t.cleanUrl=t.url.replace(/\??\&_suid.*/,""),t.url=t.cleanUrl,n=!h.isEmptyObject(t.data),(t.title||n)&&h.options.disableSuid!==!0&&(t.hash=h.getShortUrl(t.url).replace(/\??\&_suid.*/,""),/\?/.test(t.hash)||(t.hash+="?"),t.hash+="&_suid="+t.id),t.hashedUrl=h.getFullUrl(t.hash),(h.emulated.pushState||h.bugs.safariPoll)&&h.hasUrlDuplicate(t)&&(t.url=t.hashedUrl),t},h.createStateObject=function(e,t,n){var r={data:e,title:t,url:n};return r=h.normalizeState(r),r},h.getStateById=function(e){e=String(e);var n=h.idToState[e]||h.store.idToState[e]||t;return n},h.getStateString=function(e){var t,n,r;return t=h.normalizeState(e),n={data:t.data,title:e.title,url:e.url},r=l.stringify(n),r},h.getStateId=function(e){var t,n;return t=h.normalizeState(e),n=t.id,n},h.getHashByState=function(e){var t,n;return t=h.normalizeState(e),n=t.hash,n},h.extractId=function(e){var t,n,r,i;return e.indexOf("#")!=-1?i=e.split("#")[0]:i=e,n=/(.*)\&_suid=([0-9]+)$/.exec(i),r=n?n[1]||e:e,t=n?String(n[2]||""):"",t||!1},h.isTraditionalAnchor=function(e){var t=!/[\/\?\.]/.test(e);return t},h.extractState=function(e,t){var n=null,r,i;return t=t||!1,r=h.extractId(e),r&&(n=h.getStateById(r)),n||(i=h.getFullUrl(e),r=h.getIdByUrl(i)||!1,r&&(n=h.getStateById(r)),!n&&t&&!h.isTraditionalAnchor(e)&&(n=h.createStateObject(null,null,i))),n},h.getIdByUrl=function(e){var n=h.urlToId[e]||h.store.urlToId[e]||t;return n},h.getLastSavedState=function(){return h.savedStates[h.savedStates.length-1]||t},h.getLastStoredState=function(){return h.storedStates[h.storedStates.length-1]||t},h.hasUrlDuplicate=function(e){var t=!1,n;return n=h.extractState(e.url),t=n&&n.id!==e.id,t},h.storeState=function(e){return h.urlToId[e.url]=e.id,h.storedStates.push(h.cloneObject(e)),e},h.isLastSavedState=function(e){var t=!1,n,r,i;return h.savedStates.length&&(n=e.id,r=h.getLastSavedState(),i=r.id,t=n===i),t},h.saveState=function(e){return h.isLastSavedState(e)?!1:(h.savedStates.push(h.cloneObject(e)),!0)},h.getStateByIndex=function(e){var t=null;return typeof e=="undefined"?t=h.savedStates[h.savedStates.length-1]:e<0?t=h.savedStates[h.savedStates.length+e]:t=h.savedStates[e],t},h.getCurrentIndex=function(){var e=null;return h.savedStates.length<1?e=0:e=h.savedStates.length-1,e},h.getHash=function(e){var t=h.getLocationHref(e),n;return n=h.getHashByUrl(t),n},h.unescapeHash=function(e){var t=h.normalizeHash(e);return t=decodeURIComponent(t),t},h.normalizeHash=function(e){var t=e.replace(/[^#]*#/,"").replace(/#.*/,"");return t},h.setHash=function(e,t){var n,i;return t!==!1&&h.busy()?(h.pushQueue({scope:h,callback:h.setHash,args:arguments,queue:t}),!1):(h.busy(!0),n=h.extractState(e,!0),n&&!h.emulated.pushState?h.pushState(n.data,n.title,n.url,!1):h.getHash()!==e&&(h.bugs.setHash?(i=h.getPageUrl(),h.pushState(null,null,i+"#"+e,!1)):r.location.hash=e),h)},h.escapeHash=function(t){var n=h.normalizeHash(t);return n=e.encodeURIComponent(n),h.bugs.hashEscape||(n=n.replace(/\%21/g,"!").replace(/\%26/g,"&").replace(/\%3D/g,"=").replace(/\%3F/g,"?")),n},h.getHashByUrl=function(e){var t=String(e).replace(/([^#]*)#?([^#]*)#?(.*)/,"$2");return t=h.unescapeHash(t),t},h.setTitle=function(e){var t=e.title,n;t||(n=h.getStateByIndex(0),n&&n.url===e.url&&(t=n.title||h.options.initialTitle));try{r.getElementsByTagName("title")[0].innerHTML=t.replace("<","&lt;").replace(">","&gt;").replace(" & "," &amp; ")}catch(i){}return r.title=t,h},h.queues=[],h.busy=function(e){typeof e!="undefined"?h.busy.flag=e:typeof h.busy.flag=="undefined"&&(h.busy.flag=!1);if(!h.busy.flag){u(h.busy.timeout);var t=function(){var e,n,r;if(h.busy.flag)return;for(e=h.queues.length-1;e>=0;--e){n=h.queues[e];if(n.length===0)continue;r=n.shift(),h.fireQueueItem(r),h.busy.timeout=o(t,h.options.busyDelay)}};h.busy.timeout=o(t,h.options.busyDelay)}return h.busy.flag},h.busy.flag=!1,h.fireQueueItem=function(e){return e.callback.apply(e.scope||h,e.args||[])},h.pushQueue=function(e){return h.queues[e.queue||0]=h.queues[e.queue||0]||[],h.queues[e.queue||0].push(e),h},h.queue=function(e,t){return typeof e=="function"&&(e={callback:e}),typeof t!="undefined"&&(e.queue=t),h.busy()?h.pushQueue(e):h.fireQueueItem(e),h},h.clearQueue=function(){return h.busy.flag=!1,h.queues=[],h},h.stateChanged=!1,h.doubleChecker=!1,h.doubleCheckComplete=function(){return h.stateChanged=!0,h.doubleCheckClear(),h},h.doubleCheckClear=function(){return h.doubleChecker&&(u(h.doubleChecker),h.doubleChecker=!1),h},h.doubleCheck=function(e){return h.stateChanged=!1,h.doubleCheckClear(),h.bugs.ieDoubleCheck&&(h.doubleChecker=o(function(){return h.doubleCheckClear(),h.stateChanged||e(),!0},h.options.doubleCheckInterval)),h},h.safariStatePoll=function(){var t=h.extractState(h.getLocationHref()),n;if(!h.isLastSavedState(t))return n=t,n||(n=h.createStateObject()),h.Adapter.trigger(e,"popstate"),h;return},h.back=function(e){return e!==!1&&h.busy()?(h.pushQueue({scope:h,callback:h.back,args:arguments,queue:e}),!1):(h.busy(!0),h.doubleCheck(function(){h.back(!1)}),p.go(-1),!0)},h.forward=function(e){return e!==!1&&h.busy()?(h.pushQueue({scope:h,callback:h.forward,args:arguments,queue:e}),!1):(h.busy(!0),h.doubleCheck(function(){h.forward(!1)}),p.go(1),!0)},h.go=function(e,t){var n;if(e>0)for(n=1;n<=e;++n)h.forward(t);else{if(!(e<0))throw new Error("History.go: History.go requires a positive or negative integer passed.");for(n=-1;n>=e;--n)h.back(t)}return h};if(h.emulated.pushState){var v=function(){};h.pushState=h.pushState||v,h.replaceState=h.replaceState||v}else h.onPopState=function(t,n){var r=!1,i=!1,s,o;return h.doubleCheckComplete(),s=h.getHash(),s?(o=h.extractState(s||h.getLocationHref(),!0),o?h.replaceState(o.data,o.title,o.url,!1):(h.Adapter.trigger(e,"anchorchange"),h.busy(!1)),h.expectedStateId=!1,!1):(r=h.Adapter.extractEventData("state",t,n)||!1,r?i=h.getStateById(r):h.expectedStateId?i=h.getStateById(h.expectedStateId):i=h.extractState(h.getLocationHref()),i||(i=h.createStateObject(null,null,h.getLocationHref())),h.expectedStateId=!1,h.isLastSavedState(i)?(h.busy(!1),!1):(h.storeState(i),h.saveState(i),h.setTitle(i),h.Adapter.trigger(e,"statechange"),h.busy(!1),!0))},h.Adapter.bind(e,"popstate",h.onPopState),h.pushState=function(t,n,r,i){if(h.getHashByUrl(r)&&h.emulated.pushState)throw new Error("History.js does not support states with fragement-identifiers (hashes/anchors).");if(i!==!1&&h.busy())return h.pushQueue({scope:h,callback:h.pushState,args:arguments,queue:i}),!1;h.busy(!0);var s=h.createStateObject(t,n,r);return h.isLastSavedState(s)?h.busy(!1):(h.storeState(s),h.expectedStateId=s.id,p.pushState(s.id,s.title,s.url),h.Adapter.trigger(e,"popstate")),!0},h.replaceState=function(t,n,r,i){if(h.getHashByUrl(r)&&h.emulated.pushState)throw new Error("History.js does not support states with fragement-identifiers (hashes/anchors).");if(i!==!1&&h.busy())return h.pushQueue({scope:h,callback:h.replaceState,args:arguments,queue:i}),!1;h.busy(!0);var s=h.createStateObject(t,n,r);return h.isLastSavedState(s)?h.busy(!1):(h.storeState(s),h.expectedStateId=s.id,p.replaceState(s.id,s.title,s.url),h.Adapter.trigger(e,"popstate")),!0};if(s){try{h.store=l.parse(s.getItem("History.store"))||{}}catch(m){h.store={}}h.normalizeStore()}else h.store={},h.normalizeStore();h.Adapter.bind(e,"unload",h.clearAllIntervals),h.saveState(h.storeState(h.extractState(h.getLocationHref(),!0))),s&&(h.onUnload=function(){var e,t,n;try{e=l.parse(s.getItem("History.store"))||{}}catch(r){e={}}e.idToState=e.idToState||{},e.urlToId=e.urlToId||{},e.stateToId=e.stateToId||{};for(t in h.idToState){if(!h.idToState.hasOwnProperty(t))continue;e.idToState[t]=h.idToState[t]}for(t in h.urlToId){if(!h.urlToId.hasOwnProperty(t))continue;e.urlToId[t]=h.urlToId[t]}for(t in h.stateToId){if(!h.stateToId.hasOwnProperty(t))continue;e.stateToId[t]=h.stateToId[t]}h.store=e,h.normalizeStore(),n=l.stringify(e);try{s.setItem("History.store",n)}catch(i){if(i.code!==DOMException.QUOTA_EXCEEDED_ERR)throw i;s.length&&(s.removeItem("History.store"),s.setItem("History.store",n))}},h.intervalList.push(a(h.onUnload,h.options.storeInterval)),h.Adapter.bind(e,"beforeunload",h.onUnload),h.Adapter.bind(e,"unload",h.onUnload));if(!h.emulated.pushState){h.bugs.safariPoll&&h.intervalList.push(a(h.safariStatePoll,h.options.safariPollInterval));if(i.vendor==="Apple Computer, Inc."||(i.appCodeName||"")==="Mozilla")h.Adapter.bind(e,"hashchange",function(){h.Adapter.trigger(e,"popstate")}),h.getHash()&&h.Adapter.onDomLoad(function(){h.Adapter.trigger(e,"hashchange")})}},(!h.options||!h.options.delayInit)&&h.init()}(window)
ProgressBar = function () {
    this.numberOfCards = 0;
    this.startingValue = 8;
    this.numberOfIcons = 5;
    this.offset = 1.2;
};

ProgressBar.prototype.setNumberOfCards = function (numberOfCards) {
    this.numberOfCards = numberOfCards;
};

ProgressBar.prototype.printProgress = function (currentCardIndex) {

    try {
        currentValue = this.startingValue + Math.round(currentCardIndex / this.numberOfCards * 100);
        threshold = (100/this.numberOfIcons);

        for (i = 1; i <= this.numberOfIcons; i++) {

            if (i*threshold <= currentValue*this.offset) {
                $('.progress .row').children().eq(i).find('.step').addClass('complete');
            }
        }
        $('.progress-complete').css({'width': (currentValue) + '%'});
    } catch (err) {
    }
};

ProgressBar.prototype.start = function () {
    $('.progress-complete').css({'width': (this.startingValue + '%')});
};
UserRequestsValidations = function (data) {
    this.formPrefix = data.form_prefix;
    this.dateFromId = data.date_from_id;
    this.dateToId = data.date_to_id;
    this.dateId = data.date_id;
    this.rangeOfPrices = data.range_of_prices_object;
    this.canShowPriceAndNumberOfDiners = data.can_show_price_and_number_of_diners;
    this.country = data.country;
    this.previousCountry = data.country;
    this.phoneMinLength = 7;
    this.isDefaultCampaign = data.is_default_campaign;
    this.dateNotAvailable = data.date_not_available;
    this.dateNotValid = data.date_not_valid;
    this.constants = data.constants;
    this.cards = data.cards;
};

UserRequestsValidations.prototype.reloadRates = function () {

    if (window.country != window.previousCountry && this.canShowPriceAndNumberOfDiners) {

        if (this.rangeOfPrices.reloadRatesByCountry(window.country)) {
            window.previousCountry = window.country;
        } else {
            caller.setErrorMessage(userrequests_valid_address_not_found);
            return false;
        }
    }
};

UserRequestsValidations.prototype.setCardByRuleIndex = function (args, index) {
    caller = this.getCallerClassObject(args);
    try {

        callerOptions = caller.getOptions();
        if ('rules' in callerOptions) {

            var id = callerOptions['rules'][index];
            var nextIndex = this.cards.get(id).getIndex();

            this.cards.setNextIndex(nextIndex);
        }
    } catch (error) {
    }
    return true;
};

UserRequestsValidations.prototype.getDaysBetweenDates = function (dateFrom, dateTo) {
    start = Math.floor(dateFrom.getTime() / (3600 * 24 * 1000)); //days as integer from..
    end = Math.floor(dateTo.getTime() / (3600 * 24 * 1000)); //days as integer from..
    return (end - start);
};

UserRequestsValidations.prototype.getCallerClassObject = function (args) {
    return args['caller'];
};



UserRequestsValidations.prototype.validateDateFrom = function (args) {
    caller = this.getCallerClassObject(args);
    dateString = $('#' + this.formPrefix + '_' + 'usereqDateFrom').val();
    if (!(new Date(dateString).toString() !== "Invalid Date")) {
        caller.setErrorMessage(this.dateNotValid);
        return false;
    }

    var now = new Date();
    var selected = new Date(dateString);
    var minDate = this.getDaysBetweenDates(now, selected);

    $('#datepicker_usereqDateTo').datepicker("option", "minDate", minDate);
    return true;
};

UserRequestsValidations.prototype.validateDateTo = function (args) {
    var dateFrom = new Date($('#' + this.formPrefix + '_' + this.dateFromId).val());
    var dateTo = new Date($('#' + this.formPrefix + '_' + this.dateToId).val());

    if (dateFrom.getTime() > dateTo.getTime()) {
        caller = this.getCallerClassObject(args);
        caller.setErrorMessage(js_date_to_must_be_later_to_from);
        return false;
    }
    return true;
};


UserRequestsValidations.prototype.validateAddress = function (args) {

    caller = args['caller'];

    $useReqAddress = $('#' + this.formPrefix + '_' + 'usereqAddress');
    $useReqLongitude = $('#' + this.formPrefix + '_' + 'usereqLongitude');
    $useReqLatitude = $('#' + this.formPrefix + '_' + 'usereqLatitude');

    if (
        $useReqAddress.val().trim().length > 0 &&
        $useReqLongitude.val().trim().length > 0 &&
        $useReqLatitude.val().trim().length > 0
    ) {

        this.country = $('#' + this.formPrefix + '_' + 'couCountry').val();
        this.reloadRates();
        return true;

    } else {
        caller.setErrorMessage(js_address_not_found);
        $useReqAddress.focus();
        $useReqAddress.val('');
        $useReqAddress.attr('placeholder', js_address_placeholder);
        $('#card_address').find('h2').text(js_address_label);
        return false;
    }
};

UserRequestsValidations.prototype.validateUserDetails = function (args) {

    caller = args['caller'];
    caller.setErrorMessage('');

    var userFullnameObject = $('#' + this.formPrefix + '_' + 'usereqUserFullname');
    if (userFullnameObject.val() == '') {
        caller.setErrorMessage(js_valid_empty_name);
        userFullnameObject.focus();
        return false;
    }

    var userEmailObject = $('#' + this.formPrefix + '_' + 'usereqUserEmail');
    if (userEmailObject.val() == '' || !(/^.+@.+\..+$/.test(userEmailObject.val()))) {
        caller.setErrorMessage(js_valid_empty_email);
        userEmailObject.focus();
        return false;
    }

    var userPhoneObject = $('#' + this.formPrefix + '_' + 'usereqUserPhone');
    if (userPhoneObject.val() == '' || !(/^[0-9\+\- ]*$/.test(userPhoneObject.val())) || (userPhoneObject.val() + '').length < this.phoneMinLength) {
        caller.setErrorMessage(js_valid_empty_phone);
        userPhoneObject.focus();
        return false;
    }

    return true;
};



UserRequestsValidations.prototype.validateDate = function (args) {

    caller = this.getCallerClassObject(args);
    callerOptions = caller.getOptions();

    var minRequestDays = 5;
    if ('params' in callerOptions && 'min_request_days' in callerOptions['params']) {
        minRequestDays = callerOptions['params']['min_request_days'];
    }

    var calendarDate = new Date($('#' + this.formPrefix + '_' + this.dateId).val());
    var now = new Date();
    var currentDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 0, 0, 0, 0);

    if (currentDate.getTime() > calendarDate.getTime()) {
        caller = this.getCallerClassObject(args);
        caller.setErrorMessage(js_date_must_be_later_to_today);
        return false;
    } else {

        var timeDiff = Math.abs(currentDate - calendarDate);
        var diffDays = Math.ceil(timeDiff / ( 1000 * 60 * 60 * 24 ));

        if (diffDays < minRequestDays) {
            userrequests_date_is_too_early = userrequests_date_is_too_early.split(5).join(minRequestDays);
            caller.setErrorMessage(userrequests_date_is_too_early);
            return false;
        }
    }

    ruleIndex = 0;
    $("input[type='radio'][name='" + this.formPrefix + "[occtypId]']").val(null);

    if (this.canShowPriceAndNumberOfDiners) {

        var day = calendarDate.getDate();
        var month = calendarDate.getMonth() + 1;

        if (( month == 12 && (day == 24 || day == 25 || day == 31) ) || (month == 1 && day == 1)) {

            if (this.isDefaultCampaign == '1') {
                $('input[name="' + this.formPrefix + '[occtypId]"]').each(function () {
                    $(this).val($(this).data('value'))
                });
                ruleIndex = 1;
            } else {
                caller.setErrorMessage(this.dateNotAvailable);
                return false;
            }
        }
    }

    this.setRangeOfPrices('default');
    this.setCardByRuleIndex(args, ruleIndex);
    return true;
};

UserRequestsValidations.prototype.setRangeOfPrices = function (key) {
    if (this.canShowPriceAndNumberOfDiners) {
        this.rangeOfPrices.setRangeOfPrices(key);
    }
};

Calendar = function (data) {
    this.wrapperId = data.wrapper_id;
    this.formPrefix = data.form_prefix;
    this.id = data.id;
    this.config = data.config;
};

Calendar.prototype.getDefaultConfiguration = function () {
    var dateToday = new Date();
    var me = this;
    return defaultConfiguration = {
        dayNamesMin: window.calendar[window.locale].dayNamesMin,
        dayNames: window.calendar[window.locale].dayNames,
        monthNamesMin: window.calendar[window.locale].monthNamesMin,
        monthNames: window.calendar[window.locale].monthNames,
        firstDay: 1,
        nextText: "",
        prevText: "",
        stepMonths: 3,
        minDate: dateToday,
        numberOfMonths: 3,
        altField: '#' + this.formPrefix + '_' + this.id,
        altFormat: 'yy-mm-dd',
        defaultDate: dateToday,
        onSelect: function () {
            $('#cards').trigger('dateSelected');
            userRequestWizard.manageCard();
        },
        beforeShowDay: function (date) {
            var holidays = me.buildHolidaysArray(); // ['2016-12-24', '2016-12-25', '2016-12-31', '2017-01-01']; // , '2016-01-05', '2016-01-06'];
            // var holidays = [];
            if ($.inArray($.datepicker.formatDate('yy-mm-dd', date), holidays) > -1) {
                return [true, "ui-datepicker-special-day", common_holiday_title_text]; // "Día Festivo"
            } else {
                return [true, "no-festivo", common_notholiday_title_text]; // "Día no festivo"
            }

        }
    };
};

Calendar.prototype.buildHolidaysArray = function() {
    var currentYear = new Date().getFullYear();
    var monthsDays = ['-12-24', '-12-25', '-12-31', '-01-01'];
    holidays = [];
    for (i = 0; i < 2; i++) {
        currentYear += i;
        for (j = 0; j < monthsDays.length; j++) {
            holidays.push(currentYear + monthsDays[j]);
        }
    }
    return holidays;
};

Calendar.prototype.datePickerResize = function () {

    var that = this;

    function manageCalendarSize(){
        if ($(window).innerWidth() < 768) {
            $("#datepicker_" + that.id).datepicker("option", "numberOfMonths", 1);
            $("#datepicker_" + that.id).datepicker("option", "stepMonths", 1);
        } else {
            $("#datepicker_" + that.id).datepicker("option", "numberOfMonths", 3);
            $("#datepicker_" + that.id).datepicker("option", "stepMonths", 3);
        }
    }

    //Manage size on calendar load
    manageCalendarSize();

    //@TODO Manage size on resize window
    // $(window).resize(manageCalendarSize());

};

Calendar.prototype.start = function (config) {
    config = (config == null) ? this.getDefaultConfiguration() : config;
    $("#datepicker_" + this.id).datepicker(config);
    this.datePickerResize();
};



MealSlots = function (data) {
    this.wrapperId = data.wrapper_id;
    this.formPrefix = data.form_prefix;
    this.dateFromId = data.date_from_id;
    this.dateToId = data.date_to_id;
    this.container = data.container;
    this.dateSeparator = '../index.html';
};

MealSlots.prototype.getDateParts = function (dateObject) {
    var day = dateObject.getDate();
    var day2 = ("0" + day.toString()).slice(-2);

    var month = dateObject.getMonth() + 1;
    var month2 = ("0" + month.toString()).slice(-2);

    var year = dateObject.getFullYear().toString();
    var year2 = year.slice(-2);

    return {'d': day2, 'm': month2, 'Y': year, 'y': year2};
};

MealSlots.prototype.formatDate = function (dateObject, format, dateSeparator) {
    if (dateSeparator === undefined) dateSeparator = this.dateSeparator;
    var d = this.getDateParts(dateObject);
    var dateString = '';
    for (var i = 0; i < format.length; i++) {
        dateString += (dateString == '') ? '' : dateSeparator;
        dateString += d[format[i]];
    }
    return dateString;
};

MealSlots.prototype.addDays = function (dateObject, days) {
    return new Date(dateObject.getTime() + days * 86400000);
};

MealSlots.prototype.getDaysBetweenDates = function () {
    var dateFrom = this.getDateFromString(this.dateFromId);
    var dateTo = this.getDateFromString(this.dateToId);

    start = Math.floor(dateFrom.getTime() / (3600 * 24 * 1000)); //days as integer from..
    end = Math.floor(dateTo.getTime() / (3600 * 24 * 1000)); //days as integer from..
    return (end - start);
};

MealSlots.prototype.getDateFromString = function (suffixId) {
    var dateString = $('#' + this.formPrefix + '_' + suffixId).val();
    return new Date(dateString);
};

MealSlots.prototype.addTagForm = function ($collectionHolder, $newLinkLi, dateObject) {
    // Get the data-prototype explained earlier
    var prototype = $collectionHolder.data('prototype');

    // get the new index
    var index = $collectionHolder.data('index');

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype.split('__name__').join(index); // prototype.replace(/___name___/g, index);

    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the "Add a tag" link li
    var $newFormLi = $('<div></div>').append(newForm);
    $newLinkLi.before($newFormLi);

    dateIso = this.formatDate(dateObject, 'Ymd', '-');
    dateDayMonth = this.formatDate(dateObject, 'dm');

    $('label[for="frontend_userrequests_type_usereqMealSlots_' + index + '_date"]').text(dateDayMonth);
    $('#frontend_userrequests_type_usereqMealSlots_' + index + '_date').val(dateIso);

    $('label[for="frontend_userrequests_type_usereqMealSlots_' + index + '_breakfast_0"]').html('&nbsp;');
    $('label[for="frontend_userrequests_type_usereqMealSlots_' + index + '_lunch_0"]').html('&nbsp;');
    $('label[for="frontend_userrequests_type_usereqMealSlots_' + index + '_dinner_0"]').html('&nbsp;');

    // console.log($('#frontend_userrequests_type_usereqMealSlots_' + index + '_breakfast_0').attr('id'));
    // $('#frontend_userrequests_type_usereqMealSlots_' + index + '_breakfast_0').data('previous-checked', true);
    // $('#frontend_userrequests_type_usereqMealSlots_' + index + '_breakfast_0').prop('checked', true);
};

MealSlots.prototype.resetMealSlotContainer = function () {
    $collectionHolder = $(this.container); // ul.mealslots for example
    $collectionHolder.children().remove();
};

MealSlots.prototype.start = function () {

    var that = this;
    $('#' + this.wrapperId).bind('dateSelected', function (event, data) {
        // var dateFrom = $('#' + that.formPrefix + '_' +  that.dateFromId).val();
        // var dateTo = $('#' + that.formPrefix + '_' +  that.dateToId).val();

        var dateFrom = that.getDateFromString(that.dateFromId);
        var dateTo = that.getDateFromString(that.dateToId);

        if (dateFrom.getTime() <= dateTo.getTime()) {

            // reset the MealSlot Container
            that.resetMealSlotContainer();

            var $newLinkLi = $('<div class="mealslot"></div>');

            // Get the ul that holds the collection of tags
            $collectionHolder = $('div.mealslots');

            if ($collectionHolder !== undefined) {

                for (var i = 0, count = that.getDaysBetweenDates(); i <= count; i++) {
                    $collectionHolder.append($newLinkLi);
                    $collectionHolder.data('index', i);

                    // add a new tag form (see next code block)
                    calculatedDate = that.addDays(dateFrom, i);
                    that.addTagForm($collectionHolder, $newLinkLi, calculatedDate);
                }
            }
        }
    });

};
UserRequestWizard = function (data) {

    this.cards = new Cards(data.wrapperId);

    this.reel = data.reel;
    this.initialCard = data.initialCard;

    this.defaultErrorMessage = data.defaultErrorMessage;

    this.statePushed = false;
    this.progressBar =  new ProgressBar();
};

UserRequestWizard.prototype.getCards = function () {
    return this.cards;
};

UserRequestWizard.prototype.buildWizard = function () {

    for (var i = 0; i < Object.keys(this.reel).length; i++) {
        var cardName = (Object.keys(this.reel))[i];
        var cardOptions = this.reel[cardName];

        if (Array.isArray(cardOptions) && 0 === cardOptions.length) {
            this.cards.add(cardName);
        } else {
            // console.log(cardOptions);
            this.cards.add(cardName, cardOptions);
        }

        card = this.cards.getCurrentCard();
        card.setErrorMessage();
    }
    this.cards.init(this.initialCard);

    this.progressBar.setNumberOfCards(this.cards.getLength());
    this.progressBar.start();
};


// Adds a State to History

UserRequestWizard.prototype.add2History = function (firstTime) {
    var params = {};

    try {
        if (location.search) {
            var parts = location.search.substring(1).split('&');

            for (var i = 0; i < parts.length; i++) {
                var nv = parts[i].split('=');
                if (!nv[0]) continue;
                params[nv[0]] = nv[1] || true;
            }
        }
    } catch (error) {
    }

    try {
        var currentCard = this.cards.getCurrentCard();

        var currentIndex = currentCard.getIndex();
        var currentId = currentCard.getId();

        this.statePushed = true;
       // queryString = '?card=' + currentId;

        if (firstTime === true) {
            History.replaceState( {'card_index': currentIndex}, null, queryString );
        } else {
            History.pushState( {'card_index': currentIndex}, null, queryString );
        }

        return true;
    } catch (err) {
        // consoleLog('error on add2History: ' + err);
    }
};

UserRequestWizard.prototype.doSubmitForm = function (event) {

    var currentCard = this.cards.getCurrentCard();
    if (currentCard.isValid()) {
        doLoader(true, userrequests_loader_text);
        $("#frontend_userrequests_type").submit();
        return true;
    } else {
        alert(currentCard.getErrorMessage());
        event.preventDefault();
        return false;
    }
};


UserRequestWizard.prototype.doOnPopState = function (event) {

    // Fixes double "click event"
    if (this.statePushed) {
        this.statePushed = false;
        return;
    }

    try {
        var State = History.getState();
        if (State == null) return;

        State = State.data;

        var card_index = State.card_index;

        this.cards.setNextIndex(card_index);
        this.cards.moveNext(event);

        this.progressBar.printProgress(card_index);

    } catch (err) {
        // consoleLog('error on doOnPopState: ' + err)
    }
};


UserRequestWizard.prototype.manageCard = function (event) {
    var currentCard = this.cards.getCurrentCard();

    if (currentCard.isValid($(this))) {
        this.cards.moveNext(event);
        this.add2History(false);
    } else {
        alert(currentCard.getErrorMessage());
    }

    this.progressBar.printProgress(this.cards.getCurrentCard().getIndex());
};


UserRequestWizard.prototype.start = function () {
    var that = this;

    // Init Cards
    this.buildWizard();

    // Add first card to history, it's a must
    this.statePushed = true;
    this.add2History(true);


    History.Adapter.bind(window, 'statechange', $.proxy(this.doOnPopState, this));

    // Wizard Interaction Manager
    $(document).on('click', 'button, a[href="#next"], input[type="radio"]', function (event) {

        if ($(event.target).attr('id') && $(event.target).attr('id').startsWith('frontend_userrequests_type_usereqMealSlots')) {
            if ($(event.target).data('previous-checked') === undefined) {
                newState = false;
            } else {
                newState = !$(event.target).data('previous-checked');
            }
            $(event.target).data('previous-checked', newState);
            $(event.target).prop('checked', newState);
            return true;
        }

        if (!$(event.target).is('input:radio')) {
            event.preventDefault();
        }
        that.manageCard(event);
    });

    $('form input').on('keypress', function(event) {

        if (event.which == 13) {

            if ($('#frontend_userrequests_type_usereqUserPhone').is(':focus')) {
                $('#userrequests_submit_button').click();
            } else if ($('#frontend_userrequests_type_usereqAddress').is(':focus')) {
                $("#card_address_next").focus();
            }
            event.preventDefault();
        }
    });

    $(document).on('click', '#userrequests_submit_button', function (event) {
        that.doSubmitForm(event);
    });
};

NumberOfDiners = function (data) {
    this.formPrefix = data.form_prefix;
};

NumberOfDiners.prototype.addDiner = function (control) {
    control.val((parseInt(control.val()) + 1));
};

NumberOfDiners.prototype.removeDiner = function (control) {
    currentValue = parseInt(control.val());
    if (currentValue > 0) control.val((currentValue - 1));
};

NumberOfDiners.prototype.getSuffix = function (control) {
    return control.parent().attr('id').toString().split('_')[1];
};

NumberOfDiners.prototype.eventListener = function () {
    var that = this;
    $('#diners_adults .increase, #diners_adolescents .increase, #diners_children .increase').on('click', function () {
        suffix = that.getSuffix($(this));
        that.addDiner($('#' + that.formPrefix + '_usereqNumberof' + suffix));
    });

    $('#diners_adults .decrease, #diners_adolescents .decrease, #diners_children .decrease').on('click', function () {
        suffix = that.getSuffix($(this));
        that.removeDiner($('#' + that.formPrefix + '_usereqNumberof' +  suffix));
    });
};

NumberOfDiners.prototype.start = function (control) {
    this.eventListener();
};
RangeOfPrices = function (data) {
    this.formPrefix = data.form_prefix;
    this.rangeOfPricesPerLocale = data.range_of_prices_per_locale;
    this.ajaxUrl = data.ajax_url;
    this.perPersonLabel = data.per_person_label;
    this.canShowPriceAndNumberOfDiners = data.can_show_price_and_number_of_diners;
};

RangeOfPrices.prototype.setRangeOfPrices = function (key) {

    var selected = $("input[type='radio'][name='" + this.formPrefix + "[range_of_diners]']:checked").val();

     console.log('-----------------');
     console.log(country);
     console.log(key);
     console.log(this.rangeOfPricesPerLocale);
     console.log(selected);
     console.log(this.rangeOfPricesPerLocale);
     console.log(this.rangeOfPricesPerLocale);
     console.log('-----------------');

    if (this.rangeOfPricesPerLocale !== undefined && !Array.isArray(this.rangeOfPricesPerLocale)) {

        range_of_prices = this.rangeOfPricesPerLocale[key][selected];
        for (i = 0; i < 3; i++) {

            var fieldName = 'input[name="' + this.formPrefix + '[range_of_prices]"][value="' + i + '"]';
            var $rangeOfPrincesInput = $(fieldName);
            $rangeOfPrincesInput.parent().find('.card-label-3').html(range_of_prices[i]);
            $rangeOfPrincesInput.parent().find('.card-label-4').html(this.perPersonLabel);
        }
    }

};

RangeOfPrices.prototype.getRangeOfPricesByIndex = function (key, range, index) {

    if (this.rangeOfPricesPerLocale !== undefined && !Array.isArray(this.rangeOfPricesPerLocale)) {
        return this.rangeOfPricesPerLocale[key][range][index];
    }
};

RangeOfPrices.prototype.setMinimiumRangeOfPrices = function () {

    for (i = 0; i <= 3; i++) {
        var price = this.getRangeOfPricesByIndex('default', i, 0);

        try {
            price = price.split('-')[0];
        } catch (err) {
        }

        $('#range_of_prices_info_from' + i).html(price);
    }
};

RangeOfPrices.prototype.reloadRatesByCountry = function (country) {

    response = false;
    var me = this;
    $.ajax({
        type: "GET",
        url: me.ajaxUrl,
        data: {
            action: 'load_default_rates',
            country: country
        },
        dataType: "json",
        cache: false,
        async: false,
        // DO  NOT WORK FOR sync calls => timeout: 2000, // sets timeout to 2 seconds
        beforeSend: function () {
            // doLoader(true);
        },
        success: function (response) {
            me.rangeOfPricesPerLocale = response.range_of_prices;
            // console.log(me.rangeOfPricesPerLocale);
            me.response = true;
            me.setMinimiumRangeOfPrices();
        },
        error: function (jxhr, textStatus, errorThrown) {
            response = false;
            // $("#loader").hide();
            // alert(error_message);
            // console.log(jxhr);
            // console.log(textStatus);
            // console.log(jxhr);
            //alert(errorThrown);
            //alert(errorThrown);
            me.response = false;
        },
        complete: function () {

        }
    });
    return response;
};

RangeOfPrices.prototype.start = function () {

    if (this.canShowPriceAndNumberOfDiners) {
        this.setMinimiumRangeOfPrices();
    }
};
$(document).ready(function () {

    var form_prefix = 'frontend_userrequests_type';
    var config = null;
    var dataDefault = {
        'wrapper_id': 'cards',
        'config': config,
        'form_prefix': form_prefix
    };

    var dataDate = {'id': 'usereqDate'};
    usereqDate = new Calendar(jQuery.extend(dataDefault, dataDate));
    usereqDate.start();

    var dataDateFrom = {'id': 'usereqDateFrom'};
    usereqDateFrom = new Calendar(jQuery.extend(dataDefault, dataDateFrom));
    usereqDateFrom.start();

    var dataDateTo = {'id': 'usereqDateTo'};
    usereqDateTo = new Calendar(jQuery.extend(dataDefault, dataDateTo));
    usereqDateTo.start();

    var dataMealSlots = {'date_from_id': 'usereqDateFrom', 'date_to_id': 'usereqDateTo', 'container': 'div.mealslots'};
    mealslots = new MealSlots(jQuery.extend(dataDefault, dataMealSlots));
    mealslots.start();

    initialCard = Object.keys(window.reel)[0];
    var dataWizard = {
        'wrapperId': 'wrapper_card_multiple',
        'reel': window.reel,
        'initialCard': initialCard,
        'defaultErrorMessage': js_option_required
    };
    userRequestWizard = new UserRequestWizard(dataWizard);
    userRequestWizard.start();


    var dataRangeOfPrices = {
        'range_of_prices_per_locale': window.range_of_prices_per_locale,
        'ajax_url': tac_frontend_userrequests_ajax,
        'per_person_label': userrequests_per_person_label,
        'can_show_price_and_number_of_diners': window.can_show_price_and_number_of_diners
    };
    rangeOfPrices = new RangeOfPrices(jQuery.extend(dataDefault, dataRangeOfPrices));
    rangeOfPrices.start();


    var dataValidations = {
        'date_from_id': 'usereqDateFrom',
        'date_to_id': 'usereqDateTo',
        'date_id': 'usereqDate',
        'range_of_prices_object': rangeOfPrices,
        'can_show_price_and_number_of_diners': window.can_show_price_and_number_of_diners,
        'country': window.country,
        'is_default_campaign': window.is_default_campaign,
        'date_not_available': userrequests_date_not_available,
        'date_not_valid': js_date_not_valid,
        'constants': {
            'christmas_default': OCCTYP_CHRISTMAS_DEFAULT,
            'christmas_catering': OCCTYP_CHRISTMAS_CATERING,
            'saintvalentine_catering': OCCTYP_SAINTVALENTINE_CATERING,
            'saintvalentine_default': OCCTYP_SAINTVALENTINE_DEFAULT
        },
        'cards': userRequestWizard.getCards()
    };
    userRequestsValidations = new UserRequestsValidations(jQuery.extend(dataDefault, dataValidations));

    numberOfDiners = new NumberOfDiners(dataDefault);
    numberOfDiners.start();

    // userRequestsAddress = new UserRequestsAddress(dataDefault);
    // userRequestsAddress.start();


    var dataUserRequestAddressManager = {
        'input_address_id': 'frontend_userrequests_type_usereqAddress',
        'longitude_id': 'frontend_userrequests_type_usereqLongitude',
        'latitude_id': 'frontend_userrequests_type_usereqLatitude',
        'country_id': 'frontend_userrequests_type_couCountry'

    };
    userRequestsAddressManager = new UserRequestsAddressManager(dataUserRequestAddressManager);
    userRequestsAddressManager.init();

});