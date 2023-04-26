
<form action="{{ route('stagieres.update',$stagieres->idstagiere) }}" method="POST" style="max-width: 600px; margin: auto;">
    @method('put')
    <h1>edite stagiere</h1>
    @csrf
   
   <label>id</label>
    <input type="text" value="{{$stagieres->idstagiere}}" name="idgroupes"/>
  
    
    <label for="infos">groupes:</label>
<select name='idgroupe'>
    @foreach($groupes as $groupe)
            <option value="{{$groupe->idgroupe}}" {{ $stagieres->idgroupe == $groupe->idgroupe ? 'selected' : '' }}>{{$groupe->nom}}</option>
        @endforeach

</select><br>
    <label for="nom">nom:</label>
    <input type="text" name="nom" id="nom" style="display: block; margin-bottom: 10px; padding: 5px; width: 100%;" value="{{ $stagieres->nom }}">
    <label for="prenom">prenom:</label>
    <input type="text" name="prenom" id="prenom" style="display: block; margin-bottom: 10px; padding: 5px; width: 100%;" value="{{ $stagieres->prenom }}">
  
  
    <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Valider</button>
  </form>
  
  @if(session('message'))
    <div style="background-color: #4CAF50; color: white; padding: 10px; text-align: center; margin-top: 10px;">{{ session('message') }}</div>
  @endif
  