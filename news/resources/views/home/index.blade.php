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
  <h2>最新消息</h2>
  <p></p>
  <span class='pull-right'><a class='btn btn-success' href="/news/create">新增公告</a></span>
  <table class="table">
    <thead>
      <tr>
        <th>公告號</th>
        <th>標題</th>
        <th>最後更新時間</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
          
     @foreach ($newsList as $news)
    <tr class={{$color_class[$news->newsId%5]}}>
        <td>{{$news->newsId}}</td> 
        <td><a href="/news/{{$news->newsId}}">{{$news->title}}</a></td>
        <td style="width:200px">{{$news->updated_at}}</td>
        <td style="width:200px">
            <span class='pull-right'>
                <form method="post" action="/news/{{$news->newsId}}">
                    <a class="btn btn-info" href="/news/{{$news->newsId}}/edit"><span class="glyphicon glyphicon-pencil"></span>編輯</a> |
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-scissors"></span>刪除</button>
                </form>
            </span>
        </td>
    </tr>
     @endforeach 
      

    </tbody>
  </table>
</div>

</body>
</html>