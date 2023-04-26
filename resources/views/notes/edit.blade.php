@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Note') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('notes.update', $notes->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="valeur" class="col-md-4 col-form-label text-md-right">{{ __('Value') }}</label>

                            <div class="col-md-6">
                                <input id="valeur" type="number" class="form-control @error('valeur') is-invalid @enderror" name="valeur" value="{{ old('valeur', $notes->valeur) }}" required autocomplete="valeur" autofocus>

                                @error('valeur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idstagiere" class="col-md-4 col-form-label text-md-right">{{ __('Stagiere') }}</label>

                            <div class="col-md-6">
                                <select id="idstagiere" class="form-control @error('idstagiere') is-invalid @enderror" name="idstagiere" required>
                                    @foreach($stagieres as $stagiere)
                                        <option value="{{ $stagiere->id }}" {{ (old('idstagiere', $notes->idstagiere) == $stagiere->id) ? 'selected' : '' }}>{{ $stagiere->nom }} {{ $stagiere->prenom }}</option>
                                    @endforeach
                                </select>

                                @error('idstagiere')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idexam" class="col-md-4 col-form-label text-md-right">{{ __('Exam') }}</label>

                            <div class="col-md-6">
                                <select id="idexam" class="form-control @error('idexam') is-invalid @enderror" name="idexam" required>
                                    @foreach($exams as $exam)
                                        <option value="{{ $exam->id }}" {{ (old('idexam', $notes->idexam) == $exam->id) ? 'selected' : '' }}>{{ $exam->libelle }}</option>
                                    @endforeach
                                </select>

                                @error('idexam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                                <a href="{{ route('notes.index') }}" class="btn btn-secondary">
                                    {{ __('Cancel') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
