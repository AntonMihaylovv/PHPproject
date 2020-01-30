@extends('./student/layout')
<body>
<div class="container mt-3">
    <form action="{{ route('student.update', $student->id) }}" method="post">
        {{csrf_field() }}
        @method('PATCH')
        <div class="row">
            <div class="col-xl-8 p-4 m-auto shadow">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-info"> Update Student </h5>
                    </div>
                    <div class="card-body">

                        {{--  print success message  --}}
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                    Session::forget('success');
                                @endphp
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                                <div class="form-group" {{ $errors->has('first_name') ? 'has-error' : ''}}>
                                    <label> First Name </label>
                                    <input type="text" name="first_name" placeholder="First Name" class="form-control" value="{{ $student->first_name }}">
                                    {!! $errors->first('first_name', '<small class="text-danger">:message</small>') !!}
                                </div>

                                <div class="form-group" {{ $errors->has('last_name') ? 'has-error' : ''}}>
                                    <label> Last Name </label>
                                    <input type="text" name="last_name" placeholder="Last Name" class="form-control" value="{{ $student->last_name }}">
                                    {!! $errors->first('last_name', '<small class="text-danger">:message </small>') !!}
                                </div>


                                <div class="form-group" {{ $errors->has('coursework') ? 'has-error' : ''}}>
                                    <label> Coursework </label>
                                    <input type="text" name="coursework" placeholder="Coursework" class="form-control" value="{{ $student->coursework }}">
                                    {!! $errors->first('coursework', '<small class="text-danger">:message </small>') !!}
                                </div>

                                <div class="form-group" {{ $errors->has('supervisor') ? 'has-error' : ''}}>
                                    <label> Supervisor </label>
                                    <input class="form-control" placeholder="Supervisor" type="text" name="supervisor" value="{{ $student->supervisor }}">
                                    {!! $errors->first('address', '<small class="text-danger">:message </small>') !!}
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success" name="submit"> Submit </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
</div>
