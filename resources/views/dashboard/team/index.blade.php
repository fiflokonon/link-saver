@extends('dashboard.index')
@section('title', "Liste des équipes")
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
                                <li class="breadcrumb-item active">Équipes</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Équipes</h4>
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
                                    <button  class="btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#add-team"><i class="mdi mdi-plus-circle me-2"></i> Nouvelle équipe</button>
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
                                        <th>team</th>
                                        <th>Nom abrégé</th>
                                        <th>Nombre de matchs enregistré</th>
                                        <th style="width: 85px;">Action</th>
                                    </tr>
                                    </thead>
                                    @php $i = 1; @endphp
                                    <tbody>
                                    @foreach($teams as $team)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>
                                                <img src="{{ $team->logo_link }}" alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                                <p class="m-0 d-inline-block align-middle font-16">
                                                    <a href="" class="text-body">{{ $team->name }}</a>
                                                </p>
                                            </td>
                                            <td>{{ strtoupper($team->short_name) }}</td>
                                            <td>
                                                {{ $team->matchs ? $team->matchs->count() : 0 }}
                                            </td>

                                            <td class="table-action">
                                                <a href="javascript:void(0);" onclick="openEditModal({{ $team }})" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
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
                                    Affichage de {{ $teams->firstItem() }} à {{ $teams->lastItem() }} sur {{ $teams->total() }} équipes
                                </div>
                                <ul class="pagination mb-0">
                                    <!-- Lien vers la page précédente -->
                                    @if($teams->onFirstPage())
                                        <li class="page-item disabled"><a class="page-link" href="#">Précédent</a></li>
                                    @else
                                        <li class="page-item"><a class="page-link" href="{{ $teams->previousPageUrl() }}">Précédent</a></li>
                                    @endif

                                    <!-- Liens vers les pages -->
                                    @foreach ($teams->getUrlRange(1, $teams->lastPage()) as $page => $url)
                                        <li class="page-item {{ $page == $teams->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    <!-- Lien vers la page suivante -->
                                    @if($teams->hasMorePages())
                                        <li class="page-item"><a class="page-link" href="{{ $teams->nextPageUrl() }}">Suivant</a></li>
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

    <!-- Add Team modal-->
    <div id="add-team" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Ajouter une équipe</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form class="ps-3 pe-3" action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Nom complet de l'Équipe</label>
                            <input class="form-control" type="text" id="title"  name="name" required="" placeholder="Entrez le nom du club">
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Nom abrégé de l'Équipe</label>
                            <input class="form-control" type="text" id="title"  name="short_name" required="" placeholder="Entrez le nom abrégé du club">
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Logo de l'Équipe</label>
                            <input class="form-control" type="file" id="title"  name="fichier" required="" placeholder="Entrez le logo du club">
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

    <!-- Modal for editing Team -->
    <div id="edit-team-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Modifier une équipe</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form id="edit-team-form" method="POST" action="#">
                        @csrf
                        <!-- Indicate this as a PUT request for update -->
                        <input type="hidden" id="edit-team-id" name="id">
                        <!-- Hidden field for category ID -->

                        <div class="mb-3">
                            <label for="title" class="form-label">Nom complet de l'Équipe</label>
                            <input class="form-control" type="text" id="edit-name"  name="name" required="" placeholder="Entrez le nom du club">
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Nom abrégé de l'Équipe</label>
                            <input class="form-control" type="text" id="edit-short-name"  name="short_name" required="" placeholder="Entrez le nom abrégé du club">
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Logo de l'Équipe</label>
                            <input class="form-control" type="file" id="title"  name="fichier" placeholder="Entrez le logo du club">
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
        function openEditModal(team) {
            // Remplissage des champs du formulaire avec les données de la catégorie sélectionnée
            document.getElementById('edit-team-id').value = team.id;
            document.getElementById('edit-name').value = team.name;
            document.getElementById('edit-short-name').value = team.short_name;

            // Définir l'action du formulaire pour la mise à jour
            document.getElementById('edit-team-form').action = `/teams/${ team.id }/update/` ;

            // Afficher le modal
            $('#edit-team-modal').modal('show');
        }
    </script>
@endsection
