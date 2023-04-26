
<form action="{{ route('groupes.store') }}" method="POST" style="max-width: 600px; margin: auto;">
    <h1>ADD groupe</h1>
    @csrf
  
  
    <label for="infos">filiere:</label>
<select name='idfiliere'>
    @foreach($filiere as $filiere)
        <option value="{{$filiere->id}}">{{$filiere->nom}}</option>
    @endforeach

</select><br>
    <label for="nom">nom:</label>
    <input type="text" name="nom" /><br/>
  
    <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Valider</button>
  </form>