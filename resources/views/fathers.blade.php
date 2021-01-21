
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    @include('layouts.head')
</head>
<body>
<div class="wrapper">

    <div id="pre-loader">
        <img src="assets/images/pre-loader/loader-01.svg" alt="">
    </div>

    <!--=================================
preloader -->

@include('layouts.main-header')

@include('layouts.main-sidebar')

<!--=================================
 Main content -->
    <!-- main-content -->
    <div class="content-wrapper">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">

                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Employees</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>اضف ولي امر</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>اسم الابن</th>
                        <th>الهاتف</th>
                        <th>المهنه</th>
                        <th>العنوان</th>
                        <th>الالبريد الالكتروني</th>
                        <th>صله القرابه</th>
                        <th>وسيله الدفع</th>
                        <th>رقم وسيله الدفع</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($users as $student)
                            @if($student->admin ==1)
                                @else
                        <td>{{$student->name}}</td>
                        <td>{{$student->student_nam}}</td>
                        <td>{{$student->phone}}</td>
                                <td>{{$student->work}}</td>
                                <td>{{$student->adress}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->grap}}</td>
                                <td>{{$student->cash_i}}</td>
                                <td>{{$student->cash}}</td>


                    </tr>
                    @endif
                    @endforeach
                    </tbody>
                </table>
                <div class="clearfix">

                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('fathers.store') }}" method="POST">
                        {{ csrf_field() }}

                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Add Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <label for="inputName" class="control-label">الطالب</label>

                            <select name="student_nam" class="form-control" >
                                <!--placeholder-->
                                <option value="" selected disabled>حدد الطالب</option>
                                @foreach($students as $father)
                                    <option value="{{$father->name}}"> {{$father->name}}</option>
                                @endforeach
                            </select>
                            <div class="form-group">
                                <label>العمل</label>
                                <input type="text" name="work" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>العنوان</label>
                                <input type="text" name="adress" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>الايميل</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>القرابه</label>
                                <input type="text" name="grap" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>وسيله الدفع</label>
                                <input type="text" name="cash_i" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>رقم الوسيله</label>
                                <input type="text" name="cash" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>كلمه السر</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">



                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-success" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="form-group">

                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-info" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Delete Modal HTML -->
        <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>

                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>

            <!--=================================
 footer -->

        @include('layouts.footer')
    </div><!-- main content wrapper end-->
</div>
</div>
</div>

<!--=================================
footer -->

@include('layouts.footer-scripts')

</body>

</html>
