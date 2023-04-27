
    <div class="container">
        <h1>Create Note</h1>
        <form action="{{ route('notes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="valeur">Value:</label>
                <input type="number" class="form-control" id="valeur" name="valeur" value="{{ old('valeur') }}" required>
            </div>
            <div class="form-group">
                <label for="idstagiere">stagiere:</label>
                <select class="form-control" id="idstagiere" name="idstagiere" required>
                    @foreach ($stagieres as $stagiere)
                        <option value="{{ $stagiere->id }}">{{ $stagiere->nom }} {{ $stagiere->prenom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="idexam">Exam:</label>
                <select class="form-control" id="idexam" name="idexam" required>
                    @foreach ($exams as $exam)
                        <option value="{{ $exam->id }}">{{ $exam->libelle }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

