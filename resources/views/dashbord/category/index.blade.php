 @extends('dashbord.layout.layout')


@section('body')

<div class="row mt-5 col-12">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
            <div class="row mt-3 mb-3">
<div class="">
    <button class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">Ajouter un Produit</button>

</div>

</div>
          <h4 class="card-title">Order Status</h4>
          <input class="form-control" type="text" id="searchInput" placeholder="Rechercher par name">

          @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif
      
      @if(session('error'))
          <div class="alert alert-danger">
              {{ session('error') }}
          </div>
      @endif
      
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
            <table class="table" id="edittable">
              <thead>
                <tr>
                 
                 
                  <th> Name </th>
                  <th> image </th>
                  <th> category </th>

                  <th> </th>
                 
                </tr>
              </thead>
                <tbody>
                
                @foreach ($categoreis as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>
            <img src="{{ asset( $product->image) }}" alt="">
        </td>
        <td>
            @if($product->perant )
            main category
            
                
            @else
            Secondary Section
           
            @endif
        </td>
        <td>
            <a class="edit btn btn-success btn-sm" href="{{route('category.edit', ['category' => $product->id]) }}"><i class="fa fa-edit"></i></a>
            <form method="POST" action="{{ route('category.destroy', ['category' => $product->id]) }}">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm  delete-category" title="Supprimer" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">
                  <i class="fa fa-trash "></i>
              </button>
          </form>
    </tr>
 
@endforeach

               

                </tbody>
             
          </div>
        </div>
      </div>
    </div>
  </div>
 

        <!-- Bouton pour ajouter un produit -->

        <!-- Modal pour ajouter un produit -->
        <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
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
    </div>



   
      <!-- Votre contenu de page va ici -->

<!-- Pagination -->


    <!-- Inclure les fichiers JavaScript Bootstrap et jQuery -->
  
 
      {{-- {{-- <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form action="{{ route('dachbord.category.destroy', ['categories' => $products->id])}}" method="POST">

          @csrf
          @method('DELETE')
          <div class="modal-content">
              <div class="modal-body">
                <div class="form-group">
                  <p>you are sure four delete this?</p>
                  @csrf
                  <input type="hidden" name="id" id="id">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">close</button>
                <button type="submit" class="btn btn-danger">delete</button>
              </div>
            </div>
        </form>
      </div>   --}}
       

      <div aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="centre">
                <a class="page-link" href="{{ $categoreis->previousPageUrl() }}" aria-label="Previous">
                    Previous
                </a>
            </li>
            @for ($i = 1; $i <= $categoreis->lastPage(); $i++)
            <li class="page-item {{ $i === $categoreis->currentPage() ? 'active' : '' }}">
                <a class="page-link" href="{{ $categoreis->url($i) }}">{{ $i }}</a>
            </li>
            @endfor
            <li class="page-item">
                <a class="page-link" href="{{ $categoreis->nextPageUrl() }}" aria-label="Next">
                    Next
                </a>
            </li>
        </ul>
    </div>


@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
      $('#searchInput').on('keyup', function() {
        var searchText = $(this).val().toLowerCase();
    
        $('#edittable tbody tr').each(function() {
          var name = $(this).find('td:first').text().toLowerCase();
          if (name.includes(searchText)) {
            $(this).show();
          } else {
            $(this).hide();
          }
        });
      });
    });
    </script>
    

  <script>
        // Supprimer les messages de succès et d'erreur après 2 secondes
        setTimeout(function () {
            document.querySelectorAll('.alert').forEach(function(alert) {
                alert.style.display = 'none';
            });
        }, 2000); // 2000 millisecondes (2 secondes)
    </script>





    
{{-- {{-- <script>
  $(document).ready(function() {
    var yourDataTable = $('#edittable').DataTable({
        // DataTable configuration options go here
    });

    $('.delete-category').on('click', function(e) {
        e.preventDefault();
        var form = $(this).closest('form');

        $.ajax({
            type: 'DELETE',
            url: form.attr('action'),
            data: form.serialize(), // Serialize the form data
            success: function(response) {
                if (response.success) {
                    // The delete was successful, update your DataTable
                    yourDataTable.ajax.reload(); // This is how you typically reload a DataTable
                } else {
                    alert('Deletion failed.');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error during deletion: ' + error);
            }
        });
    });
});

</script>  --}}





