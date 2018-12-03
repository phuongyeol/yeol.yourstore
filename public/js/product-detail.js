$(function(){
	 $(document).on('click', '.slide-modal-detail', function() {
            $('.modal-title').text('Show');
            $('#slide-show-modal').modal('show');

            var pr_detail_id = $(this).attr('data-id');
            console.log(pr_detail_id);
            var url = 'http://yeol.yourstore/admin/product/slide/' + pr_detail_id ;

            $('#slides-table').DataTable({
                "searching": false,
                "bPaginate": false,
                processing: false,
                serverSide: true,
                "destroy": true,
                ajax: url,
                columns: [ 
                    { data: 'image', name: 'gallary_images.link' },
                ]
            });
        });

     // Delete Detail
     $('#productdetails-table').on('click', '.delete-detail', function(e){
                e.preventDefault();
                var pr_detail_id = $(this).attr('data-id');                
                swal({
                  dangerMode: true,
                  title: "Bạn có muốn xóa bản ghi này không?",
                  icon: "warning",
                  buttons: {
                    cancel: 'Hủy',
                    confirm: 'Xóa'
                  }
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type: 'DELETE',
                            url: 'http://yeol.yourstore/admin/product/delete-product-detail/' + pr_detail_id,
                            data:{
                                id:pr_detail_id,
                            },
                            success: function(res)
                            {
                                if(!res.error) {  
                                    toastr.success('Bản ghi đã được xóa!');
                                    $('#productdetails-table').DataTable().ajax.reload();
                                    // $('#productdetails-table').ajax.reload();
                                }
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                toastr.error(thrownError);
                            }
                        });
                    } else {
                        swal("Bạn đã hủy xóa bản ghi!");
                    }
                });

       
            });
     
     // Add new Product
    $(document).on('click', '.add_new_detail', function() {
        $('.modal-title').text('Add');
        $('#add-detail-modal').modal('show');

        var id_product = $(this).attr('data-id');
        console.log(id_product);

        $('.modal-footer').on('click', '#add_pr_detail', function() {
            var newPost = new FormData();
            // alert(id_product);

            // Store images form #file-1
            var files = document.getElementById('file_details').files;
            // console.log(files.length);

            for (var i = 0; i < files.length; i++) {
                newPost.append('image[]',files[i]);
                // newPost.append('image',files[i]);
                // console.log('upload');
            }   

            // Store Details foem .dynamic-added
            var detail = [];
            $('.dynamic-added-details').each(function(){
                var number = $(this).data('number');
                var size_id = $('#size_'+ number +'_detail').val();
                var color_id = $('#color_'+ number +'_detail').val();
                var qty = $('#quantity_'+ number +'_detail').val();

                var details = {
                    size: size_id,
                    color : color_id,
                    qty : qty,
                };
                detail.push(details);
                // console.log(detail)

            });
            console.log(detail);

            newPost.append('details',JSON.stringify(detail));
            newPost.append('images',$("#img2").val());
            // console.log(newPost);

            $.ajax({
                type: 'POST',
                url: 'http://yeol.yourstore/admin/product/'+ id_product +'/store-product-detail',
                data:newPost,
                dataType:'json',
                async:false,
                processData: false,
                contentType: false,
                success: function(data) {
                    $('#productdetails-table').DataTable().ajax.reload();

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

    });
});
