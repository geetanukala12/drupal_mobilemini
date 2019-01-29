/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

(function ($) {
       $(document).ready(function(){  
            $('.dropdown-ul').css('display','none');
            
            $("#state option[value != '']").hide();
            
            $('#country').on('change',function(){
                var selVal = $(this).val();
//                alert(selVal);
                $('#state option[parent-country='+selVal+']').show(); 
            });
            
            $('.select ul li.option').click(function() {
                    $(this).siblings().children().remove();
                    var a = $(this).siblings().toggle();
                    console.log($(a).is(":visible"));
            })
            //dropdown css for top menu right
            $(".dropdown").hover(
              function() {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown();
                $(this).toggleClass('open');
              },
              function() {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp();
                $(this).toggleClass('open');
              }
            );
    
            $(".dropdown_submenu").hover(
              function() {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown();
                $(this).toggleClass('open');
                $('.dropdown-ul').css('display','inline-flex');
              },
              function() {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp();
                $(this).toggleClass('open');
                $('.dropdown-ul').css('display','inline-flex');
              }
            );

       });
})(jQuery);

