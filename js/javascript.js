   
     $(document).ready(function() {
    $(".hoverli").hover(
        function() {
            $('ul.file_menu').slideDown('medium');
        },
        function() {
            $('ul.file_menu').slideUp('medium');
        }
    );

    $(".file_menu li").hover(
        function() {
            $(this).children("ul").slideDown('medium');
        },
        function() {
            $(this).children("ul").slideUp('medium');
        }
    );
});
      

	  
	   