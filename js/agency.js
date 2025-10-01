// Agency Theme JavaScript

(function($) {
    "use strict"; // Start of use strict

    /**
     * @summary Handles page scrolling for anchor links.
     * @description Binds a click event to elements with the 'page-scroll' class.
     * When clicked, it smoothly animates the page to the target anchor.
     * @param {Event} event - The click event object.
     */
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    /**
     * @summary Initializes the Bootstrap scrollspy feature.
     * @description Highlights the navigation items as the user scrolls through different sections of the page.
     */
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    /**
     * @summary Closes the responsive navigation menu on item click.
     * @description When a link inside the collapsible navbar is clicked, this function
     * triggers a click on the navbar toggle button if it's visible, effectively closing the menu.
     */
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    /**
     * @summary Initializes the Bootstrap affix plugin for the main navigation.
     * @description Makes the main navigation bar stick to the top of the screen
     * after scrolling down 100 pixels.
     */
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

})(jQuery); // End of use strict