<x-app-layout>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modifier un Cycle') }}</div>

                <div class="card-body">
               

    <form method="POST" action="{{ route('admin.update-cycle', $cycle->id) }}" >
                  @csrf
                  @method('put')

                        <div class="form-group">
                            <label for="nom_entreprise">{{ __('Nom de l\'entreprise') }}</label>
                            <input id="nom_entreprise" type="text" class="form-control @error('nom_entreprise') is-invalid @enderror" name="nom_entreprise" value="{{ old('nom_entreprise') }}" required autofocus>
                            @error('nom_entreprise')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="num_action">{{ __('Numéro de l\'action') }}</label>
                            <input id="num_action" type="text" class="form-control @error('num_action') is-invalid @enderror" name="num_action" value="{{ old('num_action') }}" required>
                            @error('num_action')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <br>
      
                        <!-- Add more checkboxes for withdrawal rights -->

                        <div class="form-group">
                            <label for="theme_formation">{{ __('Thème de la formation') }}</label>
                            <input id="theme_formation" type="text" class="form-control @error('theme_formation') is-invalid @enderror" name="theme_formation" value="{{ old('theme_formation') }}" required>
                            @error('theme_formation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                        <div class="form-group">


    <div class="form-group">
        <label for="mode_formation">{{ __('Mode de formation') }}</label>
        <input id="mode_formation" type="text" class="form-control @error('mode_formation') is-invalid @enderror" name="mode_formation" value="{{ old('mode_formation') }}" required>
        @error('mode_formation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="lieu_formation">{{ __('Lieu de déroulement') }}</label>
        <input id="lieu_formation" type="text" class="form-control @error('lieu_formation') is-invalid @enderror" name="lieu_formation" value="{{ old('lieu_formation') }}" required>
        @error('lieu_formation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="gouvernorat">{{ __('Gouvernorat') }}</label>
        <input id="gouvernorat" type="text" class="form-control @error('gouvernorat') is-invalid @enderror" name="gouvernorat" value="{{ old('gouvernorat') }}" required>
        @error('gouvernorat')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="periode">{{ __('Période') }}</label>
        <input id="periode" type="date" class="form-control @error('periode') is-invalid @enderror" name="periode" value="{{ old('periode') }}" required>
        @error('periode')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

<br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>

<style>
        .card {
            border: none;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .card-header {
            background-color: #f3f4f6;
            padding: 1rem;
            font-weight: bold;
        }

        .card-body {
            padding: 2rem;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        .form-control:focus {
            outline: none;
            border-color: #3490dc;
        }

        .btn-primary {
            background-color: #3490dc;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #2779bd;
        }
    </style>