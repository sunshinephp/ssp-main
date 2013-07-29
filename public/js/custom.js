$(function() {
    // enable bootstrap tabs
	$('#myTab a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	})
	
	// Tab-Pane change function
	var tabCarousel = setInterval(function() {
		var tabs = $('.tabbable .nav-pills > li'),
			active = tabs.filter('.active'),
			next = active.next('li'),
			toClick = next.length ? next.find('a') : tabs.eq(0).find('a');
	
		toClick.trigger('click');
	}, 5000);
	$('.tabbable .nav-pills > li').hover(function(){
	  clearInterval(tabCarousel);
	});
});