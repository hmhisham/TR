@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/prism/prism.css') }}" rel="stylesheet">
    <!---Internal Owl Carousel css-->
    <link href="{{ URL::asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <!---Internal  Multislider css-->
    <link href="{{ URL::asset('assets/plugins/multislider/multislider.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">s

    <link href="{{ URL::asset('assets/plugins/datatable/css/format_style.css') }}" rel="stylesheet">
    @endsection
@section('title')
   الشروحات
@stop
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">تفاصيل الحاويات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                اضافة شرح حاوية </span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session()->has('edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('edit') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-outline-primary waves-effect" data-effect="effect-scale" data-toggle="modal"
                            href="#modaldemo8"> اضافة بيانات </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap table-hover " data-page-length='50'>
                            <thead>
                                <tr>
                                    <th class=" border-bottom-0"> # </th>
                                    <th class="border-bottom-0">رقم الحاوية</th>
                                    <th class="border-bottom-0">تاريخ الوصول</th>
                                    <th class="border-bottom-0">تاريخ الاستلام</th>
                                    <th class="border-bottom-0">الرصيف</th>
                                    <th class="border-bottom-0">الحالة</th>
                                    <th class="border-bottom-0">الحجم</th>
                                    <th class="border-bottom-0">الخط</th>
                                    <th class="border-bottom-0">التاجر</th>
                                    <th class="border-bottom-0">اسم المستلم</th>
                                    <th class="border-bottom-0">الشرح</th>
                                    <th class="border-bottom-0">العمليات</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php $i = 0; ?>
                                @foreach ($Detailss as $x)
                                    <?php $i++; ?>
                                    <tr>

                                        <td>{{ $i }}</td>
                                        <td>{{ $x->Container }}</td>
                                        <td>{{ $x->Arrival_Date }}</td>
                                        <td>{{ $x->Due_date }}</td>
                                        <td>{{ $x->Berth }}</td>
                                        <td>{{ $x->section }}</td>
                                        <td>{{ $x->Size }}</td>
                                        <td>{{ $x->Line }}</td>
                                        <td>{{ $x->Merchant }}</td>
                                        <td>{{ $x->Name_emp }}</td>
                                        <td>{{ $x->note }}</td>

                                        <td>
                                            <button class="btn btn-outline-success btn-sm" data-id="{{ $x->id }}"
                                                data-Container="{{ $x->Container }} "
                                                data-Arrival_Date="{{ $x->Arrival_Date }}"
                                                data-Due_date="{{ $x->Due_date }}" data-section="{{ $x->section }}"
                                                data-Size="{{ $x->Size }}" data-Line="{{ $x->Line }}"
                                                data-Merchant="{{ $x->Merchant }}" data-Name_emp="{{ $x->Name_emp }}"
                                                data-note="{{ $x->note }}" data-Berth="{{ $x->Berth }}" data-toggle="modal"
                                                data-target="#exampleModal2">تعديل</button>


                                            <button class="btn btn-outline-danger btn-sm " data-id="{{ $x->id }}"
                                                data-Container="{{ $x->Container }}" data-toggle="modal"
                                                data-target="#modaldemo9">حذف</button>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>


            </div>


        </div>


        <!-- Basic modal -->
        <div class="modal" id="modaldemo8">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title"> اضافة بيانات </h6><button aria-label="Close" class="close"
                            data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('detailss.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="divider mt-2 mb-1"></div>
                            <div class="form-row align-items-center  ">

                                <div class="col-lg-3 col-md-6 col-sm-12 p-1 ">
                                    <label for="exampleInputEmail1">رقم الحاوية</label>
                                    <input type="text" class="form-control" id="Container" name="Container">
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 p-1 ">
                                    <label for=" example-date-input">تاريخ الوصول</label>
                                    <input class="form-control" type="date" value="{{ date('') }}" id="Arrival_Date"
                                        name="Arrival_Date">
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 p-1 ">
                                    <label for="example-date-input">تاريخ استلام</label>
                                    <input class="form-control" type="date" value="{{ date('') }}" id="Due_date"
                                        name="Due_date">
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-12 p-1 ">
                                    <label for="exampleInputEmail1">الرصيف</label>
                                    <input type="text" class="form-control" id="Berth" name="Berth">
                                </div>
                            </div>
                            <div class="form-row align-items-center  ">
                                <div class="col-lg-3 col-md-6 col-sm-12 p-1  ">
                                    <label for="exampleInputEmail1">الحالة</label>
                                    <select class="form-control" id="section" name="section">
                                        <option>مستلم</option>
                                        <option>غير مستلم</option>
                                    </select>

                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 p-1 ">
                                    <label for="exampleInputEmail1">الحجم</label>

                                    <select class="form-control" id="Size" name="Size">
                                        <option>40</option>
                                        <option>20</option>
                                        <option>FLAT</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 p-1">
                                    <label for="exampleInputEmail1">الخط</label>
                                    <input type="text" class="form-control" id="Line" name="Line">
                                </div>


                                <div class="col-lg-3 col-md-6 col-sm-12 p-1">
                                    <label for="exampleInputEmail1">اسم التاجر</label>
                                    <select name="Merchant" id="Merchant" class="form-control" required>
                                        <option value="" selected disabled> --اختيار--</option>
                                        @foreach ($Merchantt as $Merchant)
                                            <option value="{{ $Merchant->Merchant }}">{{ $Merchant->Merchant }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="form-row align-items-center  ">
                                <div class="col-lg-3 col-md-6 col-sm-12 p-1">

                                    <label for="exampleInputEmail1">اسم المستلم</label>
                                    <input type="text" class="form-control" id="Name_emp" name="Name_emp">
                                </div>
                                <div class="col-lg-9 col-md-6 col-sm-12 p-1">
                                    <label for="exampleFormControlTextarea1">الشرح</label>
                                    <textarea class="form-control" id="note" name="note" rows="5"></textarea>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer ml-auto ">
                        <button type="submit" class="btn btn-success text-right">تاكيد</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    </div>

                    </form>

                </div>
            </div>
        </div>
        <!-- End Basic modal -->

        <!-- edit -->
        <div class="modal" id="exampleModal2">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title"> اضافة بيانات </h6><button aria-label="Close" class="close"
                            data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">



                        <form action="detailss/update" method="post">
                            {{ method_field('patch') }}
                            {{ csrf_field() }}
                            <div class="divider mt-2 mb-1"></div>
                            <form class="row">

                                <div class="form-row align-items-center  ">
                                    <input type="hidden" name="id" id="id" value="">
                                    <div class="col-lg-3 col-md-6 col-sm-12 p-1 ">
                                        <label for="exampleInputEmail1">رقم الحاوية</label>
                                        <input type="text" class="form-control" id="Container" name="Container">
                                    </div>


                                    <div class="col-lg-3 col-md-6 col-sm-12 p-1 ">
                                        <label for="example-date-input">تاريخ الوصول</label>
                                        <input class="form-control" type="date" value="{{ date('') }}"
                                            id="Arrival_Date" name="Arrival_Date">
                                    </div>


                                    <div class="col-lg-3 col-md-6 col-sm-12 p-1 ">
                                        <label for="example-date-input">تاريخ استلام</label>
                                        <input class="form-control" type="date" value="{{ date('') }}" id="Due_date"
                                            name="Due_date">
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-12 p-1 ">
                                        <label for="exampleInputEmail1">الرصيف</label>
                                        <input type="text" class="form-control" id="Berth" name="Berth">
                                    </div>
                                </div>
                                <div class="form-row align-items-center  ">
                                    <div class="col-lg-3 col-md-6 col-sm-12 p-1  ">
                                        <label for="exampleInputEmail1">الحالة</label>
                                        <select class="form-control" id="section" name="section">
                                            <option>مستلم</option>
                                            <option>غير مستلم</option>
                                        </select>

                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 p-1 ">
                                        <label for="exampleInputEmail1">الحجم</label>

                                        <select class="form-control" id="Size" name="Size">
                                            <option>40</option>
                                            <option>20</option>
                                            <option>FLAT</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 p-1">
                                        <label for="exampleInputEmail1">الخط</label>
                                        <input type="text" class="form-control" id="Line" name="Line">
                                    </div>


                                    <div class="col-lg-3 col-md-6 col-sm-12 p-1">


                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">التاجر</label>
                                        <select name="Merchant" id="Merchant" class="custom-select my-1 mr-sm-2" required>
                                            @foreach ($Merchantt as $x)
                                                <option>{{ $x->Merchant }}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                </div>



                                <div class="form-row align-items-center  ">
                                    <div class="col-lg-3 col-md-6 col-sm-12 p-1">

                                        <label for="exampleInputEmail1">اسم المستلم</label>
                                        <input type="text" class="form-control" id="Name_emp" name="Name_emp">
                                    </div>
                                    <div class="col-lg-9 col-md-6 col-sm-12 p-1">
                                        <label for="exampleFormControlTextarea1">الشرح</label>
                                        <textarea class="form-control" id="note" name="note" rows="5"></textarea>
                                    </div>
                                </div>


                                <div class="modal-footer ml-auto">
                                    <button type="submit" class="btn btn-success">تاكيد</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                </div>
                            </form>
                        </form>
                    </div>
                </div>
            </div>




            <!-- Container closed -->
        </div>

        <!-- delete -->
        <div class="modal" id="modaldemo9">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">حذف القسم</h6><button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="detailss/destroy" method="post">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <p>هل انت متاكد من عملية الحذف ؟</p><br>
                            <input type="hidden" name="id" id="id" value="">
                            <input class="form-control" name="Container" id="Container" type="text" readonly>
                        </div>
                        <div class="modal-footer ml-auto">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                            <button type="submit" class="btn btn-danger">تاكيد</button>
                        </div>
                </div>
                </form>
            </div>
        </div>


    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
    <script src="{{ URL::asset('assets/js/modal.js') }}"></script>


    <script>
        $('#exampleModal2').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var container = button.data('container')
            var berth = button.data('berth')
            var section = button.data('section')

            var arrival_date = button.data('arrival_date')
            var due_date = button.data('due_date')

            var size = button.data('size')
            var line = button.data('line')
            var merchant = button.data('merchant')
            var name_emp = button.data('name_emp')
            var note = button.data('note')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #Container').val(container);
            modal.find('.modal-body #Berth').val(berth);
            modal.find('.modal-body #section').val(section);

            modal.find('.modal-body #Arrival_Date').val(arrival_date);
            modal.find('.modal-body #Due_date').val(due_date);

            modal.find('.modal-body #Size').val(size);
            modal.find('.modal-body #Line').val(line);
            modal.find('.modal-body #Merchant').val(merchant);
            modal.find('.modal-body #Name_emp').val(name_emp);
            modal.find('.modal-body #note').val(note);
        })

    </script>


    <script>
        $('#modaldemo9').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var container = button.data('container')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #Container').val(container);
        })

    </script>


@endsection
