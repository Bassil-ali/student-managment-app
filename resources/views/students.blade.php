
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
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>اضافه طالب</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>الرقم</th>
                        <th>الجنس</th>
                        <th>العنوان</th>
                        <th>السنه</th>



                    </tr>
                    </thead>
                    @foreach($students as $student)
                    <tbody>
                    <tr>

                        <td>{{$student->name}}</td>
                        <td>{{$student->namber}}</td>
                        <td>{{$student->sex}}</td>
                        <td>{{$student->adress}}</td>
                        <td>{{$student->year}}</td>




                    </tr>

                    </tbody>
                    @endforeach
                </table>
                <div class="clearfix">

                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{route('students.store')}}" method="POST" enctype="multipart/form-data"
                          autocomplete="true">
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Add Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>الاسم</label>
                                <input type="text"  name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>رقم الطالب</label>
                                <input type="text" name="namber" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>الجنس</label>
                                <input type="text" name="sex" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>العنوان</label>
                                <input type="text" name="adress" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <select name="year" class="form-control" >
                                    <!--placeholder-->
                                    <option value="" selected disabled>القسم</option>
                                    <option value="اول ثانوي">اول ثانوي</option>
                                    <option value="ثاني ثانوي">ثاني ثانوي</option>
                                    <option value="ثالث ثانوي ادبي">ثالث ثانوي ادبي</option>
                                    <option value="ثالث ثانوي ادبي تاريخ">ثالث ثانوي ادبي تاريخ</option>
                                    <option value="ثالث ثانوي ادبي عسكريه">ثالث ثانوي ادبي عسكريه</option>
                                    <option value="ثالث ثانوي علمي">ثالث ثانوي علمي</option>
                                    <option value="ثالث ثانوي منازل">ثالث ثانوي منازل</option>
                                    <option value="ثالث ثانوي علمي حاسوب">ثالث ثانوي علمي حاسوب</option>
                                    <option value="ثالث ثانوي علمي احياء">ثالث ثانوي علمي احياء</option>
                                    <option value="ثالث ثانوي علمي هندسيه">ثالث ثانوي علمي هندسيه</option>
                                </select>
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
                                <label>الاسم</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>رقم الطالب</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" required></textarea>
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


    </div><!-- main content wrapper end-->
</div>
</div>
</div>

<!--=================================
footer -->

@include('layouts.footer-scripts')

</body>

</html>
