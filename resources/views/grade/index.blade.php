<html>
<head>
<title> Grade Details </title>
    <meta charset="elf-8">
    <meta name="viewpoint" contain="width=initial-width,initial-scale=1">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../public/css/index.css"> 
</head>
<body>
    <table border=1>
      <h2>Grade Details</h2>
     <a class="one" href="{{route('grade.create')}}"> Add New Grade</a>
         <tr class="two">
            <th>ID</th>
            <th>Grade Name</th>
            <th>EDIT</th>
            <th>SHOW</th>
            <th>DELETE</th>
        </tr>
        @foreach ($grades as $gr)
        <tr>
            <td>{{$gr->id}}</td>
            <td><a href="{{route('grade.show',[$gr->id])}}">{{$gr->grade_name}} ({{$gr->students->count()}})</a></td>
            <td><a class="two" href="{{route('grade.edit',[$gr->id])}}" >Edit</a></td>
            <td><a class="three" href="{{route('grade.show',[$gr->id])}}" >Show</a></td>
            <td>
                <form action="{{route('grade.destroy',[$gr->id])}}" method="post">
                    @csrf   
                    @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Do you want to delete?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>