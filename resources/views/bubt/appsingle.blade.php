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
			<div class="row">
                 <div class="col-md-2 logo">
                    <img src="img/logo.png" class="logo"/>
			     </div>
                <div class="col-md-10 main-title">
                    <h2>Bangladesh University of Business and Technology (BUBT)</h2>
                    <h3>Online Student Managment System</h3>
			    </div>             
            </div>     
		 
			<div class="row">
                
                <div class="col-md-2">	
                  
                <ul class="nav nav-stacked">
                
                    
                <li class="nav-header single-item"> 
                    <a class="singleapp-alink" href="{{URL::to('/dashboard')}}">
                        <img src="img/icon/dashboard.png" class="singleapp-icon" />
                        <div class="appsingle-dasboard-title">Dashboard </div></a></li>
                
                    
                <li class="nav-header single-item"> 
                    <a class="singleapp-alink" href="#" data-toggle="collapse" data-target="#deptMenu">
                        <img src="img/icon/dept.png" class="singleapp-icon" />
                        <div class="appsingle-dasboard-title">Departments <i class="glyphicon glyphicon-chevron-right"></i></div>
                    </a>
                    <ul class="nav nav-stacked collapse" id="deptMenu">
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-plus"></i> Create</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-eye-open"></i> Read</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-edit"></i> Update</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
                    </ul>
                </li>
                    
                <li class="nav-header single-item"> 
                    <a class="singleapp-alink" href="#" data-toggle="collapse" data-target="#studentMenu">
                        <img src="img/icon/students.png" class="singleapp-icon" />
                        <div class="appsingle-dasboard-title">Students <i class="glyphicon glyphicon-chevron-right"></i></div>
                    </a>
                    <ul class="nav nav-stacked collapse" id="studentMenu">
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-plus"></i> Create</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-eye-open"></i> Read</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-edit"></i> Update</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
                    </ul>
                </li>
                    
                <li class="nav-header single-item"> 
                    <a class="singleapp-alink" href="#" data-toggle="collapse" data-target="#teacherMenu">
                        <img src="img/icon/teachers.png" class="singleapp-icon" />
                        <div class="appsingle-dasboard-title">Teachers <i class="glyphicon glyphicon-chevron-right"></i></div>
                    </a>
                    <ul class="nav nav-stacked collapse" id="teacherMenu">
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-plus"></i> Create</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-eye-open"></i> Read</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-edit"></i> Update</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
                    </ul>
                </li>
                    
                <li class="nav-header single-item"> 
                    <a class="singleapp-alink" href="#" data-toggle="collapse" data-target="#coursesMenu">
                        <img src="img/icon/courses.png" class="singleapp-icon" />
                        <div class="appsingle-dasboard-title">Courses <i class="glyphicon glyphicon-chevron-right"></i></div>
                    </a>
                    <ul class="nav nav-stacked collapse" id="coursesMenu">
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-plus"></i> Create</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-eye-open"></i> Read</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-edit"></i> Update</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
                    </ul>
                </li>
                    
                <li class="nav-header single-item"> 
                    <a class="singleapp-alink" href="#" data-toggle="collapse" data-target="#courses-offer">
                        <img src="img/icon/courses-offer.png" class="singleapp-icon" />
                        <div class="appsingle-dasboard-title">Courses Offer <i class="glyphicon glyphicon-chevron-right"></i></div>
                    </a>
                    <ul class="nav nav-stacked collapse" id="courses-offer">
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-plus"></i> Create</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-eye-open"></i> Read</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-edit"></i> Update</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
                    </ul>
                </li>
                    
                <li class="nav-header single-item"> 
                    <a class="singleapp-alink" href="#" data-toggle="collapse" data-target="#class-routine">
                        <img src="img/icon/class-routine.png" class="singleapp-icon" />
                        <div class="appsingle-dasboard-title">Class routine <i class="glyphicon glyphicon-chevron-right"></i></div>
                    </a>
                    <ul class="nav nav-stacked collapse" id="class-routine">
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-plus"></i> Create</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-eye-open"></i> Read</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-edit"></i> Update</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
                    </ul>
                </li>
                    
                <li class="nav-header single-item"> 
                    <a class="singleapp-alink" href="#" data-toggle="collapse" data-target="#exam-routine">
                        <img src="img/icon/exam-routine.png" class="singleapp-icon" />
                        <div class="appsingle-dasboard-title">Exam Routine <i class="glyphicon glyphicon-chevron-right"></i></div>
                    </a>
                    <ul class="nav nav-stacked collapse" id="exam-routine">
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-plus"></i> Create</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-eye-open"></i> Read</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-edit"></i> Update</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
                    </ul>
                </li>
                    
                <li class="nav-header single-item"> 
                    <a class="singleapp-alink" href="#" data-toggle="collapse" data-target="#marks-entry">
                        <img src="img/icon/marks-insert.png" class="singleapp-icon" />
                        <div class="appsingle-dasboard-title">Marks Entry <i class="glyphicon glyphicon-chevron-right"></i></div>
                    </a>
                    <ul class="nav nav-stacked collapse" id="marks-entry">
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-plus"></i> Create</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-eye-open"></i> Read</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-edit"></i> Update</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
                    </ul>
                </li>
                    
                <li class="nav-header single-item"> 
                    <a class="singleapp-alink" href="#" data-toggle="collapse" data-target="#results">
                        <img src="img/icon/results.png" class="singleapp-icon" />
                        <div class="appsingle-dasboard-title">Results <i class="glyphicon glyphicon-chevron-right"></i></div>
                    </a>
                    <ul class="nav nav-stacked collapse" id="results">
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-plus"></i> Create</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-eye-open"></i> Read</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-edit"></i> Update</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
                    </ul>
                </li>
                    
                <li class="nav-header single-item"> 
                    <a class="singleapp-alink" href="#" data-toggle="collapse" data-target="#message">
                        <img src="img/icon/email.png" class="singleapp-icon" />
                        <div class="appsingle-dasboard-title">Message <i class="glyphicon glyphicon-chevron-right"></i></div>
                    </a>
                    <ul class="nav nav-stacked collapse" id="message">
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-plus"></i> Create</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-save"></i> Inbox</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-road"></i> Outbox</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-send"></i> Sent</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
                    </ul>
                </li>
                    
                
            </ul>
                    
                </div>
                <div class="col-md-10">
                
                  @yield('appsingle')
                    
                    
                    
                    
                    
                    
                </div>
                
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