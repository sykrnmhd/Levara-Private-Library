@extends('schedules.layout')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Employee Schedule</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('schedules.create') }}"> Add New Shift</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Shift Start</th>
                    <th>Shift Ends</th>
                    <th>Job Scope</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schedules as $schedule)
                    <tr>
                        <td>{{ $schedule->id }}</td>
                        <td>{{ $schedule->name }}</td>
                        <td>{{ $schedule->start }}</td>
                        <td>{{ $schedule->end }}</td>
                        <td>{{ $schedule->jobscope }}</td>
                        <td>
                            <form action="{{ route('schedules.destroy',$schedule->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('schedules.edit',$schedule->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>

    </div>
@endsection
