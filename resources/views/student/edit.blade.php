<html>
<head>
<title> Add New Student </title>
    <meta charset="elf-8">
    <meta name="viewpoint" contain="width=initial-width,initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/create.css">    
</head>
<body>
    <div class="container">
        <table align="center" width=40%> <tr><td>
            <h2 align="center">Add Student</h2>
            <form action="{{route('stu.update',$st->id)}}" method="post">
                @csrf
                @method('put')
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="firstname"> First Name: </label>
                                <input type="text" name="firstname" id="firstname" value="{{$st->firstname}}" class="form-control"><br>
                            </div>
                            <div class="col-sm-6">
                                <label for="lastname"> Last Name: </label>
                                <input type="text" name="lastname" id="lastname" value="{{$st->lastname}}" class="form-control"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <label for="gender"> Gender: </label><br>
                                <input type="radio" name="gender" id="male" value="male" {{$st->gender=='male'?'checked':''}} class="custom-controll-input"><label for="male">Male</label>
                                <input type="radio" name="gender" id="female" value="female"{{$st->gender=='female'?'checked':''}} class="custom-controll-input"><label for="female">Female</label><br>
                            </div>
                            <div class="col-sm-7">
                                <label for="grade"> Grade: </label>
                                <select name="grade" id="grade" class="form-control">
                                    <option value="12A" {{ $st->grade=='12A'?'selected':'' }}>12A</option>
                                    <option value="12B" {{ $st->grade=='12B'?'selected':'' }}>12B</option>
                                    <option value="12C" {{ $st->grade=='12C'?'selected':'' }}>12C</option>
                                    <option value="12D" {{ $st->grade=='12D'?'selected':'' }}>12D</option>
                                </select><br><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="school"> School: </label>
                                <input type="text" name="school" id="school" value="{{$st->school}}" class="form-control" required><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="phone"> Phone Nu: </label>
                                <input type="text" name="phone" id="phone" value="{{$st->phone}}" class="form-control" required><br>
                            </div>
                            <div class="col-sm-8">
                                <label for="email"> Email: </label>
                                <input type="text" name="email" id="email" placeholder="vijayakumarvinojan@gmail.com" value="{{$st->email}}" size=30 class="form-control" required><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="address"> Address: </label><br>
                                <textarea name="address" id="address" cols="30" rows="3" class="form-control"> {{$st->address}} </textarea><br>
                            </div>
                        </div>
                    <input type="submit" value="save" class="btn btn-success">
                    <a href="{{route('stu.index')}}"> back </a>
                    
            </form>
        </td></tr></table>
    </div>
</body>
</html>