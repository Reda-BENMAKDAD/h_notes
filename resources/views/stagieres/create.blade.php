
<form action="{{ route('stagieres.store') }}" method="POST" style="max-width: 600px; margin: auto;">
    <h1>ADD groupe</h1>
    @csrf
  
  
    <label for="infos">groupes:</label>
<select name='idgroupe'>
    @foreach($groupes as $groupes)
        <option value="{{$groupes->idgroupes}}">{{$groupes->nom}}</option>
    @endforeach

</select><br>
    <label for="nom">nom:</label>
    <input type="text" name="nom" id="nom" style="display: block; margin-bottom: 10px; padding: 5px; width: 100%;" required>
    <label for="prenom">prenom:</label>
    <input type="text" name="prenom" id="prenom" style="display: block; margin-bottom: 10px; padding: 5px; width: 100%;" required>
  
  
    <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Valider</button>
  </form>
  
  @if(session('message'))
    <div style="background-color: #4CAF50; color: white; padding: 10px; text-align: center; margin-top: 10px;">{{ session('message') }}</div>
  @endif
  