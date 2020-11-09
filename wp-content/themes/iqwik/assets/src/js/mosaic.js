// window.addEvent('domready', function(){
//     RokSprocket.instances.mosaic = new RokSprocket.Mosaic();
// });
//
// window.addEvent('domready', function(){
//     RokSprocket.instances.mosaic.attach(354, '{"pages":2,"animations":["fade","scale","rotate"],"displayed":[537,538,539,540,541,542,543,544,664]}');
// });
jQuery(document).ready(function($) {
    $('.sprocket-mosaic-filter').on('click', '#tabs li', function(){
        let me = $(this),
            tab = me.data('mosaic-filterby');
        $('#tabs li.' + tab)
            .addClass('active')
            .siblings('.active')
            .removeClass('active');
        $('.mosaic-tabs #' + tab)
            .addClass('active')
            .siblings('.active')
            .removeClass('active');
    });
});
