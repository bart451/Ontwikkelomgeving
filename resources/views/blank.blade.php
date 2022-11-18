@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-2">
                        Page Title1
                    </h1>
                    <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                        Subtitle1
                    </h2>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Examples</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Blank
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Block Title
                </h3>
            </div>
            <div class="block-content">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <a class="block block-rounded block-link-shadow text-center" href="/send-mail">
                            <div class="block-content block-content-full">
                                <div class="fs-2 fw-semibold text-dark">

                                </div>
                            </div>
                            <div class="block-content py-2 bg-body-light">
                                <p class="fw-medium fs-sm text-muted mb-0">
                                    Verstuur test mail
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END Your Block -->
        </div>
        <!-- END Page Content -->
@endsection
