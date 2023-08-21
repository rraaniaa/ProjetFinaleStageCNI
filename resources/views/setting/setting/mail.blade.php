<x-app-layout>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Créer un Cycle') }}</div>

                <div class="card-body">
                    
                    <form method="POST" action="{{ route('admin.store-cycle') }}">
                        @csrf

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

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="credit_impot" id="credit_impot">
                                <label class="form-check-label" for="credit_impot">
                                    {{ __('Crédit d\'impôt') }}
                                </label>
                            </div>
                        </div>

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

                        <!-- Add more form fields for training mode, location, governorate, etc. -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Créer Cycle') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</x-app-layout>