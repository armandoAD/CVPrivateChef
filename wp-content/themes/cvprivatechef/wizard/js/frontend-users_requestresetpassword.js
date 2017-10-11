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
// Notes:
// rule_message_field_minlength         => "Debe tener 2 o más caracteres"
// rule_message_phone_minlength         => "Debe insertar al menos %min_phone_length% dígitos"
// rule_message_username_required       => "Nombre de Usuario requerido"
// rule_message_firstname_required      => "Nombre requerido"
// rule_message_lastname_required       => "Apellidos requeridos"
// rule_message_phone_required          => "Teléfono requerido"
// rule_message_phone_number            => "El teléfono insertado no es válido"
// rule_message_email_required          => "E-mail requerido"
// rule_message_email_email             => "E-mail no válido"
// rule_message_password_required       => "Contraseña requerida"
// rule_message_password_minlength      => "Debe tener 6 o más caracteres"
// rule_message_option_required         => "Debe marcar una opción"
// rule_message_address_required        => "Dirección requerida"
// rule_message_address_minlength       => "La dirección debe tener al menos 2 caracteres"
// rule_message_text_required           => "Campo requerido"

// Custom Length/Message for phone number field based on locale
// var min_phone_length    = phone_min_lengths[ locale ];
// var rule_message_phone_minlength = rule_message_phone_minlength;

rule_field_phone = 7;

rule_field_username = {required: true, minlength: 2};
rule_field_firstname = rule_field_username; // { required: true, minlength: 2 };
rule_field_lastname = {required: true, minlength: 2};
rule_field_phone = {required: true, minlength: rule_field_phone, number: true};
rule_field_email = {required: true, email: true};
rule_field_password = {required: true, minlength: 6};
rule_field_option = {required: true};
rule_field_address = rule_field_username; // { required: true, minlength: 2 };
rule_field_text = {required: true, minlength: 2};     // General

rule_message_username = {required: rule_message_username_required, minlength: rule_message_field_minlength};
rule_message_firstname = {required: rule_message_firstname_required, minlength: rule_message_field_minlength};
rule_message_lastname = {required: rule_message_lastname_required, minlength: rule_message_field_minlength};
rule_message_phone = {
    required: rule_message_phone_required,
    minlength: rule_message_phone_minlength,
    number: rule_message_phone_number
};
rule_message_email = {required: rule_message_email_required, email: rule_message_email_email};
rule_message_password = {required: rule_message_password_required, minlength: rule_message_password_minlength};
rule_message_option = {required: rule_message_option_required};
rule_message_address = {required: rule_message_address_required, minlength: rule_message_address_minlength};
rule_message_text = {required: rule_message_text_required, minlength: rule_message_field_minlength};

$(document).ready(function () {

    //LOGIN VALIDATION
    $('#form_users_sign_in').validate({
        errorElement: 'p',
        errorClass: 'error',
        errorPlacement: function (error, element) {
            $(element).parent().find('.form-error-message').append(error);
        },
        rules: {
            'form_users_sign_in[use_email]': rule_field_username,
            'form_users_sign_in[use_password]': rule_field_password
        },
        messages: {
            'form_users_sign_in[use_email]': rule_message_username,
            'form_users_sign_in[use_password]': rule_message_password
        },
        highlight: function (element, errorClass) {
            $(element).addClass(errorClass);
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        }

    });

    //NEW USER VALIDATION
    $('#form_users_new_user').validate({
        errorElement: 'p',
        errorClass: 'error',
        errorPlacement: function (error, element) {
            $(element).parent().find('.form-error-message').append(error);
        },
        rules: {
            'form_users_new_user[use_firstname]': rule_field_firstname,
            'form_users_new_user[use_lastname]': rule_field_lastname,
            'form_users_new_user[use_phone]': rule_field_phone,
            'form_users_new_user[use_email]': rule_field_email,
            'form_users_new_user[use_password]': rule_field_password
        },
        messages: {

            'form_users_new_user[use_firstname]': rule_message_firstname,
            'form_users_new_user[use_lastname]': rule_message_lastname,
            'form_users_new_user[use_phone]': rule_message_phone,
            'form_users_new_user[use_email]': rule_message_email,
            'form_users_new_user[use_password]': rule_message_password
        },
        highlight: function (element, errorClass) {
            $(element).addClass(errorClass);
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        }

    });

    //REQUEST RESET PASSWORD VALIDATION
    $('#form_users_requestresetpassword').validate({
        errorElement: 'p',
        errorClass: 'error',
        errorPlacement: function (error, element) {
            $(element).parent().find('.form-error-message').append(error);
        },
        rules: {
            'form_users_requestresetpassword[use_email]': rule_field_email
        },
        messages: {
            'form_users_requestresetpassword[use_email]': rule_message_email
        },
        highlight: function (element, errorClass) {
            $(element).addClass(errorClass);
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        }

    });

    //RESET PASSWORD VALIDATION
    $('#form_users_resetpassword').validate({
        errorElement: 'p',
        errorPlacement: function (error, element) {
            $(element).parent().find('.form-error-message').append(error);
        },
        rules: {
            'form_users_resetpassword[use_password]': {
                required: true,
                minlength: 6
            },
            'form_users_resetpassword[use_password2]': {
                equalTo: '#form_users_resetpassword_use_password'
            }
        },
        messages: {
            'form_users_resetpassword[use_password]': {
                required: rule_message_password_required,
                minlength: rule_message_password_minlength
            },
            'form_users_resetpassword[use_password2]': {
                required: rule_message_password_required,
                minlength: rule_message_password_minlength,
                equalTo: rule_message_password_nomatch
            }
        },
        highlight: function (element, errorClass) {
            $(element).addClass(errorClass);
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        }

    });


});