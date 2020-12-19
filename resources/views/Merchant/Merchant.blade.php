@extends('layouts.master')
@section('css')
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
    <!--- Select2 css -->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('assets/plugins/datatable/css/format_style.css') }}" rel="stylesheet">
@endsection

@section('title')
    التجار
@stop
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">بيانات التاجر</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    التاجر </span>
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
                           href="#modaldemo8"> اضافة بيانات التاجر </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap table-hover " data-page-length='50' >

                            <thead>
                            <tr>
                                <th class=" border-bottom-0"> # </th>
                                <th class="border-bottom-0">اسم التاجر</th>
                                <th class="border-bottom-0">رقم الهاتف</th>
                                <th class="border-bottom-0">العنوان</th>
                                <th class="border-bottom-0">الملاحظات</th>
                                <th class="border-bottom-0">العمليات</th>
                            </tr>
                            </thead>

                            <tbody>

                            <?php $i = 0; ?>
                            @foreach ($Merchant as $x)
                                <?php $i++; ?>
                                <tr>


                                    <td>{{ $i }}</td>
                                    <td>{{ $x->Merchant }}</td>
                                    <td>{{ $x->Phone_Merchant }}</td>
                                    <td>{{ $x->Address }}</td>
                                    <td>{{ $x->Notee }}</td>



                                    <td>
                                        <button class="btn btn-outline-success btn-sm"
                                                data-id="{{ $x->id }}"
                                                data-Merchant="{{ $x->Merchant }} "
                                                data-Phone_Merchant="{{ $x->Phone_Merchant }}"
                                                data-Address="{{ $x->Address }}"
                                                data-Notee="{{ $x->Notee }}"
                                                data-toggle="modal"
                                                data-target="#exampleModal2">تعديل</button>

                                        <button class="btn btn-outline-danger btn-sm " data-Merchant="{{ $x->Merchant }}"
                                                data-id="{{ $x->id }}" data-toggle="modal"
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
            <div class="modal-dialog  " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title"> اضافة بيانات </h6><button aria-label="Close" class="close"
                                                                           data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('Merchant.store') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="exampleInputEmail1">اسم التاجر</label>
                                <input type="text" class="form-control" id="Merchant" name="Merchant">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">رقم التاجر</label>
                                <input type="text" class="form-control" id="Phone_Merchant" name="Phone_Merchant">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">العنوان</label>
                                <input type="text" class="form-control" id="Address" name="Address">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">الملاحظات</label>
                                <textarea class="form-control" id="Notee" name="Notee" rows="5"></textarea>
                            </div>

                              <div class="modal-footer ml-auto">
                        <button type="submit" class="btn btn-success text-right">تاكيد</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                              </div>

                         </form>

                     </div>

                </div>
            </div>
        </div>
        <!-- End Basic modal -->

        <!-- edit -->
        <div class="modal" id="exampleModal2">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title"> اضافة بيانات </h6><button aria-label="Close" class="close"
                                                                           data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">



                        <form action="Merchant/update" method="post" autocomplete="off">
                            {{ method_field('patch') }}
                            {{ csrf_field() }}
                            <div class="divider mt-2 mb-1"></div>
                            <form class="row">


                                <input type="hidden" name="id" id="id" value="">


                                <div class="form-group">
                                    <label for="exampleInputEmail1">اسم التاجر</label>
                                    <input type="text" class="form-control" id="Merchant" name="Merchant">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">رقم التاجر</label>
                                    <input type="text" class="form-control" id="Phone_Merchant" name="Phone_Merchant">
                                </div>



                                <div class="form-group">
                                    <label for="exampleInputEmail1">العنوان</label>
                                    <input type="text" class="form-control" id="Address" name="Address">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">الملاحظات</label>
                                    <textarea class="form-control" id="Notee" name="Notee" rows="5"></textarea>
                                </div>





                                <div class="modal-footer">
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
                        <h6 class="modal-title">حذف الاسم</h6><button aria-label="Close" class="close" data-dismiss="modal"
                                                                      type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="Merchant/destroy" method="post">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <p>هل انت متاكد من عملية الحذف ؟</p><br>
                            <input type="hidden" name="id" id="id" value="">
                            <input class="form-control" name="Merchant" id="Merchant" type="text" readonly>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                            <button type="submit" class="btn btn-danger">تاكيد</button>
                        </div>

                    </form>
                 </div>
            </div>
        </div>


    </div>

    <!-- Container closed -->
    </div>
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
            var merchant = button.data('merchant')
            var phone_merchant = button.data('phone_merchant')
            var address = button.data('address')

            var notee = button.data('notee')


            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #Merchant').val(merchant);
            modal.find('.modal-body #Phone_Merchant').val(phone_merchant);
            modal.find('.modal-body #Address').val(address);

            modal.find('.modal-body #Notee').val(notee);

        })

    </script>


    <script>
        $('#modaldemo9').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var merchant = button.data('merchant')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #Merchant').val(merchant);
        })

    </script>


@endsection

