<html>
<head>
<title></title>
</head>
 <body>
 <center>
 Todo
  <form method="post" action ="/update">
  <input type="hidden" name="id" value="{{$todo->id}}" >
   <input type="text" name="task" value="{{$todo->task}}" >
   <input type="text" name="description" value="{{$todo->description}}" ><br/>
   
  
   <input type="submit" value="Update"> 
    {{csrf_field()}}
</form>

   </center>
  </body>
</html>
