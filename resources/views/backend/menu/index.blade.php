@extends('backend/master')
@section('backendcontent')
<div class="row" ng-app="edifycons" ng-controller="menuCtrl">
	<div class="col-md-12">
		<div class="card">
			<div class="box border inverse">
		        <div class="box-body">
		            <table id="customertable" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover dataTable" aria-describedby="datatable1_info">
		                <thead>
		                    <tr>
		                        <th>#</th>
		                        <th>Menu name</th>
		                        <th>Menu Type</th>
		                        <th>Status</th>
		                        <th>Edit</th>
		                        <th>Delete</th>
		                </tr>
		                </thead>

		                <tbody role="alert" aria-live="polite" aria-relevant="all">
		                    <?php $i = 1; ?>
		                    @foreach($records as $record)
		                        <tr>
			                        <td>{{ $i }}</td>
		                            <td>{{ $record->menu_name }}</td>
		                            <td>{{ $record->type }}</td>
		                            
			                       
				                    	<?php
						                  $record->status == "active" ? $class = "success" : $class = "danger";
						                ?>
		                			<td><span class="status btn btn-xs btn-{!! $class !!}" data-id="{!! $record->id !!}" id="">{!! ucfirst($record->status) !!}</span></td>
			                         <td><a href="/backend/menu/menu/edit/{{ $record->id }}"><span class="btn btn-xs btn-primary">Edit</span></a></td>
			                         <td><span class="btn btn-xs btn-primary delete"  data-id="{!!$record->id!!}" id="">Delete</span></td>
		                        </tr>
		                        <?php $i++; ?>
		                    @endforeach
		                </tbody>
		            </table>
		        </div>
		    </div>
		</div>
	</div>
</div>
@stop
@section('custom-footer-scriptsbackend')
<script type="text/javascript">
        $(document).ready(function(){
           
            $(document).on('click', '.delete', function(){
                var clicked = $(this);
                console.log('3');
                var id = clicked.attr('data-id');
                bootbox.confirm("Are you sure to delete this Menu?", function(result){
                    if(result == true){
                        $.ajax({
                            type: 'POST',
                            url: '{!!  route('deletemenu')  !!}',
                            data: {id:id},
                            headers: { 'X-XSRF-Token': $('meta[name="_token"]').attr('content'), },
                            dataType: 'json',
                            success:function(data){
                                if(data.status=='success'){
                                    clicked.closest('tr').hide();
                                }   
                            },
                            error:function(e){
                                console.log(e.responseText);
                                return false;
                            }
                        });/* end of ajax */
                    }/* end of result */
                });/* end of bootbox confirm */
            });/* end of delete click function */
            $(document).on('click', '.status', function(){
                console.log("5");   
                var clicked = $(this);
                var id = clicked.attr('data-id');
                bootbox.confirm("Do you really want to change this menu status?", function(result){ 
                    if(result == true){
                        $.ajax({
                            type: 'POST',
                            url: '{!! route('menustatus') !!}',
                            data: {id:id},
                            headers: { 'X-XSRF-Token': $('meta[name="_token"]').attr('content'), },
                            dataType: 'json',
                            success: function(data){
                                console.log(data);
                                if(data.success == true){
                                    var colour = "";
                                    data.status == "active" ? colour = "btn-success":colour = "btn-danger";
                                    clicked.removeClass("btn-success btn-danger").addClass(colour).text(data.status);
                                }
                            },
                            error: function(e){
                                console.log(e.responseText);
                                return false;
                            }
                        });/* end of ajax */
                    }/* end of result */
                });/* end of bootbox confirm */
            });/* end of status click function */
        }); /* end of ready function */
    </script>
@stop