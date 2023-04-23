<html>
<head>
<title> View </title>
    <meta charset="elf-8">
    <meta name="viewpoint" contain="width=initial-width,initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/show.css">
</head>
<body>  
    <div class="container">
            <table border=1 align="center">
                <tr class="one"><td colspan=2>
                    <h2 align="center">{{$st->lastname}} Details</h2>
                </td></tr>
                <tr align="center">
                    <th>ID</th>
                    <td>{{$st->id}}</td>
                </tr>
                <tr align="center">
                    <th>Full Name</th>
                    <td>{{$st->firstname}} {{$st->lastname}}</td>
                </tr>
                <tr align="center">
                    <th>Gender</th>
                    <td>{{$st->gender}}</td>
                </tr>
                <tr align="center">
                    <th>Grade</th>
                    <td> <a href="{{route('grade.show',[$st->grade->id])}}">{{$st->grade->grade_name}} ({{$st->grade->students->count()}})</a></td>
                </tr>
                <tr align="center">
                    <th>School</th>
                    <td> {{$st->school}}</td>
                </tr>
                <tr align="center">
                    <th>Phone Nu</th>
                    <td> {{$st->phone}}</td>
                </tr>
                <tr align="center">
                    <th>Address</th>
                    <td>{{$st->address}}</td>
                </tr>
                <tr align="center">
                    <th>Subject</th>
                    <td>
                        @foreach($st->subjects as $sub)
                           <a href="{{route('subject.show',[$sub->id])}}"> {{$sub->subject_name}} ({{$sub->students->count()}}) </a><br>
                        @endforeach
                    </td>
                </tr>
            </table>
            <a href="{{route('stu.edit',[$st->id])}}" class="one">  Edit </a>
            <a href="{{route('stu.index')}}" class="two">Back</a>
        </div>
</body>
</html>