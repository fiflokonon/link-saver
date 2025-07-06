@extends('dashboard.index')
@section('title', "Liste des contributeurs")
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Vote Carréfoot</a></li>
                                <li class="breadcrumb-item active">Contributeurs</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Contributeurs</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-sm-5">
                                    <button  class="btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#add-contributor"><i class="mdi mdi-plus-circle me-2"></i> Nouveau Contributeur</button>
                                </div>
                                <div class="col-sm-7">
                                    <div class="text-sm-end">
                                        <button type="button" class="btn btn-light mb-2">Export</button>
                                    </div>
                                </div><!-- end col-->
                            </div>

                            <div class="table-responsive">
                                <table class="table table-centered w-100 dt-responsive nowrap">
                                    <thead class="table-light">
                                    <tr>
                                        <th>Nø</th>
                                        <th>Contributeur</th>
                                        <th>Civilité</th>
                                        <th>Poste</th>
                                        <th style="width: 85px;">Action</th>
                                    </tr>
                                    </thead>
                                    @php $i = ($contributors->currentPage() - 1) * $contributors->perPage() + 1; @endphp
                                    <tbody>
                                    @foreach($contributors as $contributor)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>
                                                <img src="{{ $contributor->photo }}" alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                                <p class="m-0 d-inline-block align-middle font-16">
                                                    <a href="apps-ecommerce-products-details.html" class="text-body">{{ $contributor->fullname }}</a>
                                                </p>
                                            </td>
                                            <td>
                                                {{ $contributor->civility }}
                                            </td>
                                            <td>
                                                {{ $contributor->position  }}
                                            </td>
                                            <td class="table-action">
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination personnalisée -->
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    Affichage de {{ $contributors->firstItem() }} à {{ $contributors->lastItem() }} sur {{ $contributors->total() }} contributeurs
                                </div>
                                <ul class="pagination mb-0">
                                    <!-- Lien vers la page précédente -->
                                    @if($contributors->onFirstPage())
                                        <li class="page-item disabled"><a class="page-link" href="#">Précédent</a></li>
                                    @else
                                        <li class="page-item"><a class="page-link" href="{{ $contributors->previousPageUrl() }}">Précédent</a></li>
                                    @endif

                                    <!-- Liens vers les pages -->
                                    @foreach ($contributors->getUrlRange(1, $contributors->lastPage()) as $page => $url)
                                        <li class="page-item {{ $page == $contributors->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    <!-- Lien vers la page suivante -->
                                    @if($contributors->hasMorePages())
                                        <li class="page-item"><a class="page-link" href="{{ $contributors->nextPageUrl() }}">Suivant</a></li>
                                    @else
                                        <li class="page-item disabled"><a class="page-link" href="#">Suivant</a></li>
                                    @endif
                                </ul>
                            </div>


                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div>
    <!-- content -->

    <!-- Add Variety modal-->
    <div id="add-contributor" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Ajouter un contributeur</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form class="ps-3 pe-3" action="{{ route('contributors.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="civility" class="form-label">Civilité</label>
                            <select name="civility" id="civility" class="form-select">
                                <option disabled selected>Choisir la civilité</option>
                                <option value="MR">MR</option>
                                <option value="MME">MME</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Nom complet du/de la  contributeur/contributrice</label>
                            <input class="form-control" type="text" id="title"  name="fullname" required="" placeholder="Entrez le nom complet du/de la  contributeur/contributrice">
                        </div>

                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Poste</label>
                            <input class="form-control" name="position" type="text" id="emailaddress" required="" placeholder="Entrez l'intitulé du poste">
                        </div>

                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Photo</label>
                            <input class="form-control" name="photo" type="file" id="emailaddress" required="">
                        </div>

                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Lien du site web</label>
                            <input class="form-control" name="website" type="text" id="emailaddress" required="" placeholder="Entrez le lien du site web">
                        </div>

                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Lien facebook</label>
                            <input class="form-control" name="facebook" type="text" id="emailaddress" required="" placeholder="Entrez le lien facebook">
                        </div>

                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Lien instagram</label>
                            <input class="form-control" name="instagram" type="text" id="emailaddress" required="" placeholder="Entrez le lien instagram">
                        </div>

                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Lien linkedin</label>
                            <input class="form-control" name="linkedin" type="text" id="emailaddress" required="" placeholder="Entrez le lien linkedin">
                        </div>
                        <div class="mb-3 text-center">
                            <button class="btn btn-primary" type="submit">Enregistrer</button>
                        </div>
                    </form>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Modal for editing variety -->
    <div id="edit-variety-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Modifier une variété d'ananas</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <a href="index.html" class="text-success">
                            <span><img src="/dashboard/assets/images/logo-dark.png" alt="" height="18"></span>
                        </a>
                    </div>

                    <form id="edit-category-form" method="POST" action="#">
                        @csrf
                        <!-- Indicate this as a PUT request for update -->
                        <input type="hidden" id="edit-variety-id" name="id">
                        <!-- Hidden field for category ID -->

                        <div class="mb-3">
                            <label for="edit-title" class="form-label">Titre de la variété</label>
                            <input class="form-control" type="text" id="edit-title" name="title" required placeholder="Entrez le titre de la variété">
                        </div>

                        <div class="mb-3">
                            <label for="edit-description" class="form-label">Description de la variété</label>
                            <input class="form-control" type="text" id="edit-description" name="description" required placeholder="Entrez la description">
                        </div>

                        <div class="mb-3 text-center">
                            <button class="btn btn-primary" type="submit">Enregistrer les modifications</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script>
        function openEditModal(variety) {
            // Remplissage des champs du formulaire avec les données de la catégorie sélectionnée
            document.getElementById('edit-variety-id').value = variety.id;
            document.getElementById('edit-title').value = variety.title;
            document.getElementById('edit-description').value = variety.description;

            // Définir l'action du formulaire pour la mise à jour
            document.getElementById('edit-variety-modal').action = `/varieties/${ variety.id }/update/` ;

            // Afficher le modal
            $('#edit-variety-modal').modal('show');
        }
    </script>
@endsection
