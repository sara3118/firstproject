function update_users_count() {
    $('#users b').animate({
        counter: 99
    }, {
        duration: 6000,
        easing: 'swing',
        step: function(now) {
            $(this).text(Math.ceil(now)+"%");
        },
        complete: update_users_count
    });
	
	
	$('#users2 b').animate({
		
		counter:60
	}, {
		
		duration:600,
		easing:'swing',
		step:function(now) {
			$(this).text(Math.ceil(now)+"%");
		},
		complete:update_users_count
	}
	
	
	);
	
	
	
};

update_users_count();


