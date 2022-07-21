{{-- DEBUT MODAL --}}
<div>
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Suppression de la Catégorie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="destroyCategory">
                    <div class="modal-body">
                        <h6>Êtes-vous sûr de vouloir supprimer cette catégorie ? </h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Supprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- FIN MODAL --}}

    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Categories</h4>
                    <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm float-end">Ajouter une
                        catégorie</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Statut</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->status == '1' ? 'Caché' : 'Visible' }}</td>
                                    <td>
                                        <a href="{{ url('admin/category/' . $category->id . '/edit') }}"
                                            class="btn btn-success">Modifier</a>
                                        <a href=""wire:click="deleteCategory({{ $category->id }})"data-bs-toggle="modal"
                                            data-bs-target="#deleteModal" class="btn btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script>
            window.addEventListener('close-modal', event => {
                $('#deleteModal').modal('hide');
            });
        </script>
    @endpush
