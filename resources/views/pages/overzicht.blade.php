@extends('layouts.backend')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
@endsection

@section('js_after')
    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
@endsection

@section('content')

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-2">
                        Overzicht
                    </h1>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="/">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Overzicht
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">

        <div class="row">
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href=/pages/nieuwsbrief>
                    <div class="block-content block-content-full">
                        <div class="fs-2 fw-semibold text-success">
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="fw-medium fs-sm text-success mb-0">
                            Nieuwe nieuwsbrief
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-2 fw-semibold text-danger">4</div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="fw-medium fs-sm text-danger mb-0">
                            Wachtrij
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.html">
                    <div class="block-content block-content-full">
                        <div class="fs-2 fw-semibold text-dark">2</div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="fw-medium fs-sm text-muted mb-0">
                            New
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.html">
                    <div class="block-content block-content-full">
                        <div class="fs-2 fw-semibold text-dark">6</div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="fw-medium fs-sm text-muted mb-0">
                            Alle nieuwsbrieven
                        </p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Dynamic Table Full -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Overzicht Nieuwsbrieven
                </h3>
            </div>
            <div class="block-content block-content-full">
                <div class="table-responsive">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
                    <table data-paging='false'
                           class="js-table-checkable table table-hover table-vcenter js-dataTable-full table-striped fs-sm js-table-checkable-enabled"
                           style="width:100%" id="example">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">#</th>
                            <th>Nieuwsbrief naam</th>
                            <th>Afzender</th>
                            <th>E-mail</th>
                            <th style="width: 2%;">Leesbevestiging</th>
                            <th>Aanmaak datum</th>
                            <th>Verzend datum</th>
                            <th style="width: 10%;">Status</th>
                            <th style="width: 3%;">Bewerken</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($nieuwsbrieven as $nieuwsbrief)
                            <tr>
                                <td class=""></td>
                                <td class=""><a
                                        href="{{route('pages.bewerknieuwsbrief',"$nieuwsbrief->id")}}">{{ $nieuwsbrief->naam }}</a>
                                </td>
                                <td class="">{{ ucfirst($nieuwsbrief->afzender) }}</td>
                                <td class="">{{ $nieuwsbrief->email }}</td>
                                <td class="">{{ ucfirst($nieuwsbrief->leesbevestiging) }}</td>
                                <td class="">{{ $nieuwsbrief->created_at }}</td>
                                <td class="">{{ $nieuwsbrief->verzenddatum }}</td>
                                <td class="">{{ ucfirst($nieuwsbrief->status) }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{route('pages.bewerknieuwsbrief',"$nieuwsbrief->id")}}">
                                            <button type="button"
                                                    class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"
                                                    data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt">
                                                </i>
                                            </button>
                                        </a>
                                        <a href="{{route('verwijdernieuwsbrief',"$nieuwsbrief->id")}}">
                                            <button type="button"
                                                    class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"
                                                    data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                                <i class="fa fa-fw fa-times"></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
