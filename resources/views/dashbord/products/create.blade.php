@extends('dashbord.layout.layout')
@section('body')

<div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Ajouter un Produit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                    <span aria-hidden="true">&times;</span>
                </button>
                @if ($errors->any()){
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>

                    </div>

                }
                    
                @endif
            </div>
            <div class="modal-body">
                <!-- Formulaire pour ajouter un produit -->
                <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="productName">Nom du Produit</label>
                        <input type="text" class="form-control" name="name" id="productName" placeholder="Nom du Produit">
                    </div>
                    <div class="form-group">
                        <label for="productCategory">Catégorie</label>
                        <select class="form-control" id="productCategory" name="perant">
                            <option value="">Catégorie 1</option>
                            @foreach ($categoreis as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            <!-- Ajoutez d'autres options de catégorie ici -->
                        </select>
                    </div>
                    
                  
                    <div class="form-group">
                        <label for="productImage">Image</label>
                        <input name="image" type="file" class="form-control " >

                        </div>
                        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary" >Enregistrer</button>
            </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

    
@endsection