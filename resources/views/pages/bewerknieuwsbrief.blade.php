<x-app-layout>

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-2">
                        Nieuwsbrief
                    </h1>
                    <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                        test
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
        <div class="block-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="example-text-input-floating"
                               name="example-text-input-floating" placeholder="John Doe">
                        <label for="example-text-input-floating">Onderwerp</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <select class="form-select" id="example-select-floating" name="example-select-floating"
                                aria-label="Floating label select example">
                            <option selected="">Selecteer een optie</option>
                            <option value="1">Bart1</option>
                            <option value="2">Bart2</option>
                            <option value="3">Bart3</option>
                        </select>
                        <label for="example-select-floating">Afzender</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="email" class="form-control" id="example-email-input-floating"
                               name="example-email-input-floating" placeholder="john.doe@example.com">
                        <label for="example-email-input-floating">Email</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="email" class="form-control" id="example-email-input-floating"
                               name="example-email-input-floating" placeholder="john.doe@example.com">
                        <label for="example-email-input-floating">Datum</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <select class="form-select" id="example-select-floating" name="example-select-floating"
                                aria-label="Floating label select example">
                            <option selected="">Selecteer een optie</option>
                            <option value="1">Bart1</option>
                            <option value="2">Bart2</option>
                            <option value="3">Bart3</option>
                        </select>
                        <label for="example-select-floating">Afzender</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check form-switch form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="example-switch-inline1"
                               name="example-switch-inline1" checked="">
                        <label class="form-check-label" for="example-switch-inline1">Verplichte leesbevestiging?</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div id="editor"></div>
                    <script>
                        ClassicEditor
                            .create(document.querySelector('#editor'))
                            .then(editor => {
                                console.log(editor);
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    </script>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="button" class="btn btn-alt-primary me-1 mb-3">
                        <i class="fa fa-fw fa-plus me-1"></i> <a href="/dashboard">Bewerk Nieuwsbrief</a>
                    </button>
                </div>
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
</x-app-layout>
