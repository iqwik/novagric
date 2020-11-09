// if (typeof RokSprocket == 'undefined') RokSprocket = {};
// Object.merge(RokSprocket, {
//     SiteURL: 'https://www.novagric.loc/',
//     CurrentURL: 'https://www.novagric.loc/',
//     AjaxURL: 'https://www.novagric.loc/index.php?option=com_roksprocket&amp;task=ajax&amp;format=raw&amp;ItemId=212'
// });

// window.addEvent('domready', function(){
//     RokSprocket.instances.lists = new RokSprocket.Lists();
// });

// window.addEvent('domready', function(){
//     RokSprocket.instances.lists.attach(382, '{"accordion":"0","autoplay":"1","delay":"5"}');
// });

window.addEvent('domready', function(){
  RokSprocket.instances.slideshow = new RokSprocket.Slideshow();
});

window.addEvent('domready', function(){
  RokSprocket.instances.slideshow.attach(288, '{"animation":"crossfade","autoplay":"1","delay":"5"}');
});
