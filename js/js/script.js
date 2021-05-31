$( document ).ready(function() {
	$('.header_burger').click(function(event) {
    $('.header_burger,.header-top,.father_burger').toggleClass('active');
    $('body').toggleClass('lock');
});
	

	});

 $(document).mouseup(function(e) {
        var $target = $(e.target);
        if ($target.closest('.header_burger,.header-top').length == 0) {
            $('.father_burger').removeClass('active') + (location.reload());
        }

        
    });
