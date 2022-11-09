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
                    <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                        Test
                    </h2>
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
        <div class="buttons">
            <button type="button" class="btn btn-alt-primary me-1 mb-3">
                <i class="fa fa-fw fa-plus me-1"></i> <a href="/pages/nieuwsbrief">Maak een nieuwe nieuwsbrief aan</a>
            </button>
            <button type="button" class="btn btn-secondary me-1 mb-3">
                <i class="fa fa-fw fa-upload me-1"></i> Download
            </button>
            <button type="button" class="btn btn-secondary me-1 mb-3">
                <i class="fa fa-fw fa-times me-1"></i> Verwijder
            </button>
        </div>

        <!-- Dynamic Table Full -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Overzicht <small>Full</small>
                </h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full fs-sm">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">#</th>
                        <th>Nieuwsbrief naam</th>
                        <th>Afzender</th>
                        <th>E-mail</th>
                        <th>Leesbevestiging</th>
                        <th>Aanmaak datum</th>
                        <th>Verzend datum</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($nieuwsbrieven as $nieuwsbrief)
                        <tr>
                            <td class=""></td>
                            <td class="">{{ $nieuwsbrief->naam }}</td>
                            <td class="">{{ $nieuwsbrief->afzender }}</td>
                            <td class="">{{ $nieuwsbrief->email }}</td>
                            <td class="">{{ $nieuwsbrief->leesbevestiging }}</td>
                            <td class="">{{ $nieuwsbrief->created_at }}</td>
                            <td class="">{{ $nieuwsbrief->verzenddatum }}</td>
                            <td class="">{{ $nieuwsbrief->status }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
