
  (function ($) {

    $(window).load(function () {
        $("#pre-loader").delay(500).fadeOut();
        $(".loader-wrapper").delay(1000).fadeOut("slow");

    });

    $(document).ready(function () { 

        $(".toggle-button").click( function (){
            $(this).parent().toggleClass("menu-collapsed");
        });      

        /*-- Search toggle. -- */
        var searchbutton = $('li #search-toggle');
        var searchbox = $('li #search-box');

            searchbutton.on('click', function(){
            if (searchbutton.hasClass('menu-search')){
                searchbutton.removeClass('menu-search').addClass('menu-search-x');
                searchbox.addClass('show-search-box');
            }
            
            else{
                searchbutton.removeClass('menu-search-x').addClass('menu-search');
                searchbox.removeClass('show-search-box');
            }
        });

        /* keyboard nav dropdown */
        $("a.dropdown-toggle").focus(            
        function() {
            $('#crater-main-menu-wrapper .nav>li.dropdown .dropdown-menu').css({'opacity': '1','display': 'block', '-webkit-transform':'scale(1)','transform':'scale(1)','border':'1px solid #e8e8e8'});
            $('#crater-main-menu-wrapper .nav>li.dropdown .dropdown-menu .dropdown-menu').css({'opacity': '1','display': 'block', '-webkit-transform':'scale(1)','transform':'scale(1)','border':'1px solid #e8e8e8'});
        });
        $(".dropdown-menu li:last-child").focusout(            
        function() {
            $('#crater-main-menu-wrapper .nav>li.dropdown .dropdown-menu').css({'opacity': '0','display': 'none'});
            $('#crater-main-menu-wrapper .nav>li.dropdown .dropdown-menu .dropdown-menu').css({'opacity': '0','display': 'none'});
        });

        /*-- tooltip --*/
        $('[data-toggle="tooltip"]').tooltip();

        /*-- Button Up --*/
        var btnUp = $('<div/>', { 'class': 'btntoTop' });
        btnUp.appendTo('body');
        $(document).on('click', '.btntoTop', function (e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 700);
        });
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 200)
                $('.btntoTop').addClass('active');
            else
                $('.btntoTop').removeClass('active');
        });

        /*-- Site title --*/
        if( $('a').hasClass('custom-logo-link') && $('a.custom-logo-link img').attr('src') != ''){
            $('h1.site-title').css({'display': 'none'});
        }
        else{
            $('h1.site-title').css({'display': 'block'});   
        }

        /*-- Mobile menu --*/
        if($('#crater-main-menu-wrapper').length) {
            $('#crater-main-menu-wrapper .nav li.dropdown').append(function () {
              return '<i class="fas fa-angle-down" aria-hidden="true"></i>';
            });
            $('#crater-main-menu-wrapper .nav li.dropdown .fas').on('click', function () {
              $(this).parent('li').children('ul').slideToggle();
            });
        }
        
        /*-- Sticky Sidebar --*/
       $('#sidebar-wrapper, #post-wrapper').theiaStickySidebar();
       $('#sidebar-wrapper, #page-wrapper').theiaStickySidebar(); 

    });    

})(this.jQuery);