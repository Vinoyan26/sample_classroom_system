<html>
<head>
<title> Grade Details </title>
    <meta charset="elf-8">
    <meta name="viewpoint" contain="width=initial-width,initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/show.css">
</head>
    <body>
    <h2>Grade : {{$grades->grade_name}}</h2>
    NO of students {{$grades->students->count()}}
    <table border=1><tr>
        <th>Student ID</th>
        <th>NAME</th>
        <th>GENDER</th>
        <th>SCHOOL</th>
        <th>PHONE NO</th>
        <th>EMAIL</th>
        <th>ADDRESS</th>
        <th>Subjects</th>
        <th>EDIT</th>
        <th>DELETE</th></tr>
            @foreach($grades->students as $st)
            <tr>
                <td>{{$st->id}}</td>
                <td> <a href="{{route('stu.show',[$st->id])}}">{{$st->firstname}}{{$st->lastname}} </a></td>
                <td>{{$st->gender}}</td>
                <td>{{$st->school}}</td>
                <td>{{$st->phone}}</td>
                <td>{{$st->email}}</td>
                <td>{{$st->address}}</td>
                <td>
                    @foreach($st->subjects as $sub)
                        <a href="{{route('subject.show',[$sub->id])}}">{{$sub->subject_name}} ({{$sub->students->count()}}) </a><br>
                    @endforeach
                </td>
                <td><a class="two" href="{{route('stu.edit',[$st->id])}}" >Edit</a></td>
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