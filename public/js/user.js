$(function(){
	var table = $('#users-table').DataTable({
	processing: true,
        serverSide: true,
        ajax:'http://yeol.yourstore/admin/user/get-list-user',
        columns:[
        	{data:'id', name:'users.id'},
        	{data:'photo', name:'users.avatar'},
                {data:'name', name:'users.name'},
                {data:'name_pos', name:'positions.name_pos'},
        	{data:'description', name:'positions.description'},
        	{data:'username', name:'users.username'},
        	{data:'email', name:'users.email'},
	       { data:'action',orderable: false, searchable: false},

                ]
	});
	$.fn.dataTable.ext.errMode = 'throw';

        // Detail a User
        $(document).on('click','.user-show', function(){
                var user_id = $(this).attr('data-id');

                $('#show-details-user').modal('show');
                // alert(user_id);
                //Truyen id vao duong dan
                $.ajax({
                        url: "http://yeol.yourstore/admin/user/show/" + user_id,
                        type: 'get',
                        success: function(user){

                                //id #show-name đặt ở Modal:
                                $('#show-avatar').attr('src',user.data.avatar);
                                $('#show-name').text(user.data.name);
                                $('#show-position').text(user.data.position.name_pos);
                                $('#show-description').html(user.data.position.description);
                                $('#show-username').text(user.data.username);
                                $('#show-email').text(user.data.email);
                                $('#show-mobile').text(user.data.mobile);
                                $('#show-address').text(user.data.address);
                                $('#show-created_at').text(user.data.created_at);
                        },
                        error: function(error){
                                console.log("Fail quá Xem ơi! Chạy ngay đi!");
                        }
                });
        });

        // Add a User
        $(document).on('click', '.user-create', function(){
                $('#add-modal').modal('show');
                
        });

        $(document).on('click', '.add-submit', function(){
                var newPost = new FormData();
                console.log($('#add-position-id option:selected').val());
                newPost.append('avatar', $('#add-avatar').val());
                newPost.append('username', $('#add-username').val());
                newPost.append('email', $('#add-email').val());
                newPost.append('name', $('#add-name').val());
                newPost.append('position_id', $('#add-position-id option:selected').val());
                newPost.append('password', $('#add-password').val());
                newPost.append('mobile', $('#add-mobile').val());
                newPost.append('address', jQuery("textarea#add-address").val());
                // console.log(newPost);
                $.ajax({
                        type:'POST',
                        url:"http://yeol.yourstore/admin/user/store",
                        data:newPost,
                        dataType:'json',
                        async:false,
                        processData: false,
                        contentType: false,
                        success:function(data){
                                $(".modal").modal('hide');
                                table.ajax.reload();
                        },
                        error: function(error){
                                console.log("Fail quá Xem ơi! Chạy ngay đi!");
                        }
                });
        });

        // Delete User
            // $('#users-table').on('click', '.user-delete', function(e){
            //     e.preventDefault();
            // });
            $('#users-table').on('click', '.user-delete', function(e){
                e.preventDefault();
                var user_id = $(this).attr('data-id');                
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
                            type: 'DELETE',
                            url: 'http://yeol.yourstore/admin/user/delete/' + user_id,
                            data:{
                                id:user_id,
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
