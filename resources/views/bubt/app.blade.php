<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard | BUBT</title>
	<link rel="icon" href="img/favicon.png">
	<link rel="stylesheet" href="{{URL::to('/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{URL::to('/css/bootstrap-theme.css')}}">
	<link rel="stylesheet" href="{{URL::to('/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::to('/css/bootstrap-datetimepicker.css')}}">
	<link rel="stylesheet" href="{{URL::to('/css/sweetalert.css')}}">	
	<link rel="stylesheet" href="{{URL::to('/css/style.css')}}">
	
	
	<script src="{{ URL('js/sweetalert.min.js') }}"></script>
</head>
<body>
	<div class="dashboard">
		<div class="container">
			<div class="row navbar navbar-default">
                 <div class="col-md-2 logo">
                    <img src="img/logo.png" class="logo"/>
			     </div>
                <div class="col-md-10 main-title">
                    <h3>Bangladesh University of Business and Technology (BUBT)</h3>
                    <h4>Online Student Managment System</h4>
			    </div>             
            </div>     
		 
			<div class="row">
				<nav class="navbar navbar-default">   
                    <div class="login-as">Login as: <span>Admin</span>, <a href="{{URL::to('/logout')}}">Logout</a></div>
                </nav>
                </nav>
            </div>
		 
			<div class="row">
				<nav class="navbar navbar-default">
                   
                    
                    <div class="col-md-2 single-title">
                        <a href="{{URL::to('/departments')}}"><img src="img/icon/dept.png"/><div class="dasboard-title">Departments</div></a>
                    </div>
                    
                    <div class="col-md-2 single-title">
                        <a href="{{URL::to('/students')}}"><img src="img/icon/students.png"/><div class="dasboard-title">Students</div></a>
                    </div>
                    
                    <div class="col-md-2 single-title">
                        <a href="{{URL::to('/teachers')}}"><img src="img/icon/teachers.png"/><div class="dasboard-title">Teachers</div></a>
                    </div>
                    
                    <div class="col-md-2 single-title">
                        <a href="{{URL::to('/courses')}}"><img src="img/icon/courses.png"/><div class="dasboard-title">Courses</div></a>
                    </div>
                    
                    <div class="col-md-2 single-title">
                        <a href="{{URL::to('/courses-offer')}}"><img src="img/icon/courses-offer.png"/><div class="dasboard-title">Courses Offer</div></a>
                    </div>
                    
                    <div class="col-md-2 single-title">
                        <a href="{{URL::to('/class-routine')}}"><img src="img/icon/class-routine.png"/><div class="dasboard-title">Class Routine</div></a>
                    </div>
                    
                    <div class="col-md-2 single-title">
                        <a href="{{URL::to('/exam-routine')}}"><img src="img/icon/exam-routine.png"/><div class="dasboard-title">Exam Routine</div></a>
                    </div>
                    
                    <div class="col-md-2 single-title">
                        <a href="{{URL::to('/marks-entry')}}"><img src="img/icon/marks-insert.png"/><div class="dasboard-title">Marks Entry</div></a>
                    </div>
                    
                    <div class="col-md-2 single-title">
                        <a href="{{URL::to('/results')}}"><img src="img/icon/results.png"/><div class="dasboard-title">Results</div></a>
                    </div>
                    
                    <div class="col-md-2 single-title">
                        <a href="{{URL::to('/message')}}"><img src="img/icon/email.png"/><div class="dasboard-title">Message</div></a>
                    </div>
                    
                    <div class="col-md-2 single-title">
                        <a href="{{URL::to('/profile')}}"><img src="img/icon/profile.png"/><div class="dasboard-title">Profile</div></a>
                    </div>
                    
                    <div class="col-md-2 single-title">
                        <a href="{{URL::to('/logout')}}"><img src="img/icon/logout.png"/><div class="dasboard-title">Logout</div></a>
                    </div>
                    
                    
            
				</nav><!-- end .navbar -->
			</div><!-- end .row -->
        
        <div class="row">
            <div class="show-patient">
               
               @if (notify()->ready())
                <script>
                    swal({
                        title: "{!! notify()->message() !!}",
                        text: "{!! notify()->option('text') !!}",
                        type: "{{ notify()->type() }}",
                        @if (notify()->option('timer'))
                            timer: {{ notify()->option('timer') }},
                            showConfirmButton: false
                        @endif
                    });
                </script>
            @endif
               
            @if($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                </button>
                    @foreach($errors->all() as $error)
                    {{$error}}<br/>
                    @endforeach
                </div>
            @endif  
               
               
               
               
              <!--
                   @if(Session::get('message'))
                        <div class="alert {{Session::get('alert')}}">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                        </button>
                            {!! Session::get('message') !!}
                        </div>
                    @endif 
                    
                     @if($errors->any())
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                        </button>
                            @foreach($errors->all() as $error)
                            {{$error}}<br/>
                            @endforeach
                        </div>
                    @endif
                   -->
            </div>
        </div>

       <p></p>
            
       @yield('body')

        
    </div>
        <div class="row"> 
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="section">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="copyright">
					<p>&copy; Online Student Managment System | BUBT 2016</p>
					<p>Developed by <a target="_blank" href="http://bubt.ac.bd">CSE Dept, BUBT</a></p>
				</div>
                </div>
              </div> 
            </div>
        </div>
</div>

    <!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Start coding here -->


    <!-- Coding End -->

	<script src="{{ URL('js/jquery.min.js') }}"></script>
	<script src="{{ URL('js/moment.js') }}"></script>
	<script src="{{ URL('js/bootstrap.min.js') }}"></script>
	<script src="{{ URL('js/bootstrap-datetimepicker.js') }}"></script>
	<script src="{{ URL('js/jquery.bootstrap-touchspin.js') }}"></script>
	<script src="{{ URL('js/fileinput.min.js') }}"></script>
	<script src="{{ URL('js/pdfobject.js') }}"></script>
	
	<script src="{{ URL('js/custom.js') }}"></script>
</body>
</html>