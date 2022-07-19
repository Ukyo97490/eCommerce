<div class="row">
    <div class="col-md-12">
        @if (session ('message'))
        <div class="alert alert-success">{{session('message')}}</div>

        @endif

        <div class="card">
            <div class="card-header">
                <h4>Categories</h4>
                <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm float-end">Ajouter une catégorie</a>
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
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->status =='1' ? 'Caché':'Visible'}}</td>
                            <td>
                                <a href="{{url('admin/category/'.$category->id.'/edit')}}" class="btn btn-success">Modifier</a>
                                <a href="" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{$categories->links()}}
                </div>
            </div>
        </div>
    </div>