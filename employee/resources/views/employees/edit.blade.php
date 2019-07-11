<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" >
    <form class="form-horizontal" method="POST" action="/employees/{{$emp->id}}">
        @csrf
        @method('PUT')
        <fieldset>
        
        <!-- Form Name -->
        <legend>add</legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="firstname">firstname:</label>  
          <div class="col-md-4">
          <input id="firstname" name="firstname" value='{{$emp->firstname}}' type="text" placeholder="" class="form-control input-md">
            
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="lastname">lastname:</label>  
          <div class="col-md-4">
          <input id="lastname" name="lastname" value='{{$emp->lastname}}' type="text" placeholder="" class="form-control input-md">
            
          </div>
        </div>
        
        <!-- Button (Double) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for=""></label>
          <div class="col-md-8">
            <button id="" name="okOrCancel" type="subbmit" class="btn btn-success">修改</button>
            <button id="" name="okOrCancel" type="subbmit"  class="btn btn-danger">取消</button>
          </div>
        </div>
        
        </fieldset>
        </form>
        
</div>

</body>
</html>