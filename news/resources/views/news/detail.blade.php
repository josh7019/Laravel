<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  ul{
    background-color: beige;
    border-radius: 20px
  }
  li{
    width: 95%;
    height: 100px;
  }
  </style>
</head>
<body>

<div class="container">
  <h2>最新消息</h2>
  <p></p>
    <ul>
      <li>
        <h3>標題</h3>
        <P>{{$news->title}}</P>
      </li>
      <li>
        <h3>內容</h3>
        <P>{{$news->content}}</P>
      </li>
      <li>
        <h3>發布時間</h3>
        <P>{{$news->created_at}}</P>
      </li>
      <li>
        <h3>最後更新時間</h3>
        <P>{{$news->updated_at}}</P>
      </li>
    </ul>
</div>

</body>
</html>