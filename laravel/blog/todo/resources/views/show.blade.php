<html>
    <body>
    <center>
        @if(isset($todos))
        <table>
            <tr>
                <th>Id</th>
                <th>Title</th>
                  <th>description</th>
            </tr>
            @foreach($todos as $todo)
                <tr>
                    <td>{{$todo->id}}</td>
                    <td>{{$todo->task}}</td>
                    <td>{{$todo->description}}</td>
                    <td><a href="/delete/{{$todo->id}}">delete</a></td>
                    <td><a href="/edit/{{$todo->id}}">edit</a></td>
                </tr>
            @endforeach
        </table>
        @endif
      </center>
    </body>
</html>