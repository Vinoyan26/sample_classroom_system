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
        <table align="center"> <tr><td>
        <h2 align="center">Register Student</h2>
            <form action="{{route('stu.store')}}" method="post">
                @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="firstname"> <b> First Name: </b> </label>
                                <input type="text" name="firstname" id="firstname" placeholder="Your First Name" class="form-control" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="lastname"> <b> Last Name: </b> </label>
                                <input type="text" name="lastname" id="lastname" placeholder="Your Last Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <label for="gender"> <b> Gender: </b> </label><br>
                                <input type="radio" name="gender" id="male" value="male" class="custom-controll-input"><label for="male">Male</label>
                                <input type="radio" name="gender" id="female" value="female"><label for="female" class="custom-controll-input">Female</label>
                            </div>
                            <div class="col-sm-7">
                                <label for="grade"> <b> Grade: </b> </label>
                                <select name="grade" id="grade" class="form-control">
                                    <option value="1">12A</option>
                                    <option value="2">12B</option>
                                    <option value="3">12C</option>
                                    <option value="4">12D</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="school"> <b> School: </b> </label>
                                <input type="text" name="school" id="school" placeholder="Jaffna Hindu College" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="phone"> <b> Phone Nu: </b> </label>
                                <input type="text" name="phone" id="phone" placeholder="071-*******" class="form-control" required>
                            </div>
                            <div class="col-sm-8">
                                <label for="email"> <b> Email: </b> </label>
                                <input type="text" name="email" id="email" placeholder="vijayakumarvinojan@gmail.com" size=30 class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="address"> <b> Address: </b>  </label><br>
                                <textarea name="address" id="address"  class="form-control"></textarea>
                            </div>
                        </div>
                    <a class="one" href="{{route('stu.index')}}">main</a>
                    <input type="submit" value="register" class="btn btn-success">
                    <input type="reset" value="clear" class="btn btn-danger">
            </form>
        </td></tr></table>
    </div>
</body>
</html>