@extends('students.layout')
    
@section('content')
  
<div class="card mt-5">
  <h2 class="card-header">Edit Student</h2>
  <div class="card-body">
  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('students.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
  
    <form action="{{ route('students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')
  
        <div class="mb-3">
            <label for="inputName" class="form-label"><strong>First Name:</strong></label>
            <input 
                type="text" 
                name="first_name" 
                value="{{ $student->first_name }}"
                class="form-control @error('first_name') is-invalid @enderror" 
                id="inputName" 
                placeholder="First Name">
            @error('first_name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
		
		<div class="mb-3">
            <label for="inputName" class="form-label"><strong>Last Name:</strong></label>
            <input 
                type="text" 
                name="last_name" 
                value="{{ $student->last_name }}"
                class="form-control @error('last_name') is-invalid @enderror" 
                id="inputName" 
                placeholder="Last Name">
            @error('last_name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
  
        <div class="mb-3">
            <label for="inputDetail" class="form-label"><strong>Address:</strong></label>
            <textarea 
                class="form-control @error('address') is-invalid @enderror" 
                style="height:150px" 
                name="address" 
                id="inputDetail" 
                placeholder="Address">{{ $student->address }}</textarea>
            @error('address')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
    </form>
  
  </div>
</div>
@endsection