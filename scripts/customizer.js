(function ($) {
  wp.customize('background_color',
        function (value) {
            value.bind(function (newval) {
                $('body')
                    .css('background-color',
                        newval
                        );
            });
        });
})
(jQuery);

/**
 * Theme Customizer enhancements for a better user experience
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously
 */

// Update site background color.

// Trivial
