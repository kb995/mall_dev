
(function($) {

    $(function(){
        $(".sub-menu").hide();

        $('#global-nav li').hover(function(){
            $("ul:not(:animated)", this).slideDown();
            }, function(){
            $("ul.sub-menu",this).slideUp();
        });
    });

})(jQuery);
