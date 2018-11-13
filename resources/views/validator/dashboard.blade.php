@extends('validator.layouts.app')

@section('title')
Dashboard | Validator
@endsection

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <button class="btn btn-sm btn-outline-secondary">Share</button>
            <button class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
        </button>
    </div>
</div>
<p>Nombre de contenu validé: ...</p>
<div class="card bg-light p-3 mt-3">
    <h2>Contenus</h2>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Diffusé par</th>
                    <th>Url</th>
                    <th>Crédibilité</th>
                    <th>Date d'ajout</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Un nouel accident sur l'autoroute</td>
                    <td>TF1</td>
                    <td>
                        <a href="#">www.example.com</a>
                    </td>
                    <td>
                        <span class="text-success">87%</span>
                    </td>
                    <td>10/6/2018</td>
                    <td>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Editer">
                            <i class="fas fa-pen fa-2x text-success"></i>
                        </a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Supprimer">
                            <i class="fas fa-trash fa-2x text-danger"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Loremp ipsum oremp ipsum oremp ipsum oremp ipsum oremp ipsum</td>
                    <td>RTBF</td>
                    <td>
                        <a href="#">www.example.com</a>
                    </td>
                    <td>
                        <span class="text-danger">49%</span>
                    </td>
                    <td>10/6/2018</td>
                    <td>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Editer">
                            <i class="fas fa-pen fa-2x text-success"></i>
                        </a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Supprimer">
                            <i class="fas fa-trash fa-2x text-danger"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection