@extends('dashbord.layout.layout')


@section('body')


<div class="container mt-5">
    <h1>Formulaire d'Entreprise</h1>
    <form action="{{ route('dashbord.settings.update',$setting->id) }}" method="POST"   enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            @method('put')

            @if ($errors->any()){
                {!! implode('',$errors->all('<div>:message</div>')) !!}
            }
                
            @endif
            <label for="titel">Titre de l'entreprise :</label>
            <input type="text" class="form-control" id="titel"  value="{{$setting->titel}}"  name="titel"  >
        </div>

        <div class="form-group">
            <label for="description">Description :</label>
            <textarea class="form-control" id="description"    name="description" rows="4">{{$setting->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="address">Adresse :</label>
            <input type="text" class="form-control" id="address"  value="{{$setting->address}}"  name="address">
        </div>

        <div class="form-group">
            <label for="phone">Téléphone :</label>
            <input type="text" class="form-control" id="phone"  value="{{$setting->phone}}"  name="phone">
        </div>

        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email"  value="{{$setting->email}}"  name="email">
        </div>

        <div class="form-group">
            <label for="logo">URL du logo :</label>
            <input type="file" class="form-control dropify"  data-default-file="{{asset($setting->logo)}}"  id="favicon"  value="{{$setting->favicon}}"  name="logo">
        </div>
        <div class="form-group">
            <label for="favicon">URL du favicon :</label>

            <input type="file" class="form-control dropify"  data-default-file="{{asset($setting->favicon)}}"  id="favicon"  value="{{$setting->favicon}}"  name="favicon">
        </div>

        <div class="form-group">
            <label for="facebook">Lien Facebook :</label>
            <input type="text" class="form-control" id="facebook"  value="{{$setting->facebook}}"  name="facebook">
        </div>

        <div class="form-group">
            <label for="twitter">Lien Twitter :</label>
            <input type="text" class="form-control" id="twitter" value="{{$setting->twitter}}" name="twitter">
        </div>

        <div class="form-group">
            <label for="youtub">Lien YouTube :</label>
            <input type="text" class="form-control" id="youtub" value="{{$setting->youtub}}" name="youtub">
        </div>

        <div class="form-group">
            <label for="tiktok">Lien TikTok :</label>
            <input type="text" class="form-control" id="tiktok" value="{{$setting->tiktok}}"  name="tiktok">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>

@endsection