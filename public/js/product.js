$(function(){
	// List Product use Datatable
	var table = $('#products-table').DataTable({
		processing: true,
        serverSide: true,
        ajax:'http://yeol.yourstore/admin/product/get-list-product',
        columns:[
        	{data:'id', name:'products.id'},
        	{data:'name_product', name:'products.name_product'},
        	{data:'description', name:'products.description'},
        	{data:'origin_price', name:'products.origin_price'},
        	{data:'sale_price', name:'products.sale_price'},
        	{data:'name_cate', name:'categories.name_cate'},
        	{data:'name_vendor', name:'vendors.name_vendor'},
			{ data:'action',orderable: false, searchable: false}

        ]
	});

	$.fn.dataTable.ext.errMode = 'throw';

	// Add new Product
    $(document).on('click', '.crud-create', function() {
        $('.modal-title').text('Add');
        $('#modal_add_abc').modal('show');
    });
    $('.modal-footer').on('click', '.submit_add', function() {
        var newPost = new FormData();

        // Store images form #file-1
        var files = document.getElementById('file-1').files;
        console.log(files.length);

        for (var i = 0; i < files.length; i++) {
            newPost.append('image[]',files[i]);
            // newPost.append('image',files[i]);
            console.log('upload');
        }   

        // Store Details foem .dynamic-added
        var detail = [];
        $('.dynamic-added').each(function(){
            var number = $(this).data('number');
            var size_id = $('#size_'+ number +'_id').val();
            var color_id = $('#color_'+ number +'_id').val();
            var qty = $('#quantity_'+ number).val();

            var details = {
                size: size_id,
                color : color_id,
                qty : qty,
            };
            detail.push(details);
            // console.log(detail)

        });

        // console.log(CKEDITOR.instances["content"].getData());
        newPost.append('details',JSON.stringify(detail));
        newPost.append('name_product', $('#name_product').val());
        newPost.append('origin_price', $('#origin_price').val());
        newPost.append('sale_price', $('#sale_price').val());
        newPost.append('description',jQuery("textarea#description").val());
        newPost.append('content',CKEDITOR.instances["content"].getData());
        newPost.append('category_id',$(".category option:selected").val());
        newPost.append('vendor_id',$(".vendor option:selected").val());
        newPost.append('images',$("#img").val());
        // console.log(newPost);

        $.ajax({
            type: 'POST',
            url: 'http://yeol.yourstore/admin/product/store-product',
            data:newPost,
            dataType:'json',
            async:false,
            processData: false,
            contentType: false,
            success: function(data) {

                $(".modal").modal('hide');
                table.ajax.reload();

                $('.errorName').addClass('hidden');
                $('.errorDescription').addClass('hidden');

                if ((data.errors)) {
                    setTimeout(function () {
                        $('#addModal').modal('show');
                        toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                    }, 500);

                    if (data.errors.name) {
                        $('.errorName').removeClass('hidden');
                        $('.errorName').text(data.errors.name);
                    }
                    if (data.errors.description) {
                        $('.errorDescription').removeClass('hidden');
                        $('.errorDescription').text(data.errors.description);
                    }
                } else {
                    toastr.success('Successfully added Post!', 'Success Alert', {timeOut: 5000});
                    // colorTable.ajax.reload();
                    document.getElementById("add_form").reset();
                }

                
            },
        });
    });

    // Show detail product
         $(document).on('click', '.show-modal', function() {
            $('.modal-title').text('Show');
            $('#showModal').modal('show');

            var id = $(this).attr('data-id');
            // console.log(id);
            var url = 'http://yeol.yourstore/admin/product/' + id +'/product-detail';

            $('#productdetails-table').DataTable({
                "searching": false,
                "bPaginate": false,
                processing: false,
                serverSide: true,
                "destroy": true,
                ajax: url,
                columns: [ 
                    { data: 'id', name: 'product_details.id' },
                    { data: 'photo', name: 'gallary_images.link' },
                    { data: 'size', name: 'sizes.size' },
                    { data: 'name', name: 'colors.name' },
                    { data: 'quantity', name: 'product_details.quantity' },
                    { data: 'created_at', name: 'product_details.created_at' },
                    { data:'action',orderable: false, searchable: false},
                    // { data:'newDetail',name:'product_details.product_id'}
                ]
            });
        });

    // Update a Post
    $(document).on('click', '.edit-modal', function() {
                // $('.modal-title').text('Edit');
                $('#edit-modal').modal('show');
                var id = $(this).attr('data-id');
                
                var url = '/admin/product/edit/' + id;

                $.ajax({
                    type: 'get',
                    url: url,
                    success: function(response){
                        $('#name_product_edit').val(response.name_product); 
                        $('#slug').val(response.slug); 
                        $('#origin_price_edit').val(response.origin_price); 
                        $('#sale_price_edit').val(response.sale_price); 
                        $("textarea#description_edit").val(response.description);
                        $('#content2').val(response.content); 
                        CKEDITOR.instances.content2.setData(response.content);
                        $("#category_id_edit").val(response.category_id);
                        $("#vendor_id_edit").val(response.vendor_id);
                        // $("file-2-edit").val(response.file_1);
                    }
                })

                $('.modal-footer').on('click', '#update-submit', function() {

                    var url = 'http://yeol.yourstore/admin/product/update/' + id;// dang update ma sao lai dung edit?
                    console.log(url);
                    $.ajax({
                        type: 'PUT',
                        url: url,
                        data: {
                            name_product: $('#name_product_edit').val(),
                            slug: $('#slug').val(),
                            origin_price: $('#origin_price_edit').val(),
                            sale_price: $('#sale_price_edit').val(),
                            description: $('#description_edit').val(),
                            content: CKEDITOR.instances.content2.getData(),
                            category_id: $('#category_id_edit').val(),
                            vendor_id: $('#vendor_id_edit').val(),

                        },

                        success: function(data) {
                            table.ajax.reload();
                            $('#edit-modal').modal('hide');
                            toastr.success('Successfully edit Post!', 'Success Alert', {timeOut: 5000});
                            

                            $('.errorTitle').addClass('hidden');
                            $('.errorSlug').addClass('hidden');
                            $('.errorThumbnail').addClass('hidden');
                            $('.errorDescription').addClass('hidden');
                            $('.errorContent').addClass('hidden');

                            if ((data.errors)) {
                                setTimeout(function () {
                                    $('#edit-modal').modal('show');
                                    toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                                }, 500);

                                if (data.errors.name) {
                                    $('.errorName').removeClass('hidden');
                                    $('.errorName').text(data.errors.name);
                                }
                                if (data.errors.description) {
                                    $('.errorDescription').removeClass('hidden');
                                    $('.errorDescription').text(data.errors.description);
                                }
                            } else {
                                toastr.success('Successfully edit Post!', 'Success Alert', {timeOut: 5000});
                                // colorTable.ajax.reload();
                            }
                        },
                    });
                });
           
    });

     // Delete product
            $('#products-table').on('click', '.delete-product', function(e){
                e.preventDefault();
            });
            $('#products-table').on('click', '.btn-danger', function(e){
                e.preventDefault();
                var id = $(this).attr('data-id');
                var url = 'http://yeol.yourstore/admin/product/delete/' + id;
                swal({
                  dangerMode: true,
                  title: "Bạn có muốn xóa sản phẩm này không?",
                  icon: "warning",
                  buttons: {
                    cancel: 'Hủy',
                    confirm: 'Xóa'
                  }
                })
                .then((willDelete) => {
                    if (willDelete) {
                       
                        $.ajax({
                            type: "delete",
                            url: url,
                            data: {
                                product_id : id,
                            },
                            success: function(res)
                            {
                                if(!res.error) {  
                                    toastr.success('Sản Phẩm đã được xóa!');
                                    table.ajax.reload();
                                }

                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                toastr.error(thrownError);

                            }
                        });
                    } else {
                        swal("Bạn đã hủy xóa sản phẩm!");
                    }
                });

       
            });
    
});