<html>
<head>
<title> Subjects Details </title>
    <meta charset="elf-8">
    <meta name="viewpoint" contain="width=initial-width,initial-scale=1">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../public/css/index.css"> 
</head>
<body>
    <table border=1>
      <h2>Subject Details</h2>
     <a class="one" href="{{route('subject.create')}}"> Add New Subject</a>
         <tr class="two">
            <th>Subject Id</th>
            <th>Subject Name</th>
            <th>EDIT</th>
            <th>SHOW</th>
            <th>DELETE</th>
        </tr>
        @foreach ($subjects as $sub)
        <tr>
            <td>{{$sub->id}}</td>
            <td><a href="{{route('subject.show',[$sub->id])}}">{{$sub->subject_name}} ({{$sub->students->count()}})</a></td>
            <td><a class="two" href="{{route('subject.edit',[$sub->id])}}" >Edit</a></td>
            <td><a class="three" href="{{route('subject.show',[$sub->id])}}" >Show</a></td>
            <td>
                <form action="{{route('subject.destroy',[$sub->id])}}" method="post">
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