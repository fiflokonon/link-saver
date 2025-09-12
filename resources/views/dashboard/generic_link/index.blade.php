@extends('dashboard.index')
@section('title', 'Liens génériques')
@section('content')
    <!--{ app content start }-->
    <div class="main-content app-content mt-0">
        <div class="side-app">
            <!--{ container start }-->
            <div class="main-container container-fluid">
                <!--{ PAGE HEADER START }-->
                <div class="page-header">
                    <h1 class="page-title">Liste des liens génériques</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Liens génériques</li>
                        </ol>
                    </div>
                </div>
                <!--{ PAGE HEADER END }-->

                <div class="row">
                    <div class="col-12">
                        <div class="card table-card">
                            <div class="card-header">
                                <div class="d-flex justify-content-end align-items-center">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addGenericLinkModal">
                                        <i class="fe fe-plus me-1"></i> Ajouter un lien
                                    </button>
                                </div>
                            </div>


                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="GenericLinksList">
                                        <thead>
                                        <tr>
                                            <th>Lien</th>
                                            <th>Catégorie</th>
                                            <th>Pays</th>
                                            <th>Utilisateur</th>
                                            <th>Validation</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($genericLinks as $link)
                                            <tr>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <div class="avatar avatar-md">
                                                            @if($link->icon)
                                                                <img src="/{{ $link->icon }}" alt="icon" class="rounded">
                                                            @else
                                                                <div class="avatar-initial bg-primary rounded">
                                                                    <i class="fe fe-link text-white"></i>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="ms-3">
                                                            <a href="{{ $link->url }}" target="_blank" class="text-body">
                                                                <span class="text-light fw-semibold">{{ $link->title }}</span>
                                                            </a>
                                                            @if($link->description)
                                                                <br>
                                                                <small class="text-muted">{{ Str::limit($link->description, 50) }}</small>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if($link->category)
                                                        <span class="badge bg-info text-white fs-12 rounded-2">
                                                        {{ $link->category->name }}
                                                    </span>
                                                    @else
                                                        <span class="text-muted">Non définie</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($link->country)
                                                        <div class="d-flex align-items-center">
                                                            <img src="/{{ $link->country->flag }}" alt="flag" class="avatar avatar-xs me-2">
                                                            <span>{{ $link->country->name }}</span>
                                                        </div>
                                                    @else
                                                        <span class="text-muted">Global</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($link->user)
                                                        <span class="text-body">{{ $link->user->name }}</span>
                                                    @else
                                                        <span class="text-muted">Système</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @switch($link->validation_status)
                                                        @case('approved')
                                                            <span class="badge bg-success text-white fs-12 rounded-2">Approuvé</span>
                                                            @break
                                                        @case('pending')
                                                            <span class="badge bg-warning text-white fs-12 rounded-2">En attente</span>
                                                            @break
                                                        @case('rejected')
                                                            <span class="badge bg-danger text-white fs-12 rounded-2">Rejeté</span>
                                                            @break
                                                        @default
                                                            <span class="badge bg-secondary text-white fs-12 rounded-2">Non défini</span>
                                                    @endswitch
                                                </td>
                                                <td>
                                                    @if($link->status == 'active')
                                                        <span class="badge bg-success text-white fs-14 rounded-2">Actif</span>
                                                    @else
                                                        <span class="badge bg-danger text-white fs-14 rounded-2">Inactif</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('generic-links.show', $link->id) }}"
                                                       class="bg-info-transparent text-info p-2 rounded-2 text-center fs-16 me-2"
                                                       title="Voir">
                                                        <i class="fe fe-eye"></i>
                                                    </a>
                                                    <a href="{{ route('generic-links.edit', $link->id) }}"
                                                       class="bg-primary-transparent text-primary p-2 rounded-2 text-center fs-16 me-2"
                                                       title="Modifier">
                                                        <i class="fe fe-edit"></i>
                                                    </a>
                                                    <form action="{{ route('generic-links.destroy', $link->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                                class="bg-danger-transparent text-danger p-2 rounded-2 text-center fs-16 border-0"
                                                                title="Supprimer"
                                                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce lien ?')">
                                                            <i class="fe fe-trash-2"></i>
                                                        </button>
                                                    </form>
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

    <!-- Add Generic Link Modal -->
    <div class="modal fade" id="addGenericLinkModal" tabindex="-1" aria-labelledby="addGenericLinkModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addGenericLinkModalLabel">Ajouter un lien générique</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('generic-links.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="add_title" class="form-label">Titre <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="add_title" name="title" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="add_url" class="form-label">URL <span class="text-danger">*</span></label>
                                    <input type="url" class="form-control" id="add_url" name="url" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="add_description" class="form-label">Description</label>
                            <textarea class="form-control" id="add_description" name="description" rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="add_category_id" class="form-label">Catégorie</label>
                                    <select class="form-select" id="add_category_id" name="category_id">
                                        <option value="">Sélectionner une catégorie</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="add_country_id" class="form-label">Pays</label>
                                    <select class="form-select" id="add_country_id" name="country_id">
                                        <option value="">Global (tous les pays)</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="add_icon" class="form-label">Icône</label>
                                    <input type="file" class="form-control" id="add_icon" name="icon" accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="add_status" class="form-label">Status</label>
                                    <select class="form-select" id="add_status" name="status">
                                        <option value="1">Actif</option>
                                        <option value="0">Inactif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="add_validation_status" class="form-label">Statut de validation</label>
                            <select class="form-select" id="add_validation_status" name="validation_status">
                                <option value="pending">En attente</option>
                                <option value="approved">Approuvé</option>
                                <option value="rejected">Rejeté</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Generic Link Modal -->
    <div class="modal fade" id="editGenericLinkModal" tabindex="-1" aria-labelledby="editGenericLinkModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editGenericLinkModalLabel">Modifier le lien générique</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editGenericLinkForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="edit_title" class="form-label">Titre <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="edit_title" name="title" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="edit_url" class="form-label">URL <span class="text-danger">*</span></label>
                                    <input type="url" class="form-control" id="edit_url" name="url" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="edit_description" class="form-label">Description</label>
                            <textarea class="form-control" id="edit_description" name="description" rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="edit_category_id" class="form-label">Catégorie</label>
                                    <select class="form-select" id="edit_category_id" name="category_id">
                                        <option value="">Sélectionner une catégorie</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="edit_country_id" class="form-label">Pays</label>
                                    <select class="form-select" id="edit_country_id" name="country_id">
                                        <option value="">Global (tous les pays)</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="edit_icon" class="form-label">Icône</label>
                                    <input type="file" class="form-control" id="edit_icon" name="icon" accept="image/*">
                                    <small class="text-muted">Laisser vide pour conserver l'icône actuelle</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="edit_status" class="form-label">Status</label>
                                    <select class="form-select" id="edit_status" name="status">
                                        <option value="active">Actif</option>
                                        <option value="inactive">Inactif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="edit_validation_status" class="form-label">Statut de validation</label>
                            <select class="form-select" id="edit_validation_status" name="validation_status">
                                <option value="pending">En attente</option>
                                <option value="approved">Approuvé</option>
                                <option value="rejected">Rejeté</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Script pour pré-remplir le modal de modification
        document.addEventListener('DOMContentLoaded', function() {
            const editModal = document.getElementById('editGenericLinkModal');

            editModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id');
                const title = button.getAttribute('data-title');
                const description = button.getAttribute('data-description');
                const url = button.getAttribute('data-url');
                const countryId = button.getAttribute('data-country-id');
                const categoryId = button.getAttribute('data-category-id');
                const status = button.getAttribute('data-status');
                const validationStatus = button.getAttribute('data-validation-status');

                // Mettre à jour l'action du formulaire
                const form = document.getElementById('editGenericLinkForm');
                form.action = `/generic-links/${id}`;

                // Pré-remplir les champs
                document.getElementById('edit_title').value = title || '';
                document.getElementById('edit_description').value = description || '';
                document.getElementById('edit_url').value = url || '';
                document.getElementById('edit_country_id').value = countryId || '';
                document.getElementById('edit_category_id').value = categoryId || '';
                document.getElementById('edit_status').value = status || 'active';
                document.getElementById('edit_validation_status').value = validationStatus || 'pending';
            });
        });
    </script>
@endsection
