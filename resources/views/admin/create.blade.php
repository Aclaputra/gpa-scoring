<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add student Form - Laravel 8 CRUD</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>Add student</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('home.index') }}"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>student Username:</strong>
<input type="text" name="UserName" class="form-control" placeholder="required">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>student Email:</strong>
<input type="text" name="UserEmail" class="form-control" placeholder="required">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>student Name:</strong>
<input type="text" name="StudentName" class="form-control" placeholder="required">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>student Semester:</strong>
<input type="text" name="StudentSemester" class="form-control" placeholder="required">
</div>
</div>


<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</form>
</body>
</html>
