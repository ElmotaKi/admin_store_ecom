@extends('dashbord.layout.layout')
@section('body')

   <div class="container mt-5">
     <div class="modal-body mt-5">
                <!-- Formulaire pour ajouter un produit -->
                <form method="POST" action="{{route('category.update',$category->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="table-responsive ">
                        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
            
                </div>
                @endif
                    <div class="form-group">
                        <label for="productName">Nom du Produit</label>
                        <input type="text" name="name" class="form-control" value="{{$category->name}}" id="productName" placeholder="Nom du Produit">
                    </div>
                    @if ($category->perant<1)
                    
                   
                    <div class="form-group">
                        <label for="productCategory">Catégorie</label>
                        <select class="form-control" id="productCategory" name="perant">
                            <option value="" @if ($category->perant==null)
                                selected
                                
                            @endif>Secondary category</option>
                                    @foreach ($getMaincategory as $category)
                                        <option>{{$category->name}}</option>
                                    @endforeach
                            <!-- Ajoutez d'autres options de catégorie ici -->
                        </select>
                    </div>
                     @endif
                  
                    <div class="form-group">
                        <label for="productImage"  >Image</label>
                        <input name="image" id="image" type="file" data-default-file="{{asset($category->image)}}" class="form-control dropify "    >
                    </div>

                    <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
                </form>
            </div>
            
        </div>
   </div>
            
           
    

@endsection


