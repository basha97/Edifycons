<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
    <br>
   
    

    <div class="row" style="margin-top: 47px;">
        <section class="col">
            <div class="card">
                <div class="card-header" style="background-color: #007bff;">
                    <h5 style="text-align: center;font-weight: 800;color: white;">Edifycons Admin Panel</h5>
                </div>
                <article class="card-body">
                   {!! Form::open(array('url' =>route('loginpost'))) !!}
                        <div class="form-group">
                            <label>Username</label>
                            {!! Form::text('email','',array('placeholder'=>'Email','class'=>'form-control','autofocus')) !!}
                            @if ($errors->has('email'))
                            <div class="form-control is-invalid">{!! $errors->first('email') !!}</div>
                            @endif
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <label>Password</label>
                            {!! Form::password('password', array('placeholder'=>'Password','class'=>'form-control')) !!}
                            @if ($errors->has('password'))
                            <div class="validation-error errorActive">{!! $errors->first('password') !!}</div>
                            @endif
                        </div> <!-- form-group// -->
                        <!-- form-group// -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Login </button>
                        </div> <!-- form-group// -->
                        @if(Session::has("msg"))
                        <div class="validation-error errorActive">{!! Session::get("msg") !!}</div>
                        @endif
                    {!! Form::close() !!}
                </article>
            </div> <!-- card.// -->

        </section> 
    </div> <!-- row.// -->

</div>
