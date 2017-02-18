<html>
<head>
<title></title>
</head>
 <body>
 <center>
 Todo
  <form method="post" action ="/multi">
   <input type="text" name="title" >
   <input type="text" name="description" ><br/>
   {{csrf_field()}}
   <input type="submit" value="Submit"> 
  
   <a href="/view">View</a>
     <form method="post" action ="/view">
   <input type="post" name="view" >

   </center>
  </body>
</html>
