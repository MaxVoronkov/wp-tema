jQuery(document).ready(function($){
    $('.inpt_search').bind('input',function(eventObject){
        var searchTerm = $(this).val();
        // проверим, если в поле ввода более 2 символов, запускаем ajax
       if(searchTerm.length > 2 ){
            $.ajax({
                url : '/wp-admin/admin-ajax.php',
                type: 'POST',
                data:{
                    'action':'codyshop_ajax_search',
                    'term'  :searchTerm
                },
                success:function(result){
                    $('.codyshop-ajax-search').fadeIn(200).html(result);
                    $('.search_result').click( function() {
                        var res = $(this).text();

                        $('.inpt_search').val(res);
                         $('.codyshop-ajax-search').hide();

                         $.ajax({
                            url : '/wp-admin/admin-ajax.php',
                            type: 'POST',
                            data:{
                                'action':'find_url',
                                'pst'   :res
                                  },
                             success:function(data){
                                 $("a.countryhref").prop("href", data);

                             }
                         });


                         });

                }
            });
        }else {

            $('.codyshop-ajax-search').hide()
        }

    });
      
    
});

