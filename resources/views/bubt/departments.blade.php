@extends('bubt/appsingle')

@section('appsingle') 

<table class="table table-bordered table-striped">

    <tr class="success">
        <td>SL</td><td>Department Name</td><td>Short Code</td><td class="danger">Action</td>
    </tr>
    <?php $sl = 1; ?>
    @foreach($departments as $department)

    <tr>
        <td>{!! $sl !!}</td><td>{!! $department->fullname; !!}</td><td>{!! $department->sortname; !!}</td>
        <td>
            
            <a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            
        </td>
    </tr>

    <?php $sl++; ?>
    @endforeach
    <tr>
        <td colspan="5"><a href="/department/add"><i class="fa fa-plus-square" aria-hidden="true"></i> Add New</a></td>
    </tr>
    
</table>
 
@stop