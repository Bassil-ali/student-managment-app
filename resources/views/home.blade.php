<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.head')
</head>

<body>

<div class="wrapper">

    <!--=================================
preloader -->

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
                    <h4 class="mb-0"> Dashboard</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
        <!-- widgets -->
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-danger">

                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">اولياء الامور</p>
                                <h4>{{App\Fathers::count()}}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top">

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-warning">

                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">الطلاب</p>
                                <h4>{{App\student::count()}}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-success">

                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">جداول الحصص</p>
                                <h4>{{\App\sheet::count()}}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        </p>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>اسم التقويم</th>
                    <th>بدايه العام الدراسي</th>
                    <th>بدايه امتحانات الفتره الاولى</th>
                    <th>بدايه امتحانات الفتره الثانيه</th>



                </tr>
                </thead>
                @foreach(App\Spreed::all() as $s)
                    <tbody>
                    <tr>

                        <td>{{$s->name}}</td>
                        <td>{{$s->year}}</td>
                        <td>{{$s->d1}}</td>
                        <td>{{$s->d2}}</td>





                    </tr>

                    </tbody>
                @endforeach
            </table>
            <div class="clearfix">
            <table class="table table-striped table-hover">
                <thead>
                <h5>books</h5>
                <tr>
                    <th>العنوان </th>
                    <th>الكاتب</th>
                    <th>تاريخ الاصدار</th>



                </tr>
                </thead>
                @foreach(App\Library::all() as $l)
                    <tbody>
                    <tr>

                        <td>{{$l->adress}}</td>
                        <td>{{$l->writer}}</td>
                        <td>{{$l->date}}</td>





                    </tr>

                    </tbody>
                @endforeach
            </table>
            <div class="clearfix">

        <!--=================================
wrapper -->

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
