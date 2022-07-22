@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-header">
                    <h4>Ajouter un produit</h4>
                    <a href="{{ url('admin/products') }}" class="btn btn-danger btn-sm text-white float-end">Retour</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/products') }}" method="POST">
                        @csrf
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">Produit</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="seotag-tab" data-bs-toggle="tab"
                                    data-bs-target="#seotag-tab-pane" type="button" role="tab"
                                    aria-controls="seotag-tab-pane" aria-selected="false">Mots-clés</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="details-tab" data-bs-toggle="tab"
                                    data-bs-target="#details-tab-pane" type="button" role="tab"
                                    aria-controls="contact-tab-pane" aria-selected="false">Prix</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="image-tab" data-bs-toggle="tab"
                                    data-bs-target="#image-tab-pane" type="button" role="tab"
                                    aria-controls="contact-tab-pane" aria-selected="false">Images</button>
                            </li>
                        </ul>
                        {{-- Contenu de l'onglet Produit --}}
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel"
                                aria-labelledby="home-tab" tabindex="0">
                                <div class="mb-3 mt-5">
                                    <label>Catégorie</label>
                                    <select name="category_id" class="form-control">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 mt-5">
                                    <label>Nom du produit:</label>
                                    <input type="text" name="name" class="form-control" />
                                </div>
                                <div class="mb-3 mt-5">
                                    <label>Produit Slug:</label>
                                    <input type="text" name="slug" class="form-control" />
                                </div>
                                <div class="mb-3 mt-5">
                                    <label>Marque</label>
                                    <select name="brand" class="form-control">
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 mt-5">
                                    <label>Résumé:</label>
                                    <textarea name="small_description" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="mb-3 mt-5">
                                    <label>Description:</label>
                                    <textarea name="description" class="form-control" rows="4"></textarea>
                                </div>

                            </div>
                            {{-- Contenu de l'onglet TAG --}}
                            <div class="tab-pane fade border p-3" id="seotag-tab-pane" role="tabpanel"
                                aria-labelledby="seotag-tab" tabindex="0">
                                <div class="mb-3 mt-5">
                                    <label>Titre Méta:</label>
                                    <input type="text" name="meta_title" class="form-control" />
                                </div>
                                <div class="mb-3 mt-5">
                                    <label>Meta Description</label>
                                    <textarea name="small_description" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="mb-3 mt-5">
                                    <label>Meta Keywords</label>
                                    <textarea name="meta_keyword" class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                            {{-- Contenu de l'onglet Détails --}}
                            <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel"
                                aria-labelledby="details-tab" tabindex="0">
                                <div class="col-md-4">
                                    <div class="mb-3 mt-5">
                                        <label>Prix d'achat</label>
                                        <input type="text" name="original_price" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 mt-5">
                                        <label>Prix de vente</label>
                                        <input type="text" name="selling_price" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 mt-5">
                                        <label>Quantité</label>
                                        <input type="number" name="quantity" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 mt-5">
                                        <label>Tendance</label>
                                        <input type="checkbox" name="trending" style="width:15px; height:15px;" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 mt-5">
                                        <label>Status</label>
                                        <input type="checkbox" name="status" style="width:15px; height:15px;" />
                                    </div>
                                </div>
                            </div>
                            {{-- Contenu de l'onglet Image --}}
                            <div class="tab-pane fade border p-3" id="image-tab-pane" role="tabpanel"
                                aria-labelledby="image-tab" tabindex="0">
                                <div class="mb-3 mt-5">
                                    <label>Ajouter des images au produit</label>
                                    <input type="file" name="image" multiple class="form-control" />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary text-white">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
