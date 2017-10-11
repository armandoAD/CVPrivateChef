$(document).ready(function () {

    //NAVIGATION HANDLER - Navigation menu behaviour

    var mobileNav = $('#tac-navigation-menu'),
        menuOverlay = $('#open-menu-overlay'),
        navToggle = $('#tac-navigation-toggle');

    $('#tac-navigation-toggle, #open-menu-overlay').click(function () {

        mobileNav.toggleClass('navigation-open');
        menuOverlay.toggle();
        navToggle.toggleClass('toggle-on');

        if (mobileNav.hasClass('navigation-open')) {

            //Hide body scroll when menu is open
            $('body').css('overflow-y', 'hidden');

            //Hide menu
            mobileNav.animate({
                left: 0
            }, 250, 'swing');

            //Show overlay layer
            menuOverlay.animate({
                opacity: 1
            }, 250, 'swing');

        } else {
            //Back to scroll
            $('body').css('overflow-y', 'auto');

            //Open menu
            mobileNav.animate({
                left: -260
            }, 250, 'swing');

            //Animate overlay
            menuOverlay.animate({
                opacity: 0
            }, 250, 'swing');
        }

    });

    mobileNav.find('.menu-item:not(.location-selector) a:not([href="#"])').click(function () {
        if (mobileNav.hasClass('navigation-open')) {
            //Trigger click on toggle
            navToggle.trigger('click')
        }
    });

    //LOCATION COMPONENT - Choose your country, choose your language

    //Open modal with the right content
    function showLanguageSelector() {

        var selector = $('.location-selector__item');
        selector.on('click', function () {

            //Show modal
            $('#location-modal').fadeIn(300);
            $('body').css('overflow-y', 'hidden');
            mobileNav.addClass('location-selector-open');
            if ($(this).hasClass('location-selector__item--language')) {
                //Show languages list
                $('.location-list--language').show();

            } else {
                //Show countries list
                $('.location-list--country').show();
            }

        });
    }


    //Close modal when click on [data-close="true"] elements or list element
    var closeItem = $('#location-modal').find('[data-close="true"]');
    var locationItem = $('.location-list').find('li');

    function closeLocation() {
        $('#location-modal').fadeOut(300);
        $('.location-list').hide();

        //Add class to expand mobile navigation width: 100%
        mobileNav.removeClass('location-selector-open');

        $('body').css('overflow-y', 'auto');

        //Close mobile navigation when close location modal
        if(mobileNav.hasClass('navigation-open')){
            navToggle.trigger('click')
        }
    }

    //Detext when esc key has been pressed
    $(document).on('keyup', function (evt) {
        if (evt.keyCode == 27) {
            closeItem.trigger('click');
        }
    });


    closeItem.on('click', function() {
        closeLocation()
    });

    locationItem.on('click', function() {
        closeLocation()
    });


    // closeItem.on('click', closeLocation());
    // locationItem.on('click', closeLocation());



    closeLocation();
    showLanguageSelector();

});