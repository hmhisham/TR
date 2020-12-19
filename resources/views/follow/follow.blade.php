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

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">تفاصيل الحاويات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    متابعة الحاويات</span>
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
                        <table id="example1" class="table key-buttons text-md-nowrap table-hover "  >
                            <thead>
                                <tr  >
                                    <th class=" border-bottom-0"> # </th>
                                    <th class="border-bottom-0">رقم الحاوية</th>
                                    <th class="border-bottom-0">تاريخ الوصول</th>
                                    <th class="border-bottom-0">تاريخ الاستلام</th>
                                    <th class="border-bottom-0">الرصيف</th>
                                    <th class="border-bottom-0">الحجم</th>
                                    <th class="border-bottom-0">الخط</th>
                                    <th class="border-bottom-0">التاجر</th>
                                    <th class="border-bottom-0">الشرح</th>
                                    <th class="border-bottom-0">اسم السائق</th>
                                    <th class="border-bottom-0">رقم الهاتف</th>
                                    <th class="border-bottom-0">رقم السيارة</th>
                                    <th class="border-bottom-0">صاحب المخزن</th>
                                    <th class="border-bottom-0">رقم الهاتف</th>
                                    <th class="border-bottom-0">رقم الوجبة</th>
                                    <th class="border-bottom-0">تاريخ التحميل</th>
                                    <th class="border-bottom-0">تاريخ التخريج</th>
                                    <th class="border-bottom-0">تاريخ التفريغ</th>
                                    <th  class="border-bottom-0" >الحالة</th>
                                    <th class="border-bottom-0">الملاحظات</th>

                                    <th class="border-bottom-0">العمليات</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php $i = 0; ?>
                                @foreach ($followw as $x)
                                    <?php $i++; ?>
                                    <tr>

                                        <td>{{ $i }}</td>
                                        <td>{{ $x->Container }}</td>
                                        <td>{{ $x->Arrival_Date }}</td>
                                        <td>{{ $x->Due_date }}</td>
                                        <td>{{ $x->Berth }}</td>

                                        <td>{{ $x->Size }}</td>
                                        <td>{{ $x->Line }}</td>
                                        <td>{{ $x->Merchant }}</td>
                                        <td>{{ $x->note_shreh }}</td>
                                        <td>{{ $x->Name_Dri }}</td>

                                        <td>{{ $x->phone_Dri }}</td>
                                        <td>{{ $x->No_Car }}</td>
                                        <td>{{ $x->Name_stor }}</td>
                                        <td>{{ $x->phone_stor }}</td>

                                        <td>{{ $x->oajba }}</td>
                                        <td>{{ $x->load_date }}</td>
                                        <td>{{ $x->export_date }}</td>
                                        <td>{{ $x->end_exp_date }}</td>

                                        <td>  {{ $x->section }}</td>
                                        <td>{{ $x->notee }}</td>


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

                    <!-- Basic modal -->
                    <div class="modal" id="modaldemo8">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title"> اضافة بيانات </h6><button aria-label="Close" class="close"
                                        data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('follow.store') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="divider mt-2 mb-1"></div>
                                        <div class="form-row align-items-center  ">



                                            <div class="col-lg-3 col-md-6 col-sm-12 p-1">
                                                <label for="exampleInputEmail1">رقم الحاوية</label>
                                                <select name="Container" id="Container" class="form-control" required>
                                                    <option value="" selected disabled> --اختيار--</option>
                                                    @foreach ($detailsss as $x)
                                                        <option value="{{ $x->id }}">{{ $x->Container }}</option>
                                                    @endforeach
                                                </select>
                                            </div>



                                            <div class="col-lg-3 col-md-6 col-sm-12 p-1 ">
                                                <label for=" example-date-input">تاريخ الوصول</label>
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
                                                    <option>تم التخريج</option>
                                                    <option>عدم التخريج</option>
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
                                                    @foreach ($Merchantt as $x)
                                                        <option value="{{ $x->Merchant }}">{{ $x->Merchant }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                        <div class="form-row align-items-center  ">

                                            <div class="col-lg-3 col-md-6 col-sm-12 p-1">
                                                <label for="exampleInputEmail1">اسم السائق</label>
                                                <input type="text" class="form-control" id="Name_Dri" name="Name_Dri">
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-sm-12 p-1">
                                                <label for="exampleInputEmail1">رقم السائق</label>
                                                <input type="text" class="form-control" id="phone_Dri" name="phone_Dri">
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-sm-12 p-1">
                                                <label for="exampleInputEmail1">رقم السيارة</label>
                                                <input type="text" class="form-control" id="No_Car" name="No_Car">
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-sm-12 p-1">
                                                <label for="exampleInputEmail1">صاحب المخزن</label>
                                                <input type="text" class="form-control" id="Name_stor" name="Name_stor">
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-sm-12 p-1">
                                                <label for="exampleInputEmail1">رقم صاحب المخزن</label>
                                                <input type="text" class="form-control" id="phone_stor" name="phone_stor">
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-sm-12 p-1">
                                                <label for="exampleInputEmail1">رقم الوجبة</label>
                                                <input type="text" class="form-control" id="oajba" name="oajba">
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-sm-12 p-1 ">
                                                <label for="example-date-input">تاريخ التحميل</label>
                                                <input class="form-control" type="date" value="{{ date('') }}"
                                                    id="load_date" name="load_date">
                                            </div>


                                            <div class="col-lg-3 col-md-6 col-sm-12 p-1 ">
                                                <label for="example-date-input">تاريخ التخريج</label>
                                                <input class="form-control" type="date" value="{{ date('') }}"
                                                    id="export_date" name="export_date">
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 p-1 ">
                                                <label for="example-date-input">تاريخ التفريغ</label>
                                                <input class="form-control" type="date" value="{{ date('') }}"
                                                    id="end_exp_date" name="end_exp_date">
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 p-1 ">
                                                <label for="example-date-input">تاريخ التفريغ</label>
                                                <input class="form-control" type="date" value="{{ date('') }}"
                                                    id="end_exp_date" name="end_exp_date">
                                            </div>





                                        </div>


                                        <div class="form-row align-items-center  ">

                                            <div class="col-lg-6 col-md-6 col-sm-12 p-1">
                                                <label for="exampleFormControlTextarea1">الشرح</label>
                                                <textarea class="form-control" id="note_shreh" name="note_shreh"
                                                    rows="2"></textarea>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 p-1">
                                                <label for="exampleFormControlTextarea1">الملاحظات</label>
                                                <textarea class="form-control" id="notee" name="notee" rows="2"></textarea>
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



                </div>


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
        $(document).ready(function() {
            $('select[name="Container"]').on('change', function() {
                var detailssId = $(this).val();
                if (detailssId) {
                    $.ajax({
                        url: "{{ URL::to('Container') }}/" + detailssId,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="Merchant"]').empty();

                            $.each(data, function(key, value) {
                                $('select[name="Merchant"]').append('<option value="' +
                                    value + '">' + value + '</option>');



                             });


                        },
                    });

                } else {
                    console.log('AJAX load did not work');
                }
            });

        });

    </script>


@endsection
