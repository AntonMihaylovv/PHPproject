@extends('student/layout')
<div class="container mt-3">
    <div class="row">
        <div class="col-xl-8 p-4 m-auto shadow">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-info"> Student information </h5>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">

                            <div class="form-group">
                                <label> First Name </label>
                                <input type="text" name="first_name" disabled placeholder="First Name" class="form-control" value="{{ $student->first_name}}">
                            </div>

                            <div class="form-group">
                                <label> Last Name </label>
                                <input type="text" name="last_name" disabled placeholder="Last Name" class="form-control" value="{{ $student->last_name }}">
                            </div>

                            <div class="form-group">
                                <label> Coursework </label>
                                <input type="text" name="coursework" disabled placeholder="Coursework" class="form-control" value="{{ $student->coursework }}">
                            </div>

                            <div class="form-group">
                                <label> Supervisor </label>
                                <input class="form-control" disabled placeholder="Supervisor" type="text" name="supervisor" value="{{ $student->supervisor }}">
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <a href=" {{ route('student.index')}}" class="btn btn-danger"> Close <i class="fa fa-times-circle"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
