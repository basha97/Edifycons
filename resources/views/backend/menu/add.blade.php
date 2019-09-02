@extends('backend/master')
@section('backendcontent')
<div class="row" ng-app="edifycons" ng-controller="menuCtrl">
	<div class="col-md-12">
		<div class="card">
		
			<div class="card-body">
				<div class="form-group">
					<label for="menuname">Menu Name</label>
					<input type="text" class="form-control" id="menuname" ng-model="form.name">
				</div><br/>
				<div class="form-group">
					<label for="exampleFormControlInput1">Menu Url</label>
					<input type="text" class="form-control" id="exampleFormControlInput1" ng-model="form.url">
				</div><br/>
				<div class="form-group">
					<label for="exampleFormControlInput1">Menu Type</label>
					<select class="form-control" id="exampleFormControlSelect1"  ng-model="form.type">
						<option  ng-selected="Select">Select</option>
						<option>Main</option>
						<option>sub</option>
						<option>sub2</option>
					</select>
				</div><br/>
				<div >
					<div class="form-group" ng-show="form.type == 'sub' ||form.type == 'sub2'">
						<label for="exampleFormControlInput1">Select Main menu</label>
						<select class="form-control" id="exampleFormControlSelect1"  ng-model="form.mainmenu">
							<option selected>Select</option>
							<option ng-repeat = "con in record" value='@{{ con.id }}'>@{{ con.menu_name }}</option>
						</select>
					</div><br/>
					<div class="form-group" ng-show="form.type == 'sub2'">
						<label for="exampleFormControlInput1">Select image</label>
						<input type="file" class="form-control" id="logo">
					</div><br/>
					<div class="form-group"  ng-show="form.type == 'sub2'">
						<img src="@{{form.filepath }}" alt="nodata" width="350px" height="350px">
					</div>
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">Menu Status</label>
					<select class="form-control" id="exampleFormControlSelect1"  ng-model="form.status">
						<option selected>Select</option>
						<option value="active">Active</option>
						<option value="inactive">In active</option>
					</select>
				</div><br/>
				<a  class="btn btn-primary btn-round" ng-click="menusaves()">Save<div class="ripple-container"></div></a>

				<div class="row">
					<div class="col-md-12" data-placement="bottom-right">
						<div class=" alert alert-success" ng-show="successMessagebool " role="alert" >
							<button class="close" data-dismiss="alert"></button>
							<strong>@{{successMessage }}</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
@section('custom-footer-scriptsbackend')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<script src="{{ URL::asset('assets/js/backend/fileupload.js') }}"></script>
<script type="text/javascript">

$(document).on('click', '#logo', function() {
	console.log('5');
	
	});
</script>
<script type="text/javascript">
var app = angular.module('edifycons', []);
app.controller('menuCtrl', function($scope,$http,$timeout) {
	console.log('3');
	$scope.form ={};
	$scope.record = {!! json_encode($record) !!};
	console.log($scope.record);
	$scope.form.filepath = '';

		$('#logo').fileupload({
            url: '{{ route('logofileupload') }}',
            dataType: 'json',
            formData: { path:'' },
            done: function (e, data) {
                var baseurl = document.location.origin;
                var src = baseurl+'/'+data.result.files[0].url;
                console.log(src);
				$scope.form.filepath = src;
				console.log($scope.form.filepath);
                // $scope.form.profilepic = src;
                // $('#profileimage_path').val(src);
                // $('#in_img').attr('src',src);
            },
            progressall: function (e, data) {
            },error: function(e){
            console.log(e.responseText);
            }
	    }).prop('disabled', !$.support.fileInput)
	    .parent().addClass($.support.fileInput ? undefined : 'disabled');
	    console.log($scope.form.filepath);



	$scope.menusaves = function(){
		console.log($scope.form);
		var data = $scope.form;
		$http.post('{!! route('addmenupost') !!}',data).then(function success(e){
			console.log(e.data);
			if(e.data.status == "success"){
				$scope.form.errormessage = "";
				$scope.successMessage = "Menu Created Successfully";
				$scope.successMessagebool = true;
				$timeout(function () {
					$scope.successMessagebool = false;
				}, 2000);
				$scope.form = {};
			}

		},function error(error){
			console.log(error);
		});
	}
});
</script>
@stop