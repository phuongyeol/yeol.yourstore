@extends('admin.layouts.master')
@section('header')
	<link href="https://fonts.googleapis.com/css?family=Francois+One|Roboto+Mono" rel="stylesheet">
	<link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="{{ asset('/js/cropit.js') }}"></script>
	
    <style type="text/css">
    	legend{
				font-family: 'Francois One', sans-serif;
				text-align: center;
				font-size: 36px;
		}
        
		.elecenter{
			 margin-left: 46%;
		}

		.cropit-preview {
        background-color: #f8f8f8;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 150px;
        height: 150px;
      }

      .cropit-preview-image-container {
        cursor: move;
      }

      .image-size-label {
        margin-top: 10px;
      }

      input {
        display: block;
      }

      button[type="submit"] {
        margin-top: 10px;
      }

      #result {
        margin-top: 10px;
        width: 900px;
      }

      #result-data {
        display: block;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        word-wrap: break-word;
      }
    </style>
@endsection
	
@section('content')
	<div class="card-body table-responsive">
    	<legend >Danh Sách Người dùng</legend>
	        <div class="card-tools">
	            <button type="button" class="btn btn-primary user-create elecenter" data-toggle="modal" data-target="#create-item">Add New User <i class="fa fa-plus-square" ></i></button><br>
	        </div><br> 

	    {{-- Table list User --}}
      	<table class="table table-bordered table-hover table-striped" id="users-table">
	        <thead  class="thead-dark">
	            <tr>
	                <th>Id</th>
	                <th style="width: 15%">Avatar</th>
	                <th style="width: 9%">Name</th>
	                <th>Position</th>
	                <th style="width: 25%">Description</th>
	                <th>Username</th>
	                <th>Email</th>
	                <th style="width: 15%">Action</th>
	            </tr>
	        </thead>
      	</table>
      	{{-- Table Show Detail User --}}
      	<div id="show-details-user" class="modal fade" role="dialog">
              <div class="modal-dialog ">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    {{-- Title --}}
                    <legend class="modal_title bg-dark">Information</legend>
                  </div>
                    <table class="table table-striped table-responsive">
                            <tr>
                                <th>Avatar</th>
                                <th><img id="show-avatar" class="img-fluid img-circle" src="" style="width: 200px; height: auto; margin-left: 10%"> </th>
                            </tr>
                            <tr>
                              <th>Name</th>
                              <th id="show-name"></th>
                            </tr>
                            <tr>
                                <th>Position</th>
                                <th><span id="show-position""></span></th>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <th><span id="show-description"></span></th>
                            </tr>
                            <tr>
                              <th>Username</th>
                              <th><span id="show-username"></span></th>
                            </tr>
                            <tr>
                              <th>Email</th>
                              <th><span id="show-email"></span></th>
                            </tr>
                            <tr>
                              <th>Mobile</th>
                              <th><span id="show-mobile"></span></th>
                            </tr>
                            <tr>
                              <th>Address</th>
                              <th><span id="show-address"></span></th>
                            </tr>
                            <tr>
                              <th>Created at</th>
                              <th><span id="show-created_at"></span></th>
                            </tr>
                    </table>  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger elecenter" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
        </div>
        {{-- Add Modal --}}
        <div id="add-modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" style="width: 1000px; margin-left: 30%;">
            <div class="modal-content">
                <div class="modal-header">
                    <legend class="modal_title bg-dark">Add New User</legend>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" id="add_form" method="POST">
                        {{-- <div class="container"> --}}
                        <div style="margin-left:30px;margin-right: 30px">
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                      <div class=" form-group">
                                        <label>Avatar</label>
                                        <form action="#">
                                          <div class="image-editor">
                                            <input type="file" class="cropit-image-input">
                                            <div class="cropit-preview"></div>
                                            <div class="image-size-label">
                                              Resize image
                                            </div>
                                            <input type="range" class="cropit-image-zoom-input">
                                            <input type="hidden" name="image-data" class="hidden-image-data" />
                                            <button type="submit" class="btn-info">Submit</button>
                                          </div>
                                        </form>

                                      <div id="result">
                                        <code>$form.serialize() =</code>
                                        <code id="result-data"></code>
                                      </div>
                                      </div>
                                    	<div class=" form-group">
                                        <label>Avatar</label>
                                    		<input type="text" class="form-control"  name="add-avatar" id="add-avatar" placeholder="Input Avatar">
                                    	</div>
                  										<div class="form-group">
                  											<label for="">Username</label>
                  											<input type="text" class="form-control" id="add-username" placeholder="Input Username" name="add-username"></input>
                  										</div>
                                                          <div class="form-group">
                  											<label for="">Password</label>
                  											<input type="password" class="form-control" id="add-password" placeholder="Input Password" name="add-password">
                  										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                      	<div class="form-group">
                  											<label for="">Name</label>
                  											<input type="text" class="form-control" id="add-name" placeholder="Input Name" name="add-name"></input>
                  										</div>
                  										{{-- Position --}}
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-list font-green" aria-hidden="true"></i>
                                                    <span class="caption-subject font-green bold">Position</span>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <select class="form-control" name="add-position-id" id="add-position-id" >
                                                  @if (count($positions)>0) 
	                                                  @foreach ($positions as $position)
	                                                      <option value="{{$position->id}}">{{$position->name_pos}}</option>
	                                                  @endforeach 
                                                  @endif
                                                </select>
                                             </div>
                                        </div>
                    										<div class="form-group">
                    											<label for="">Mobile</label>
                    											<input type="number" class="form-control" id="add-mobile" placeholder="Input Mobile" name="add-mobile"></input>
                    										</div>
                    										 <div class="form-group">
                    											<label for="">Email</label>
                    											<input type="email" class="form-control" id="add-email" placeholder="Input Email" name="add-email"></input>
                    										</div>
                    										<div class="form-group">
                    											<label for="">Address</label>
                    											<textarea type="text" class="form-control" id="add-address" placeholder="Input Address" name="add-address" style="height: 250px;"></textarea>
                    										</div>
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
                    </form>
                    <div class="modal-footer">
                        {{-- <input type="hidden" name="images" id="img"> --}}
                        <button type="button" class="btn btn-success add-submit" data-dismiss="modal" id="add-submit">
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
	
@endsection

@section('footer')
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js"></script>
	    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
	    {{-- JS User --}}
	    <script src="{{ asset('js') }}/user.js"></script>
		
		{{-- Cropit --}}
     <script>
      $(function() {
        $('.image-editor').cropit();

        $('form').submit(function() {
          // Move cropped image data to hidden input
          var imageData = $('.image-editor').cropit('export');
          $('.hidden-image-data').val(imageData);

          // Print HTTP request params
          var formValue = $(this).serialize();
          $('#result-data').text(formValue);

          // Prevent the form from actually submitting
          return false;
        });
      });
    </script>
@endsection