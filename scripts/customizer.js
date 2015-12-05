/**
* Theme Customizer enhancements for a better user experience
*
* Contains handlers to make Theme Customizer preview reload changes asynchronously
*/
(function ($) {

// Update site background color.
wp.customize('background_color', function (value) {value.bind(function (newval) { $('body').css('background-color', newval); }); });
})
(jQuery);
