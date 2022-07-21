<div>
    @include('livewire.admin.brand.modal-form')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Liste des marques
                <a href="#" data-bs-toggle="modal" data-bs-target="#addBrandModal" class="btn btn-primary btn-sm float-end text-white">Ajouter une marque</a></h4>
            </div>
            <div class="card-body">
<table class="table table-bordered table-striped">
<thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Slug</th>
        <th>Statut</th>
        <th>Action</th>  
</tr>
</thead>
<tbody>
    @forelse ( $brands as $brand )
    <tr>
        <td>{{$brand->id}}</td>
        <td>{{$brand->name}}</td>
        <td>{{$brand->slug}}</td>
        <td>{{$brand->status=='1' ? 'caché':'visible'}}</td>
        <td><a href=""class="btn btn-sm btn-success">Editer</a>
            <a href=""class="btn btn-sm btn-danger">Supprimer</a>
        </td>
    </tr>  
    @empty
        <tr>
            <td colspan="5">Pas de marque trouvée</td>
        </tr>
    @endforelse
    
</tbody>
</table>
<div>
    {{$brands->links()}}
</div>

            </div>
        </div>
    </div>
</div>
</div>
@push('script')
<script>
    window.addEventListener('close-modal', event => {
        $('#addBrandModal').modal('hide');
    });
</script>
@endpush