    
    {{-- PRODUCT DETAIL --}}
    
    {{-- @foreach ($product_details as $product_detail) --}}
        
        {{-- expr --}}
    {{-- @endforeach --}}
    {{-- Slide show modal --}}
        <div id="slide-show-modal" class="modal fade" role="dialog" >
             <div class="modal-dialog modal-lg" style="width: 500px" >
                <div class="modal-content">
                    <div class="modal-header">
                        {{-- <button type="button" class="close" data-dismiss="modal">×</button> --}}
                       <legend class="modal_title bg-dark background">Slide Show</legend>
                    </div>
                    <div class="modal-body">
                    <table class="table table-bordered table-hover table-striped" id="slides-table">
                        <thead>
                            <tr>
                                <th style="text-align: center"></th>
                            </tr>
                        </thead>
                    </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-right: 40%">
                            <span class='glyphicon glyphicon-remove' ></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    {{-- Add Detail Modal --}}
         
        <div id="add-detail-modal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg" style="width: 1000px">
                <div class="modal-content">
                    <div class="modal-header">
                        <legend class="modal_title background">New Detail</legend>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" id="add__detail_form" method="POST">
                            <div style="margin-left:30px;margin-right: 30px">
                                <div class="portlet-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class=" main-section" style=" margin-top: 5px; margin-bottom: 5px;">
                                                    {!! csrf_field() !!}
                                                    <div class="form-group">
                                                        <div class="file-loading">
                                                            <input id="file_details" type="file" name="file_details" multiple class="file" data-overwrite-initial="false" data-min-file-count="2" style="width: ">
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <table class="table table-bordered table-shadow dynamic-added-details style="margin-top:5px;" id="dynamic_field">
                                                <thead >
                                                    <tr>
                                                        <th class="bg-danger fixtext" style="padding-bottom: 45px" >Size</th>
                                                        <td>                                                
                                                            <input type="number" class="form-control size name_list" id="size_1_detail" list="list_sizes" placeholder="Enter your Size" style="height:90px;">
                                                        </td>
                                                    </tr>
                                                    <tr >
                                                        <th class="bg-warning  fixtext"  style="padding-bottom: 45px" >Color</th>
                                                        <td>
                                                            <input type="text" class="form-control color name_list" id="color_1_detail" list="list_colors" placeholder="Enter your Color"style="height:90px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="bg-info fixtext" style="padding-bottom: 45px" >Quantity</th>
                                                        <td>
                                                            <input type="number" name="quantity[]" id="quantity_1_detail" placeholder="Enter your Quantity" class="form-control name_list" style="height:90px;">
                                                        </td>
                                                    </tr>

                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="images" id="img">
                        <button type="button" class="btn btn-success add_pr_detail" data-dismiss="modal" id="add_pr_detail">
                            <span id="" class='glyphicon glyphicon-check'></span> Add
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>