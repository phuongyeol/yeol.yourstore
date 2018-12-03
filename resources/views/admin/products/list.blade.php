{{-- @extends('auth.layouts.app') --}}
@extends('admin.layouts.master')

@section('header')
		<link href="https://fonts.googleapis.com/css?family=Francois+One|Roboto+Mono" rel="stylesheet">
		<link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
    	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
		
		<style type="text/css">
			legend{
				font-family: 'Francois One', sans-serif;
				text-align: center;
				font-size: 36px;
			}
            .modal_title{
                font-size: 28px;
            }
			.elecenter{
				 margin-left: 46%;
			}
			.main-section{
            margin:0 auto;
            padding: 20px;
            margin-top: 100px;
            background-color: #fff;
            box-shadow: 0px 0px 20px #c1c1c1;
	        }
	        .fileinput-remove,
	        .fileinput-upload{
	            display: none;
	        }
            .table-shadow{
                box-shadow: 0px 0px 20px #c1c1c1;
            }
            .fixtext{
                font-size: 20px;
                text-align: center;

            }
	        .background{
                background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
                color:white;
                font-size: 30px;
            }
		</style>
@endsection
	
@section('content')
    {{-- List Color, List Size --}}
	<datalist id="list_colors">
		@foreach ($colors as $colors)
    	    <option value="{{$colors->name}}"></option> 
    	@endforeach
	</datalist>

    <datalist id="list_sizes">
        @foreach ($sizes as $sizes)
            <option value="{{$sizes->size}}"></option> 
        @endforeach
    </datalist>

    <div class="card-body table-responsive">
    	<legend >Danh Sách sản phẩm</legend>
	        <div class="card-tools">
	            <button type="button" class="btn btn-primary crud-create elecenter" data-toggle="modal" data-target="#create-item">Add New Product <i class="fa fa-plus-square" ></i></button><br>
	        </div><br> 

	    {{-- Table list Product --}}
      	<table class="table table-bordered table-hover table-striped" id="products-table">
	        <thead  class="thead-dark">
	            <tr>
	                <th>Id</th>
	                <th>Name</th>
	                <th style="width: 30%">Description</th>
	                <th>Original Price</th>
	                <th>Sale Price</th>
	                <th>Category</th>
	                <th>Vendor</th>
	                <th style="width: 15%">Action</th>
	            </tr>
	        </thead>
      	</table>
	</div>

	{{-- Modal Create new Product --}}

	<div id="modal_add_abc" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" style="width: 1300px">
            <div class="modal-content">
                <div class="modal-header">
                    <legend class="modal_title bg-dark">Add New Product</legend>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" id="add_form" method="POST">
                        {{-- <div class="container"> --}}
                        <div style="margin-left:30px;margin-right: 30px">
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="">Name (<span style="color: red">*</span>)</label>
                                            <input type="text" class="form-control" id="name_product" placeholder="Name" name="name">
                                            @if ($errors->has('name_product'))
                                                <span class="errors">{{$errors->first('name')}}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Origin Price (<span style="color: red">*</span>)</label>
                                            <input type="number" class="form-control" id="origin_price" placeholder="Origin Price" name="origin_price">
                                            @if ($errors->has('origin_price'))
                                                <span class="errors">{{$errors->first('origin_price')}}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Sale Price (<span style="color: red">*</span>)</label>
                                            <input type="number" class="form-control" id="sale_price" placeholder="Sale Price" name="origin_price">
                                          
                                            @if ($errors->has('sale_price'))
                                                <span class="errors">{{$errors->first('sale_price')}}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Description (<span style="color: red">*</span>)</label>
                                            <textarea class="form-control" name="description" id="description" cols="30" rows="4" placeholder="Description"></textarea> 
                                             @if ($errors->has('description'))
                                                <span class="errors">{{$errors->first('description')}}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                                <label for="">Content (<span style="color: red">*</span>)</label>
                                                <textarea name="content" class="form-control " id="content"></textarea>
                                                @if ($errors->has('content'))
                                                    <span class="errors">{{$errors->first('content')}}</span>
                                                @endif
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                      
                                      {{-- categories --}}
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-list font-green" aria-hidden="true"></i>
                                                    <span class="caption-subject font-green bold">Category</span>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <select class="form-control category" name="category_id" id="category_id">
                                                    {{-- <option value=""></option> --}}
                                                  @if (count($categories)>0) 
	                                                  @foreach ($categories as $category)
	                                                      <option value="{{$category->id}}">{{$category->name_cate}}</option>
	                                                  @endforeach 
                                                  @endif
                                                </select>
                                             </div>
                                        </div>
                                        {{-- vendor --}}
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-list font-green" aria-hidden="true"></i>
                                                    <span class="caption-subject font-green bold">Vendor</span>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <select class="form-control vendor" name="vendor_id" id="vendor_id">
                                                    {{-- <option value=""></option> --}}
                                                  @if (count($vendors)>0) 
                                                  		@foreach ($vendors as $vendor)
	                                                      <option value="{{$vendor->id}}">{{$vendor->name_vendor}}</option>
	                                                  	@endforeach 
                                                  @endif
                                                </select>
                                             </div>
                                        </div>
                                    
                                            
                                        {{-- image --}}
                                        <div class=" main-section" style="width: 500px ; margin-left: 30px; margin-top: 30px; margin-bottom: 30px">
                                                {!! csrf_field() !!}
                                                <div class="form-group">
                                                    <div class="file-loading">
                                                        <input id="file-1" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2" style="width: ">
                                                    </div>
                                                </div>
                                            
                                        </div>

                                        {{-- size color quantity --}}
                                        <div class="alert alert-danger print-error-msg" style="display:none">
                                            <ul></ul>
                                        </div>
                                        <div class="alert alert-success print-success-msg" style="display:none">
                                            <ul></ul>
                                        </div>
                                        <div class="table-responsive">  
                                            <table class="table table-bordered" style="border: none;" id="dynamic_field">
                                                <thead> 
                                                    <tr>
                                                        <th>Size</th>
                                                         <th>Color</th>
                                                        <th>Quantity</th>
                                                        <td><button type="button" name="add" id="add" class="btn btn-success">
                                                            <span class="glyphicon glyphicon-plus"></span>
                                                        </button></td> 
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="dynamic-added" id="row-1" data-number ="1">
                                                        <td>                                                
                                                            <input type="number" class="form-control size name_list" id="size_1_id" list="list_sizes">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control color name_list" id="color_1_id" list="list_colors">
                                                        </td>
                                                        <td>
                                                            <input type="number" name="quantity[]" id="quantity_1" placeholder="Enter your Quantity" class="form-control name_list" />
                                                        </td>
                                                        <td><button type="button" name="remove" class="btn btn-danger btn_remove1" id="remove-tr'+i+'" data-id="'+i+'"><span class="glyphicon glyphicon-minus" id="remove-tr'+i+'"></span></button></td>
                                                    </tr>
                                                </tbody>
                                            </table>  
                                        </div>
                                    </div>
                                </div>
                          
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <input type="hidden" name="images" id="img">
                        <button type="button" class="btn btn-success submit_add" data-dismiss="modal" id="submit">
                            <span id="" class='glyphicon glyphicon-check'></span> Add
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Show Modal Product--}}
    <div id="showModal" class="modal fade" role="dialog" >
        <div class="modal-dialog modal-lg" style="width: 1000px" >
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <button type="button" class="close" data-dismiss="modal">×</button> --}}
                   <legend class="modal_title">Show Product Details</legend>
                </div><br>
                {{-- <div class="card-tools">
                    <button type="button" class="btn btn-primary add_new_detail" data-toggle="modal" data-target="#add-detail-item"  style="margin-left: 46%">New <i class="fa fa-plus-square"></i></button>
                </div> --}}
                <div class="modal-body">
                    <table class="table table-hover table-striped" id="productdetails-table">
                            <thead  class="thead-dark">
                            <tr>
                                <th>PD-ID</th>
                                <th style="width: 15%">IMAGE</th>
                                <th style="width: 15%">SIZE</th>
                                <th style="width: 15%">COLOR</th>
                                <th style="width: 15%">QUANTITY</th>
                                <th>CREATED AT</th>
                                <th  style="width: 30%">ACTION</th>
                                {{-- <th class="hidden">Product ID</th> --}}
                            </tr>
                            </thead>
                    </table>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Edit Modal Product--}}
    <div  id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document" style="width: 1300px">
          <div class="modal-content">
            <div class="modal-header">
              <legend class="modal_title edit-item bg-dark" id="myModalLabel">Edit Product</legend>
            </div>
            <div class="modal-body">
                <form data-toggle="validator" action="" method="put" class="form">
                  @csrf
                    <div style="margin-left:30px;margin-right: 30px">
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="">Name (<span style="color: red">*</span>)</label>
                                            <input type="text" class="form-control" id="name_product_edit" placeholder="Name" name="name">
                                            @if ($errors->has('name_product_edit'))
                                                <span class="errors">{{$errors->first('name_product_edit')}}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Origin Price (<span style="color: red">*</span>)</label>
                                            <input type="number" class="form-control" id="origin_price_edit" placeholder="Origin Price" name="origin_price_edit">
                                            @if ($errors->has('origin_price_edit'))
                                                <span class="errors">{{$errors->first('origin_price_edit')}}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Sale Price (<span style="color: red">*</span>)</label>
                                            <input type="number" class="form-control" id="sale_price_edit" placeholder="Sale Price" name="sale_price_edit">
                                          
                                            @if ($errors->has('sale_price_edit'))
                                                <span class="errors">{{$errors->first('sale_price_edit')}}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Description (<span style="color: red">*</span>)</label>
                                            <textarea class="form-control" name="description_edit" id="description_edit" cols="30" rows="4" placeholder="Description"></textarea> 
                                             @if ($errors->has('description_edit'))
                                                <span class="errors">{{$errors->first('description_edit')}}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                                <label for="">Content (<span style="color: red">*</span>)</label>
                                                <textarea name="content2" class="form-control " id="content2"></textarea>
                                                @if ($errors->has('content2'))
                                                    <span class="errors">{{$errors->first('content2')}}</span>
                                                @endif
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                      
                                      {{-- categories --}}
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-list font-green" aria-hidden="true"></i>
                                                    <span class="caption-subject font-green bold">Category</span>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <select class="form-control" name="category_id_edit" id="category_id_edit" >
                                                    {{-- <option value=""></option> --}}
                                                  @if (count($categories)>0) 
                                                      @foreach ($categories as $category)
                                                          <option value="{{$category->id}}">{{$category->name_cate}}</option>
                                                      @endforeach 
                                                  @endif
                                                </select>
                                             </div>
                                        </div>
                                        {{-- vendor --}}
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-list font-green" aria-hidden="true"></i>
                                                    <span class="caption-subject font-green bold">Vendor</span>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <select class="form-control" name="vendor_id_edit" id="vendor_id_edit" >
                                                    {{-- <option value=""></option> --}}
                                                  @if (count($vendors)>0) 
                                                        @foreach ($vendors as $vendor)
                                                          <option value="{{$vendor->id}}">{{$vendor->name_vendor}}</option>
                                                        @endforeach 
                                                  @endif
                                                </select>
                                             </div>
                                        </div>

                                        {{-- size color quantity --}}
                                        <div class="alert alert-danger print-error-msg" style="display:none">
                                            <ul></ul>
                                        </div>
                                        <div class="alert alert-success print-success-msg" style="display:none">
                                            <ul></ul>
                                        </div>
                                        
                                    </div>
                                </div>
                          
                            </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-success submit-update" data-dismiss="modal" id="update-submit">
                            <span id="" class='glyphicon glyphicon-check'></span> Update
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>

    {{-- =========PRODUCT DETAILS=============== --}}
    @include('admin.products.detail')
    
