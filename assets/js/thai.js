$(document).ready(function(){  
    load_data();  
    function load_data(page)  
    {  
     const url = new URLSearchParams(location.search);
     const id = url.get("id");
         $.ajax({  
              url:"./DB/queryproducts.php?id="+id,  
              method:"POST",  
              data:{page:page}, 
              success:function(data){  
                   $('#pagination_data').html(data);  
                  
              }  
         })  
    }  
    $(document).on('click', '.pagination_link', function(){  
         var page = $(this).attr("id");  
         load_data(page);  
    });  
}); 

