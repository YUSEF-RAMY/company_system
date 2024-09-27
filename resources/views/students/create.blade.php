
@extends('general.app')

@section('create_student_form')

<h1 class="text-center text-primary my-3">Add Student</h1>

<form method="post" action="{{ route('allstudent.store') }}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Full Name</label>
      <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Phone Number</label>
        <input type="number" name="phone" class="form-control" id="exampleInputPassword1">
      </div>
  
    <button type="submit" name="save" class="btn btn-primary">Send Data</button>
  </form>
  
  @endsection