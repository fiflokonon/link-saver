@extends('dashboard.index')
@section('title', 'Countries')
@section('content')
    <!--{ app content start }-->
    <div class="main-content app-content mt-0">
        <div class="side-app">
            <!--{ container start }-->
            <div class="main-container container-fluid">
                <!--{ PAGE HEADER START }-->
                <div class="page-header">
                    <h1 class="page-title">Liste des pays</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pays</li>
                        </ol>
                    </div>
                </div>
                <!--{ PAGE HEADER END }-->

                <div class="row">

                    <div class="col-12">
                        <div class="card table-card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="UserList">
                                        <thead>
                                        <tr>
                                            <th>Pays</th>
                                            <th>Code</th>
                                            <th>Indicatif</th>
                                            <th>Devise</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($countries as $country)
                                        <tr>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <div class="avatar avatar-md">
                                                        <img src="/{{ $country->flag }}" alt="flag">
                                                    </div>
                                                    <div class="ms-3">
                                                        <a href="#" class="text-body">
                                                            <span class="text-light">{{ $country->name }}</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                {{ $country->code }}
                                            </td>
                                            <td>
                                                {{ $country->phone_code }}
                                            </td>
                                            <td>
                                                {{ $country->currency }}
                                            </td>
                                            <td>
                                                <span class="badge bg-success text-white fs-14 rounded-2">Active</span>
                                            </td>
                                            <td>
                                                <a href="user-list.html#!"
                                                   class="bg-primary-transparent text-primary p-2 rounded-2 text-center fs-16 me-2">
                                                    <i class="fe fe-edit"></i>
                                                </a>
                                                <a href="user-list.html#!"
                                                   class="bg-danger-transparent text-danger p-2 rounded-2 text-center fs-16">
                                                    <i class="fe fe-trash-2"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--{ container end }-->
        </div>
    </div>
    <!--{ app content end }-->
@endsection

