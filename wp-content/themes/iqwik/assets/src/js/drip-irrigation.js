
window.addEvent('domready', function(){
    RokSprocket.instances.slideshow = new RokSprocket.Slideshow();
});
window.addEvent('domready', function(){
    RokSprocket.instances.slideshow.attach(370, '{"animation":"fromTop","autoplay":"1","delay":"3"}');
});