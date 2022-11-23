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
                        test
                    </h2>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="/">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Bewerk Nieuwsbrief
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <form method="POST" name="bewerknieuwsbrief" id="bewerknieuwsbrief"
              action="{{url('/bewerknieuwsbrief', $nieuwsbrieven->id) }}">
            @csrf
            <div class="row">
                <div class="col-6 col-lg-4">
                    <a class="block block-rounded block-link-shadow text-center" href="">
                        @if ($nieuwsbrieven->verzenddatum === null)
                            <div class="block-content block-content-full">
                                <div class="fs-2 fw-semibold text-dark">
                                    Nieuw
                                </div>
                            </div>
                        @else
                            <div class="block-content block-content-full">
                                <div class="fs-2 fw-semibold text-dark">
                                    {{ $nieuwsbrieven->status }}
                                </div>
                            </div>
                        @endif
                        <div class="block-content py-2 bg-body-light">
                            <p class="fw-medium fs-sm text-muted mb-0">
                                Status
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-4">
                    <a class="block block-rounded block-link-shadow text-center" href="">
                        @if ($nieuwsbrieven->verzenddatum === null)
                            <div class="block-content block-content-full">
                                <div class="fs-2 fw-semibold text-dark">Nog geen verzenddatum</div>
                            </div>
                        @else
                            <div class="block-content block-content-full">
                                <div class="fs-2 fw-semibold text-dark">{{ $nieuwsbrieven->verzenddatum }}</div>
                            </div>
                        @endif
                        <div class="block-content py-2 bg-body-light">
                            <p class="fw-medium fs-sm text-muted mb-0">
                                Verzend datum
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a class="block block-rounded block-link-shadow text-center"
                       href="{{route('verwijdernieuwsbrief',[ 'id'=> $nieuwsbrieven->id ])}}">
                        <div class="block-content block-content-full">
                            <div class="fs-2 fw-semibold text-danger">
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                        <div class="block-content py-2 bg-body-light">
                            <p class="fw-medium fs-sm text-danger mb-0">
                                Verwijder nieuwsbrief
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">ID {{ $nieuwsbrieven->id }}</h3>
                </div>
                <div class="block-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="naam" name="naam"
                                       value="{{ $nieuwsbrieven->naam }}">
                                <label for="example-text-input-floating">Onderwerp</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <select class="form-select" id="afzender" name="afzender"
                                        value="{{ $nieuwsbrieven->afzender }}">
                                    <option selected="">Bart1</option>
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
                                <input type="email" class="form-control" id="email" name="email"
                                       value="{{ $nieuwsbrieven->email }}">
                                <label for="example-email-input-floating">Email</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input type="date" class="form-control" id="verzenddatum" name="verzenddatum"
                                       value="{{ $nieuwsbrieven->verzenddatum }}">
                                <label for="example-email-input-floating">Verzenddatum</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="example-select-floating">Medewerkers koppelen</label>
                            <select class="form-select" id="medewerkers" name="medewerkers[]"
                                    aria-label="Floating label select example" size="5" multiple>
                                @foreach ($medewerkers as $medewerker)
                                    <option value="{{$medewerker->id}}"
                                            @if ($nieuwsbrieven->medewerkers()->where('medewerker_id', '=', $medewerker->id)->count() > 0 ) selected @endif>{{$medewerker->naam}}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Verplichte leesbevestiging?</label>
                            <div class="space-x-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="leesbevestiging"
                                           name="leesbevestiging" value="nee" checked="">
                                    <label class="form-check-label" for="leesbevestiging">Nee</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="leesbevestiging" value="ja"
                                           name="leesbevestiging">
                                    <label class="form-check-label" for="leesbevestiging">Ja</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-4">
                    @if($nieuwsbrieven->inhoud === null)
                        <textarea class="form-control" name="inhoud" id="editor" cols="30"
                                  rows="10">{!! $nieuwsbrieven->get_template()->inhoud!!}</textarea>
                    @else
                        <textarea class="form-control" name="inhoud" id="editor" cols="30"
                                  rows="10">{!! $nieuwsbrieven->inhoud!!}</textarea>
                    @endif
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
                    <button type="submit" class="btn btn-primary">Opslaan</button>
                    <a href="{{route('pages.send-mail',[ 'id'=> $nieuwsbrieven->id ])}}">
                        <button type="button" class="btn btn-alt-primary"><i class="far fa-fw fa-envelope me-1"></i>
                            Verstuur Email
                        </button>
                    </a>
                    <a href="{{route('pages.preview-mail',[ 'id'=> $nieuwsbrieven->id ])}}">
                        <button type="button" class="btn btn-alt-primary"><i class="far fa-fw fa-envelope me-1"></i>
                            Preview Email
                        </button>
                    </a>
                </div>
            </div>
            <!-- END Your Block -->
        </form>
    </div>
    <!-- END Page Content -->
@endsection
