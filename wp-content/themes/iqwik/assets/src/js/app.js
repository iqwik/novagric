jQuery(window).on('load',  function() {
    new JCaption('img.caption');

    let $feedback = jQuery('#feedback');
    if ($feedback.length) {
        $feedback.on('submit', function(e) {
            e.preventDefault();

            let form = jQuery(this),
                data = form.serialize();
            jQuery.ajax({
                url: window.wp_data.ajax_url,
                type: 'POST',
                data,
                success: function(response) {
                    if (response.status === 200) {
                        if (jQuery('#accordion-999-emailing').length) {
                            jQuery('#feedbackAccordionButton').trigger('click');
                        }
                        form[0].reset();
                    }
                }
            });
        });
    }
});
if (typeof RokBoxSettings == 'undefined') RokBoxSettings = {pc: '100'};

window.addEvent('domready', function() {
    new Fusion('ul.menutop', {
        effect: 'slide and fade',
        opacity:  1,
        hideDelay:  500,
        centered:  0,
        tweakInitial: {'x': -8, 'y': -10},
        tweakSubsequent: {'x':  -8, 'y':  -11},
        tweakSizes: {'width': 18, 'height': 20},
        menuFx: {duration:  300, transition: Fx.Transitions.Circ.easeOut}
    });
});

window.addEvent('domready', function(){
    document.getElements('[data-rt-menu-mobile]').addEvent('change', function(){
        window.location.href = this.value;
    });
});
