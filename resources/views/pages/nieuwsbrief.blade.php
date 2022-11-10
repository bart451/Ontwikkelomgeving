@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-2">
                        Nieuwsbrief
                    </h1>
                    <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                        Maak een nieuwe nieuwbrief aan
                    </h2>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="/">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Nieuwsbrief
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->
<script type="text/javascript">

</script>
    <!-- Page Content -->
    <div class="content">
        <form method="POST" name="pages.nieuwsbrief" id="pages.nieuwsbrief" action="{{url('storenieuwsbrief')}}">
            @csrf
            <div class="block-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" id="naam" name="naam">
                            <label for="example-text-input-floating">Onderwerp</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-4">
                            <select class="form-select" id="template_id" name="template_id"
                                    aria-label="Floating label select example">
                                <option selected="">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <label for="example-select-floating">Template</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-4">
                            <select class="form-select" id="afzender" name="afzender"
                                    aria-label="Floating label select example">
                                <option selected="">Bart1</option>
                                <option value="2">Bart2</option>
                                <option value="3">Bart3</option>
                            </select>
                            <label for="example-select-floating">Afzender</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" id="email" name="email">
                            <label for="example-email-input-floating">Email</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Maak de nieuwsbrief aan</button>
            </div>
        </form>
    </div>
    <!-- END Page Content -->
@endsection
