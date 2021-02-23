$(function () {

    $('[data-class="accordion-item"]').USER_Accordion();

});

(function ($, window, document, undefined) {

    var name = 'Accordion';

    function Accordion(element, index, options) {
        this.$el = $(element);
        this.options = $.extend({}, $.USER.fn[name].defaults, options);
        this.init();
    }

    Accordion.prototype = {

        name: name,

        init: function () {

            var self = this;

            this.$toggle = this.$el.find('[data-class="accordion-toggle"]');
            this.$reveal = this.$el.find('[data-class="accordion-reveal"]');

            this.$toggle.on('click', function (e) {
                e.preventDefault();

                self.$reveal.slideToggle(200, function () {
                    self.$el.toggleClass('accordion__active')
                });
            });
        }
    };

    $.USER.fn.pluginGenerator(Accordion);

})
(jQuery, window, document);
