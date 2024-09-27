@extends ('general.app')

@if (Session::has('save_done'))
    <div class="alert alert-success" role="alert">
        {{Session::get('save_done')}}
    </div>
@endif

@if (Session::has('delete_done'))
    <div class="alert alert-success" role="alert">
        {{Session::get('delete_done')}}
    </div>
@endif

@if (Session::has('update_done'))
    <div class="alert alert-success" role="alert">
        {{Session::get('update_done')}}
    </div>
@endif



@section('table_student_list')
<h1 class="text-center text-primary my-3">Welcome At Student List</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($allstudents as $student)
    <tr>
      <th scope="row">{{$student->studentid}}</th>
      <td>{{$student->studentname}}</td>
      <td>{{$student->studentemail}}</td>
      <td>{{$student->studentnumber}}</td>
      <td>{{$student->updated_at}}</td>
      <td class="d-flex ">

          
          <form action="{{ route('allstudent.destroy', $student->studentid) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger mx-2">DELETE</button>
            </form>
            <a href="{{ route('allstudent.edit', $student->studentid) }}" class="btn btn-primary">Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection