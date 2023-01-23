<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Schedule Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Schedule</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('schedules.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('schedules.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Employee Name:</strong>
                        <input type="string" name="name" class="form-control" placeholder="Employee Name">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Shift Start:</strong>
                        <input type="string" name="start" class="form-control" placeholder="Shift Start">
                        @error('start')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Shift End:</strong>
                        <input type="string" name="end" class="form-control" placeholder="Shift End">
                        @error('end')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jobscope:</strong><br>
                        <input type="radio" id="record" name="jobscope" value="Record Book">
                        <label for="record">Record Book</label><br>
                        <input type="radio" id="arrange" name="jobscope" value="Arrange Book">
                        <label for="arrange">Arange Book</label><br>
                        <input type="radio" id="clean" name="jobscope" value="Clean Library">
                        <label for="clean">Cleaning Library</label><br>
                        @error('jobscope')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
