
$(document).ready(function() {
    filter_data();
    // Bind keyup event to live_search input
    $("#live_search").keyup(function() {
        var input = $(this).val();
        var brand = get_filter('brand');
        
        if (input != '') {
            // Call load_data function with default page value
            load_data(1, input, brand);
        } else {
            filter_data();
        }
    });

    function load_data(page, input, brand) {
        var action = 'fetch_data';
        // var value = $("#sort_price").val();
        $.ajax({
            url: "./templeProducts/fetch_data.php",
            method: "POST",
            data: {
                
                action:action,
                brand: brand,
                page: page,
                input: input,
                // value: value
                
            },
            success: function(data) {
                $('#pagination_data').html(data);
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    }

    function get_filter(class_name) {
        var filter = [];
        $('.' + class_name + ':checked').each(function() {
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function() {
        filter_data();
        $("#minPrice").val('');
        $("#maxPrice").val('');
    });

    function filter_data(page) {
        var brand = get_filter('brand');
        var input = $("#live_search").val();
        // var value = $("#sort_price").val();
        $.ajax({
            url: "./templeProducts/fetch_data.php",
            method: "POST",
            data: {
                action: 'fetch_data',
                brand: brand,
                page: page,
                input: input,
                // value: value
            },
            success: function(data) {
                $('#pagination_data').html(data);
            }
        });
    }

    // $('#sort_price').change(function() {
    //     filter_data();
    // });

    $('#a1, #a2').click(function() {
        var value = $(this).html();
        var brand = get_filter('brand');
        $.ajax({
            url: "./templeProducts/fetch_data.php",
            method: "POST",
            data: {

                value: value,
                brand: brand
            },
            success: function(data) {
                $('#pagination_data').html(data);
            }
        });
    });

    $('.filter-price-select-item').click(function(){
        var priceRange = $(this).find('span').text();
        var priceLow = priceRange.split("-")[0] * 1000000;
        var priceHight = priceRange.split("-")[1].replace('triệu','') * 1000000;
        var brand = get_filter('brand');
        var input = $("#live_search").val();
        $("#live_search").val('');
        $.ajax({
            url:'./templeProducts/fetch_data.php',
            method:"POST",
            data:{
                brand:brand,
                input:input,
                priceLow:priceLow, 
                priceHight:priceHight
            },
            success:function(data){
                $("#pagination_data").html(data);
            },
            error:function(xhr,status,error){
                console.log(error);
            }
        });
        document.querySelector('#minPrice').value = priceLow / 1000000;
        document.querySelector('#maxPrice').value = priceHight / 1000000;
    });

    $('#minPrice,#maxPrice').keyup(function() {
       
        var regex = /^\d+$/; // regex để kiểm tra giá trị là số nguyên dương
  
        var priceLow = $("#minPrice").val() * 1000000;
        var priceHight = $("#maxPrice").val()* 1000000;
        var brand = get_filter('brand');
        var input = $("#live_search").val();
        $("#live_search").val('');
        
        if (!regex.test(priceLow)) {
          $("#minPrice").addClass("invalid-input"); 
            
        } else {
          $("#minPrice").removeClass("invalid-input"); 
          
        }
        
        if (!regex.test(priceHight)) {
          $("#maxPrice").addClass("invalid-input"); 
        } else {
          $("#maxPrice").removeClass("invalid-input"); 
          
        }
        if(priceLow >= priceHight){
            $("#maxPrice").addClass("invalid-input");
        }else {
            $("#maxPrice").removeClass("invalid-input"); 
        }
        $.ajax({
            url:'./templeProducts/fetch_data.html',
           
          type: "POST", 
         
          data: {
                brand:brand,
                priceLow:priceLow, 
                priceHight:priceHight,
                input:input
            },
          success: function(data) {
            $("#pagination_data").html(data);
          },
          error: function(xhr, status, error) {
            console.log(error);
          }
        });
      });

    // Bind click event to pagination links
    $(document).on('click', '.pagination_link', function() {
        var page = $(this).attr("id");
        filter_data(page);
    });
});



$(document).on("click", ".order_product", function() {
    var id = $(this).data("product-id");
        $.ajax({
            url: './templeProducts/detailProduct.php',
            method: 'POST',
            data: {id: id
        },
            success: function(data){
                $("#pagination_data").html(data);
            },
            error: function(xhr, status, error){
                alert(error);
            }
        });
    });


