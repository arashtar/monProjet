@extends('master')
@section('title', 'Contact')
@section('content')


<h1>Contacts</h1>
<p>Vous pouvez nous contacter si vous avez des questions</p>
<p>merci de remplir le formulaire suivant, nous vous répondrons dans les plus brefs délais</p>



@isset($data)
<p><strong>Nom:</strong>  {{ $data->nom }} </p>
<p><strong>Prenom:</strong>  {{ $data->prenom }} </p>
<p><strong>Phone:</strong>  {{ $data->phone }} </p>
<p><strong>Address:</strong>  {{ $data->address }} </p>
@else


<form  method="post"> 
    @csrf
<fieldset>
   Nom: <input type="text" name="nom">
   Prenom: <input type="text" name="prenom">
   Telephone: <input type="number" name="phone">
   Address: <textarea name="address" id="address" cols="30" rows="10"></textarea>
   <input type="submit">
   @endisset
   </fieldset>
</form>
@endsection