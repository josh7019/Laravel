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
  <h2>Contextual Classes</h2>
  <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
  <form class="form-horizontal" method="POST" action="/news/{{$news->newsId}}">
    @csrf
    @method('PUT')
    <fieldset> 
        <!-- Form Name -->
        <legend>Form Name</legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="title">標題</label>  
          <div class="col-md-4">
          <input id="title" name="title" value="{{$news->title}}" type="text" placeholder="" class="form-control input-md" required="">
            
          </div>
        </div>
        
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="content">內容</label>
          <div class="col-md-4">                     
          <textarea class="form-control" id="content" name="content" >{{$news->content}}</textarea>
          </div>
        </div>
        
        <!-- Button (Double) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="button1id"></label>
          <div class="col-md-8">
            <button id="button1id" name="ok" class="btn btn-success">修改</button>
            <button id="button2id" name="ok" class="btn btn-danger" value="cancel">取消</button>
          </div>
        </div>
        
        </fieldset>
        </form>
</div>

</body>
</html>