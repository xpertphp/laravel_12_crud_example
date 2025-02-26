@extends('students.layout')
   
@section('content')
  
<div class="card mt-5">
  <h2 class="card-header">Laravel 12 CRUD Example Tutorial - xpertphp.com</h2>
  <div class="card-body">
          
        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession
  
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('students.create') }}"> <i class="fa fa-plus"></i> Create New Student</a>
        </div>
  
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>
  
            <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->address }}</td>
                    <td>
                        <form action="{{ route('students.destroy',$student->id) }}" method="POST">
             
                            <a class="btn btn-info btn-sm" href="{{ route('students.show',$student->id) }}"><i class="fa-solid fa-list"></i> Show</a>
              
                            <a class="btn btn-primary btn-sm" href="{{ route('students.edit',$student->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
             
                            @csrf
                            @method('DELETE')
                
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No data Found.</td>
                </tr>
            @endforelse
            </tbody>
  
        </table>
        
        {!! $students->links() !!}
  
  </div>
</div>  
@endsection