<h2>Subject Name : {{$subject->subject_name}}</h2>

<html>
<head>
<title> Students Details </title>
    <meta charset="elf-8">
    <meta name="viewpoint" contain="width=initial-width,initial-scale=1">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../public/css/index.css"> 
</head>
<body>
    <table border=1>
        No of students {{$subject->students->count()}}
         <tr class="two">
            <th>Student Id</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>GENDER</th>
            <th>GRADE</th>
            <th>SCHOOL</th>
            <th>PHONE NO</th>
            <th>EMAIL</th>
            <th>ADDRESS</th>
            <th>ADDRESS</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach ($subject->students as $st)
        <tr>
            <td>{{$st->id}}</td>
            <td><a href="{{route('stu.show',[$st->id])}}">{{$st->firstname}}</a></td>
            <td>{{$st->lastname}}</td>
            <td>{{$st->gender}}</td>
            <td><a href="{{route('grade.show',[$st->grade->id])}}">{{$st->grade->grade_name}}({{$st->grade->students->count()}})<a></td>
            <td>{{$st->school}}</td>
            <td>{{$st->phone}}</td>
            <td>{{$st->email}}</td>
            <td>{{$st->address}}</td>
            <td><a class="two" href="{{route('stu.edit',[$st->id])}}" >Edit</a></td>
            <td><a class="three" href="{{route('stu.show',[$st->id])}}" >Show</a></td>
            <td>
                <form action="{{route('stu.destroy',[$st->id])}}" method="post">
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