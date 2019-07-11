<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>新增消息</h2>
  <p></p>
  <form class="form-horizontal" method="POST" action="/news">
    @csrf    
    <fieldset>
        
        <!-- Form Name -->
        
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="title">標題</label>  
          <div class="col-md-4">
          <input id="title" name="title" type="text" placeholder="" class="form-control input-md">
            
          </div>
        </div>
        
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="content">內容</label>
          <div class="col-md-4">                     
            <textarea class="form-control" id="content" name="content"></textarea>
          </div>
        </div>
        
        <!-- Button (Double) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="button1id"></label>
          <div class="col-md-8">
            <button id="button1id" name="ok" class="btn btn-success">新增</button>
            <button id="button2id" name="ok" class="btn btn-danger" value="cancel">取消</button>
          </div>
        </div>
        
        </fieldset>
        </form>
</div>

</body>
</html>