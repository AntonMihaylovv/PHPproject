@extends('./student/layout')

<div class="container mt-5">
    <div class="col-md-4">
         <form action="/search" method="get">
        <div class="form-group">
            <input type="search" name="search" class="form-control">
            <span class="form-group-btn">
            <button type="submit" class="btn btn-primary">Search</button>
            </span>
        </div>
         </form>
    </div>
    <table class="table table-striped table-bordered mt-4">
        <thead>
        <th> Name </th>
        <th> Coursework </th>
        <th> Supervisor </th>
        <th> Action </th>
        </thead>

        <tbody>

        @foreach($students as $student)
            <tr>
                <td> {{ $student->first_name }} {{ $student->last_name }}</td>
                <td> {{ $student->coursework }} </td>
                <td> {{ $student->supervisor }} </td>
                <td> <a href="{{ route('student.show', $student->id )}}" class="badge badge-info"> View </a>
                    <a href="{{ route('student.edit', $student->id )}}" class="badge badge-success"> Edit </a>
                    <form action="{{ route('student.destroy', $student->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="badge btn-danger" type="submit"> Delete </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('student/create') }}" class="btn btn-info float-right"><i class="fas fa-plus-circle"></i> Add New </a>
        </div>
    </div>
</div>