@endsection

@section('footer')
        {{-- Toastr JS --}}
	  	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js"></script>
        {{-- Sweetalert --}}
	    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
        {{-- FileInput Laravel --}}
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
	    {{-- JS Product --}}
        <script type="text/javascript" src="{{ asset('../js/product.js') }}"></script>

	    <script type="text/javascript" src="{{ asset('../js/product-detail.js') }}"></script>

	    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	    <script> 
	        CKEDITOR.replace( 'content', {
	        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
	        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
	        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
	        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
	        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
	        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
	    } );
	    </script>
            
        <script> 
            CKEDITOR.replace( 'content2', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        } );
        </script>

	    <script type="text/javascript">
	        $("#file-1").fileinput({
	            theme: 'fa',
	            uploadUrl: "http://yeol.yourstore/admin/product/image-view",
	            uploadExtraData: function() {
	                return {
	                    _token: $("input[name='_token']").val(),
	                };
	            },
	            allowedFileExtensions: ['jpg', 'png', 'gif'],
	            overwriteInitial: false,
	            maxFileSize:200,
	            maxFilesNum: 10,

	            slugCallback: function (filename) {
                    console.log(filename);                                                                                               
	                return filename.replace('(', '_').replace(']', '_');
	            }
	        });

            $('#file-1').on('fileuploaded', function(event, data, previewId, index) {
                var response = data.response;
                console.log(response);
                var img = $('#img').val();
                $('#img').val(img + ',' + response.data.image);
            });
	    </script>

        <script type="text/javascript">
            $("#file_details").fileinput({
                theme: 'fa',
                uploadUrl: "http://yeol.yourstore/admin/product/image-view-details",
                uploadExtraData: function() {
                    return {
                        _token: $("input[name='_token']").val(),
                    };
                },
                allowedFileExtensions: ['jpg', 'png', 'gif'],
                overwriteInitial: false,
                maxFileSize:200,
                maxFilesNum: 10,

                slugCallback: function (filename) {
                    console.log(filename);                                                                                               
                    return filename.replace('(', '_').replace(']', '_');
                }
            });

            $('#file_details').on('fileuploaded', function(event, data, previewId, index) {
                var response = data.response;
                console.log(response);
                var img2 = $('#img2').val();
                $('#img2').val(img2 + ',' + response.data.image);
            });
        </script>
@endsection
