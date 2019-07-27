$(document).ready(function () {

    // Click brand
    $('.brands_list').click(function () {
        let about = $(this).data('about');
        //$('.nama').html(about);
        let pid = $(this).data('pid');
        let brand = $(this).data('brand');
        let category = $(this).data('category');

        let loader = $('.loader');
		loader.show();
		$('.loading').css('animation-play-state', 'running');

        $('.select_brand').val(pid);
        $('.btn_search_product').click();
        $('.nama').load(baseUrl + 'main_controller/load_brand_about',
        {
            pid,
            brand: brand,
            category: category
        }, function() {
            loader.hide();
        });
    });

    // Click btn search
    $('.btn_search_product').click(function() {
        $('#form_query_product').submit();
    });

    // Form query submit
    $('#form_query_product').submit(function(e) {
        e.preventDefault();
        let loader = $('.container_load_product .loader1');
        loader.show();

        $.ajax({
			url: baseUrl + 'main_controller/load_products',
			type: 'POST',
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(result) {
                //let obj = JSON.parse(result);
                $('.container_load_product_content').html(result);
                loader.hide();
			}
		});
    })
});