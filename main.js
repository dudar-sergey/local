jQuery(document).ready(function(){




        $(".cart_product_id").on("click", function(e){

            let current_id2 = $(this).attr('data-id');
            e.preventDefault();

            jQuery.ajax({
                url: "DB.php",
                type: "POST",
                data: {current_id2:current_id2},
                dataType: "json",
                success: function(){

                    location.reload();
                    console.log("success");

                }



            });
            return false;
        });






    $.each($(".product_id"), function(){

        $(this).bind('click', function(){
            console.log("Hello");
            let current_id = $(this).attr('data-id');

            jQuery.ajax({
                    url: "index.php",
                    type: "POST",
                    data: {current_id:current_id},
                    dataType: "json",
                    success: function(result){
                        
                            alert(result);
                        

                    }
                    



            });
        
                 });
        



     });



});



