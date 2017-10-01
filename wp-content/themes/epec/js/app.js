$(document).ready(function(){

	var classActive = 'active';
	var $allTarget = $(this).find('[data-target]');
	var $allClick = $(this).find('[data-click]');
	var categoria = '.portfolio-categoria';
	var expand = 'expand-visible';

	$($allClick).first().addClass(classActive);
	$('[data-target="all"]').addClass(classActive);

	$($allClick).click(function(e){
		e.preventDefault();
		var id = $(this).data('click'),
			$target = $('[data-target="' + id + '"]');
		$('.active').removeClass(classActive);
		$(this).addClass(classActive);
		$($target).addClass(classActive);
	});

	//função de hover
	$(categoria).hover(function() {
	    $('.port-content',this).addClass('hover-port');
	  }, function() {
	    $('.port-content',this).addClass('hover-out').removeClass('hover-port');
	 });

	$('.mestre').click(function(e){
		if ($('.port-expand',this).hasClass(expand)) {
        	$('.port-expand').removeClass(expand);
    	}
    	else{
			$('.port-expand').removeClass(expand);
			$('.port-expand', this).addClass(expand);
		}
	});


});