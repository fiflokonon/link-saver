@extends('dashboard.index')
@section('title', 'Catégories génériques')
@section('content')
    <!--{ app content start }-->
    <div class="main-content app-content mt-0">
        <div class="side-app">
            <!--{ container start }-->
            <div class="main-container container-fluid">
                <!--{ PAGE HEADER START }-->
                <div class="page-header">
                    <h1 class="page-title">Liste des catégories génériques</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Catégories génériques</li>
                        </ol>
                    </div>
                </div>
                <!--{ PAGE HEADER END }-->

                <div class="row">
                    <div class="col-12">
                        <div class="card table-card">
                            <div class="card-header">
                                <div class="d-flex justify-content-end align-items-center">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addGenericCategoryModal">
                                        <i class="fe fe-plus me-1"></i> Ajouter une catégorie
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="GenericCategoriesList">
                                        <thead>
                                        <tr>
                                            <th>Catégorie</th>
                                            <th>Description</th>
                                            <th>Liens</th>
                                            <th>Créée par</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $category)
                                            <tr>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <div class="avatar avatar-md">
                                                            @if($category->icon)
                                                                <img src="/{{ $category->icon }}" alt="icon" class="rounded">
                                                            @else
                                                                <div class="avatar-initial rounded" style="background-color: {{ $category->color ?? '#0d9c1e' }}">
                                                                    <i class="fe fe-folder text-white"></i>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="ms-3">
                                                            <span class="text-light fw-semibold">{{ $category->name }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if($category->description)
                                                        <small class="text-muted">{{ Str::limit($category->description, 100) }}</small>
                                                    @else
                                                        <span class="text-muted">Non définie</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <span class="badge bg-info text-white fs-12 rounded-2">
                                                        {{ $category->links_count }} lien(s)
                                                    </span>
                                                </td>
                                                <td>
                                                    @if($category->user)
                                                        <span class="text-body">{{ $category->user->name }}</span>
                                                    @else
                                                        <span class="text-muted">Système</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($category->status)
                                                        <span class="badge bg-success text-white fs-12 rounded-2">Actif</span>
                                                    @else
                                                        <span class="badge bg-danger text-white fs-12 rounded-2">Inactif</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)"
                                                       class="bg-primary-transparent text-primary p-2 rounded-2 text-center fs-16 me-2"
                                                       title="Modifier"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#editGenericCategoryModal"
                                                       data-id="{{ $category->id }}"
                                                       data-name="{{ $category->name }}"
                                                       data-description="{{ $category->description }}"
                                                       data-color="{{ $category->color }}"
                                                       data-status="{{ $category->status }}">
                                                        <i class="fe fe-edit"></i>
                                                    </a>
                                                    <form action="{{ route('generic-categories.destroy', $category->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                                class="bg-danger-transparent text-danger p-2 rounded-2 text-center fs-16 border-0"
                                                                title="Supprimer"
                                                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')">
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

    <!-- Add Generic Category Modal -->
    <div class="modal fade" id="addGenericCategoryModal" tabindex="-1" aria-labelledby="addGenericCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addGenericCategoryModalLabel">Ajouter une catégorie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('generic-categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="add_name" class="form-label">Nom <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="add_name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="add_description" class="form-label">Description</label>
                            <textarea class="form-control" id="add_description" name="description" rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="add_color" class="form-label">Couleur</label>
                                    <input type="color" class="form-control form-control-color w-100" id="add_color" name="color" value="#0d9c1e">
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
                            <label for="add_icon" class="form-label">Icône</label>
                            <input type="file" class="form-control" id="add_icon" name="icon" accept="image/*">
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

    <!-- Edit Generic Category Modal -->
    <div class="modal fade" id="editGenericCategoryModal" tabindex="-1" aria-labelledby="editGenericCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editGenericCategoryModalLabel">Modifier la catégorie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editGenericCategoryForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit_name" class="form-label">Nom <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="edit_name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_description" class="form-label">Description</label>
                            <textarea class="form-control" id="edit_description" name="description" rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="edit_color" class="form-label">Couleur</label>
                                    <input type="color" class="form-control form-control-color w-100" id="edit_color" name="color">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="edit_status" class="form-label">Status</label>
                                    <select class="form-select" id="edit_status" name="status">
                                        <option value="1">Actif</option>
                                        <option value="0">Inactif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="edit_icon" class="form-label">Icône</label>
                            <input type="file" class="form-control" id="edit_icon" name="icon" accept="image/*">
                            <small class="text-muted">Laisser vide pour conserver l'icône actuelle</small>
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
            const editModal = document.getElementById('editGenericCategoryModal');

            editModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id');
                const name = button.getAttribute('data-name');
                const description = button.getAttribute('data-description');
                const color = button.getAttribute('data-color');
                const status = button.getAttribute('data-status');

                // Mettre à jour l'action du formulaire
                const form = document.getElementById('editGenericCategoryForm');
                form.action = `/generic-categories/${id}`;

                // Pré-remplir les champs
                document.getElementById('edit_name').value = name || '';
                document.getElementById('edit_description').value = description || '';
                document.getElementById('edit_color').value = color || '#0d9c1e';
                document.getElementById('edit_status').value = status || '1';
            });
        });
    </script>
@endsection
