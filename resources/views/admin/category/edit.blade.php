@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-header">
                    <h4>Modifier Categorie</h4>
                    <a href="{{ url('admin/category') }}" class="btn btn-primary btn-sm text-white float-end">Retour</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/category/' . $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Nom*</label>
                                <input type="text" name="name" value="{{ $category->name }}" class="form-control" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Slug*</label>
                                <input type="text" name="slug" value="{{ $category->slug }}" class="form-control" />

                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Description*</label>
                                <textarea name="description" class="form-control" rows="3">{{ $category->description }}</textarea>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control" />
                                <img src="{{ asset('/uploads/category/' . $category->image) }}" width="80px"
                                    height="80px">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Statut</label><br />
                                <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked' : '' }} />
                            </div>

                            <div class="col-md-12">
                                <h4>SEO Meta</h4>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Title*</label>
                                <input type="text" name="meta_title" value="{{ $category->meta_title }}"
                                    class="form-control" />

                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Keyword*</label>
                                <textarea name="meta_keyword" class="form-control" rows="3">{{ $category->meta_keyword }}</textarea>

                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Description*</label>
                                <textarea name="meta_description" class="form-control" rows="3">{{ $category->meta_description }}</textarea>

                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary float-end text-white">Mettre ?? jour</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
