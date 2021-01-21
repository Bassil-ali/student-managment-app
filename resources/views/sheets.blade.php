
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
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>اضف جدول </span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>القسم</th>
                        <th>الشهر</th>
                        <th>السنه</th>
                        <th>السبت</th>
                        <th>الاحد</th>
                        <th>الاثنين</th>
                        <th>الثلاثاء</th>
                        <th>الاربعاء</th>
                        <th>الخميس</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($sheets as $sheet)
                        <td>{{$sheet->name}}</td>
                        <td>{{$sheet->category}}</td>
                        <td>{{$sheet->monht}}</td>
                        <td>{{$sheet->year}}</td>
                        <td>{{$sheet->Saturday}}</td>
                        <td>{{$sheet->Sunday}}</td>
                        <td>{{$sheet->Tuesday}}</td>
                        <td>{{$sheet->Wednesday}}</td>
                        <td>{{$sheet->Thursday}}</td>
                        <td>{{$sheet->Thursday}}</td>


                        @endforeach
                    </tr>

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
                    <form action="{{route('sheets.store')}}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Add Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>الاسم</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <select name="category" class="form-control" >
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


                            <div class="form-group">
                                <label>الشهر</label>
                                <input type="text" name="month" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>السنه</label>
                                <input type="text" name="year" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>السبت</label>
                                <input type="text" name="Saturday" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>الاحد</label>
                                <input type="text" name="Sunday" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>الاثنين</label>
                                <input type="text" name="Monday" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>الثلاثاء</label>
                                <input type="text" name="Tuesday" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>الاربعاء</label>
                                <input type="text" name="Wednesday" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>الخميس</label>
                                <input type="text" name="Thursday" class="form-control" required>
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
