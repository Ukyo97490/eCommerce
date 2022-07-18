@extends('layouts.admin')

@section('content')

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

            </div>
        </div>
    </div>
    @endsection