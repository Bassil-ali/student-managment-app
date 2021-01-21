
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



<!--=================================
 Main content -->
    <!-- main-content -->

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>اداره <br> <b>النتائج</b></h2>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>الفتره</th>
                        <th>القسم</th>

                        <th>الماده1</th>
                        <th>الماده2</th>
                        <th>الماده3</th>
                        <th>الماده4</th>
                        <th>الماده5</th>
                        <th>الماده6</th>
                        <th>الماده7</th>
                        <th>التاريخ</th>
                        <th>رقم الطالب</th>
                        <th>التقدير</th>
                    </tr>
                    </thead>
                    @foreach($results as $result)
                        <tbody>
                        <tr>

                            <td>{{$result->name}}</td>
                            <td>{{$result->category}}</td>
                            <td>{{$result->m1}}</td>
                            <td>{{$result->m2}}</td>
                            <td>{{$result->m3}}</td>
                            <td>{{$result->m4}}</td>
                            <td>{{$result->m5}}</td>
                            <td>{{$result->m6}}</td>
                            <td>{{$result->m7}}</td>
                            <td>{{$result->created_at}}</td>
                            <td>{{$result->student_nam}}</td>
                            <td>{{$result->r_namber}}</td>


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
                    <form action="{{route('results.store')}}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">اضف نتيجه</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>اسم النتيجه</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>القسم</label>
                                <input type="text"  name="category" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>الماده1</label>
                                <input type="text"  name="m1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>الماده2</label>
                                <input type="text"  name="m2" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>الماده3</label>
                                <input type="text"  name="m3" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>الماده3</label>
                                <input type="text"  name="m4" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>الماده4</label>
                                <input type="text"  name="m4" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>الماده5</label>
                                <input type="text"  name="m5" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>الماده6</label>
                                <input type="text"  name="m6" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>الماده7</label>
                                <input type="text"  name="m7" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="control-label">الطالب</label>

                                <select name="student_nam" class="form-control" >
                                    <!--placeholder-->
                                    <option value="" selected disabled>حدد الطالب</option>
                                    @foreach($students as $father)
                                        <option value="{{$father->namber}}">{{$father->name}}</option>
                                    @endforeach
                                </select>


                            </div>
                            <div class="form-group">
                                <label>الدرجه</label>
                                <input type="text" name="r_namber" class="form-control" required>
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


@include('layouts.footer-scripts')

</body>

</html>
