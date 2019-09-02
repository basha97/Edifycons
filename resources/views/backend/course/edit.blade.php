@extends('backend/master')
<style>

</style>
@section('backendcontent')

<div class="container-fluid" ng-app="edifyconsCourse" ng-controller="edifyconsCourseCntrl">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Add Course</strong>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col">
                                <div class="position " data-placement="bottom-right">
                                    <div class=" alert alert-success" ng-show="successMessagebool " role="alert">
                                        <button class="close" data-dismiss="alert"></button>
                                        <strong>@{{successMessage }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Course Name</label>
                                    <input class="form-control" ng-model="form.course.course_name" type="text"
                                        placeholder="course name">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Course Category</label>
                                    <select class="form-control" id="exampleFormControlSelect1"
                                        ng-model="form.course.menu_id">
                                        <option selected>Select</option>
                                        <option ng-repeat="m in menu" value='@{{ m.id }}'>@{{ m.menu_name }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Course Image</label>
                                    <input type="file" ng-model="form.course.course_img_url" class="form-control"
                                        id="courseImage">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="ccnumber">Short Description</label>
                                    <textarea class="form-control" ng-model="form.course.course_short_description"
                                        rows="9" placeholder="Short Description.."></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="ccnumber">Long Description</label>
                                    <textarea class="form-control" ng-model="form.course.course_long_description"
                                        rows="9" placeholder="Long Description.."></textarea>
                                </div>
                            </div>
                        </div>

                        {{-- Course content section --}}
                        <div class="row">
                            <div class="col">
                                <div class="card" ng-repeat="list in form.course.course_content track by $index">
                                    <div class="card-header">

                                        <div class="row">
                                            <strong style="padding-left: 10px;">Course Content
                                                <span>@{{$index+1}}</span></strong>
                                            <div style="margin-left:auto">
                                                <a href="javascript:;" ng-click="add_content_section($index)"
                                                    ng-show=" $index== form.course.course_content.length-1"
                                                    class="btn btn-sm btn-primary" type="submit"><i
                                                        class="fa fa-dot-circle-o"></i> Add</a>
                                                <a href="javascript:;" ng-click="remove_content_section($index)"
                                                    class="btn btn-sm btn-danger" type="reset"><i class="fa fa-ban"></i>
                                                    Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Title</label>
                                                    <input class="form-control" ng-model="list.title"
                                                        type="text" placeholder="course name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Description</label>
                                                    <textarea class="form-control"
                                                        ng-model="list.description"
                                                        id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="javascript:;" ng-click="editCourseFunc(form)" class="btn  btn-primary" type="submit">
                            <i class="fa fa-dot-circle-o"></i> Submit</a>
                        <a href="javascript:;" ng-click="resetForm()" class="btn  btn-danger" type="reset">
                            <i class="fa fa-ban"></i> Reset</a>
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
    var app = angular.module('edifyconsCourse', []);
    app.controller('edifyconsCourseCntrl', function($scope,$http,$timeout) {
        
        $scope.menu = {!! json_encode($menu) !!};
        
        $scope.record = {!! json_encode($record) !!};

        $scope.form =   {
            course    :   $scope.record[0]
        }

        //Functions start here

        $('#courseImage').fileupload({
            url: '{{ route('logofileupload') }}',
            dataType: 'json',
            formData: { path:'' },
            done: function (e, data) {
                var baseurl = document.location.origin;
                var src = baseurl+'/'+data.result.files[0].url;
                console.log(src);
				$scope.form.course.course_img_url = src;
				console.log($scope.form.course.course_img_url);
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


        $scope.add_content_section  =   function(){
            console.log('add function processing');
            $scope.form.course.course_content.push({
                title : '',
                description : ''
            });
        };

        $scope.remove_content_section  =   function($index){
            console.log($index);
            $scope.form.course.course_content.splice($index,1);
        };

        $scope.editCourseFunc    =   function(data){
            console.log(data);
            $http.post('{!! route('editcoursepost') !!}',data).then(function success(e){
                console.log(e);
                if (e.data.status == true) {
                    $scope.successMessage = "Course Added Successfully";
                    $scope.successMessagebool = true;
                        $timeout(function () {
                            $scope.successMessagebool = false;
                        }, 4000);
                }
            });
        }


    });
</script>
@stop