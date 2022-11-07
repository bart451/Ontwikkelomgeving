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
              <a class="link-fx" href="javascript:void(0)">Examples</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">
              test
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
      <button type="button" class="btn btn-alt-primary me-1 mb-3">
          <i class="fa fa-fw fa-plus me-1"></i> <a href="/pages/nieuwsbrief">Maak een nieuwe nieuwsbrief aan</a>
      </button>
      <button type="button" class="btn btn-secondary me-1 mb-3">
          <i class="fa fa-fw fa-upload me-1"></i> Download
      </button>
      <button type="button" class="btn btn-secondary me-1 mb-3">
          <i class="fa fa-fw fa-times me-1"></i> Verwijder
      </button>

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
              <th>Aantal contactpersonen</th>
              <th>Aanmaak datum</th>
              <th>Verzend datum</th>
              <th>Verzonden </th>
              <th>Status</th>
          </tr>
          </thead>
          <tbody>
            @for ($i = 1; $i < 21; $i++)
              <tr>
                <td class="text-center">{{ $i }}</td>
                <td class="fw-semibold">
                  <a href="javascript:void(0)">Nieuwsbrief Naam {{ $i }}</a>
                </td>
                  <td class="fw-semibold">
                      <a href="javascript:void(0)">John Doe</a>
                  </td>
                  <td class="text-center">
                      <a href="javascript:void(0)">{{ $i }}</a>
                  </td>
                  <td>
                      <em class="text-muted">{{ rand(2, 10) }} days ago</em>
                  </td>
                  <td>
                      <em class="text-muted">{{ rand(2, 10) }} days ago</em>
                  </td>

                  <td>
                      <em class="text-muted">{{ rand(2, 10) }} days ago</em>
                  </td>
                  <td class="fw-semibold">
                      Verzonden
                  </td>
              </tr>
            @endfor
          </tbody>
        </table>
      </div>
    </div>
@endsection
