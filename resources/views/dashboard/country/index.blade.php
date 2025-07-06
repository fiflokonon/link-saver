@extends('dashboard.index')
@section('title', "Liste des pays")
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
                                <li class="breadcrumb-item active">Pays</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Pays</h4>
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
                                    <button  class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Nouveau pays</button>
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
                                        <th>Pays</th>
                                        <th>Continent</th>
                                        <th>Nombre de joueurs enregistré</th>
                                        <th style="width: 85px;">Action</th>
                                    </tr>
                                    </thead>
                                    @php $i = ($countries->currentPage() - 1) * $countries->perPage() + 1; @endphp
                                    <tbody>
                                    @foreach($countries as $country)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>
                                                <img src="/{{ $country->flag }}" alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                                <p class="m-0 d-inline-block align-middle font-16">
                                                    <a href="apps-ecommerce-products-details.html" class="text-body">{{ $country->name }}</a>
                                                </p>
                                            </td>
                                            <td>
                                                {{ $country->continent->name }}
                                            </td>
                                            <td>
                                                {{ $country->players ? $country->players->count() : 0 }}
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
                                    Affichage de {{ $countries->firstItem() }} à {{ $countries->lastItem() }} sur {{ $countries->total() }} pays
                                </div>
                                <ul class="pagination mb-0">
                                    <!-- Lien vers la page précédente -->
                                    @if($countries->onFirstPage())
                                        <li class="page-item disabled"><a class="page-link" href="#">Précédent</a></li>
                                    @else
                                        <li class="page-item"><a class="page-link" href="{{ $countries->previousPageUrl() }}">Précédent</a></li>
                                    @endif

                                    <!-- Liens vers les pages -->
                                    @foreach ($countries->getUrlRange(1, $countries->lastPage()) as $page => $url)
                                        <li class="page-item {{ $page == $countries->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    <!-- Lien vers la page suivante -->
                                    @if($countries->hasMorePages())
                                        <li class="page-item"><a class="page-link" href="{{ $countries->nextPageUrl() }}">Suivant</a></li>
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
    <div id="add-variety" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Ajouter variété d'ananas</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <a href="index.html" class="text-success">
                            <span><img src="/dashboard/assets/images/logo-dark.png" alt="" height="18"></span>
                        </a>
                    </div>

                    <form class="ps-3 pe-3" action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Titre de la variété</label>
                            <input class="form-control" type="text" id="title"  name="title" required="" placeholder="Entrez le titre de la variété">
                        </div>

                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Description de la variété</label>
                            <input class="form-control" name="description" type="text" id="emailaddress" required="" placeholder="Entrez la description">
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
