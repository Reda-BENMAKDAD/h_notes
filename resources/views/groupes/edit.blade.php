
<form action="{{ route('groupes.update',$groupes->id) }}" method="POST" style="max-width: 600px; margin: auto;">
    @method('put')
    <h1>ADD groupe</h1>
    @csrf
   
   <label>id</label>
    <input type="text" value="{{$groupes->id}}" name="id"/>
  
    
    <label for="infos">filiere:</label>
<select name='idFiliere'>
    @foreach($filieres as $filiere)
            <option value="{{$filiere->id}}" {{ $groupes->idFiliere == $filiere->id ? 'selected' : '' }}>{{$filiere->nom}}</option>
        @endforeach

</select><br>
    <label for="nom">libelle:</label>
    <input name="libelle" id="nom" style="display: block; margin-bottom: 10px; padding: 5px; width: 100%;" value="{{ $groupes->libelle }}" required>
  
  
    <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Valider</button>
  </form>
  
  @if(session('message'))
    <div style="background-color: #4CAF50; color: white; padding: 10px; text-align: center; margin-top: 10px;">{{ session('message') }}</div>
  @endif
  