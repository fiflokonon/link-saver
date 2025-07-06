@extends('dashboard.index')
@section('title', "Liste des joueurs")
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
                                <li class="breadcrumb-item active">Joueurs</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Joueurs</h4>
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
                                    <button  class="btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#add-player" ><i class="mdi mdi-plus-circle me-2"></i> Nouveau joueur</button>
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
                                        <th>Joueur</th>
                                        <th>Pays</th>
                                        <th>Pose</th>
                                        <th style="width: 85px;">Action</th>
                                    </tr>
                                    </thead>
                                    @php $i = ($players->currentPage() - 1) * $players->perPage() + 1; @endphp
                                    <tbody>
                                    @foreach($players as $player)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>
                                                <img src="/{{ $player->photo }}" alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                                <p class="m-0 d-inline-block align-middle font-16">
                                                    <a href="" class="text-body">{{ $player->fullname }}</a>
                                                </p>
                                            </td>
                                            <td>
                                                {{ $player->country->name }}
                                            </td>
                                            <td>
                                                {{ $player->position  }}
                                            </td>
                                            <td class="table-action">
                                                <a href="javascript:void(0);" onclick="openEditModal({{ $player }})" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
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
                                    Affichage de {{ $players->firstItem() }} à {{ $players->lastItem() }} sur {{ $players->total() }} joueurs
                                </div>
                                <ul class="pagination mb-0">
                                    <!-- Lien vers la page précédente -->
                                    @if($players->onFirstPage())
                                        <li class="page-item disabled"><a class="page-link" href="#">Précédent</a></li>
                                    @else
                                        <li class="page-item"><a class="page-link" href="{{ $players->previousPageUrl() }}">Précédent</a></li>
                                    @endif

                                    <!-- Liens vers les pages -->
                                    @foreach ($players->getUrlRange(1, $players->lastPage()) as $page => $url)
                                        <li class="page-item {{ $page == $players->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    <!-- Lien vers la page suivante -->
                                    @if($players->hasMorePages())
                                        <li class="page-item"><a class="page-link" href="{{ $players->nextPageUrl() }}">Suivant</a></li>
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

    <!-- Add Player modal-->
    <div id="add-player" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Ajouter un nouveau joueur</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form class="ps-3 pe-3" action="{{ route('players.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Nom complet du joueur</label>
                            <input class="form-control" type="text" id="title"  name="fullname" required="" placeholder="Entrez le nom complet du joueur">
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Pays</label>
                            <select class="form-select" id="country" name="country_id" required="">
                                <option value="">Sélectionnez un pays</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Poste</label>
                            <select class="form-select" name="position" id="position" required>
                                <option value="">Sélectionnez un poste</option>
                                <option value="Gardien de but">Gardien de but</option>
                                <option value="Défenseur">Défenseur</option>
                                <option value="Milieu">Milieu</option>
                                <option value="Attaquant">Attaquant</option>
                                <option value="Aillier">Aillier</option>
                                <option value="Avant-centre">Avant-centre</option>
                                <option value="Arrière-droit">Arrière-droit</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">Image du joueur</label>
                            <input type="file" class="form-control" name="photo">
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

    <!-- Modal for editing player -->
    <div id="edit-player-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Modifier les informations du joueur</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form id="edit-player-form" method="POST" action="#" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Indicate this as a PUT request for update -->
                        <input type="hidden" id="edit-player-id" name="id">
                        <!-- Hidden field for category ID -->

                        <div class="mb-3">
                            <label for="title" class="form-label">Nom complet du joueur</label>
                            <input class="form-control" type="text" id="edit-fullname"  name="fullname" required="" placeholder="Entrez le nom complet du joueur">
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Pays</label>
                            <select class="form-select" id="country" name="country_id" required="">
                                <option value="">Sélectionnez un pays</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Poste</label>
                            <select class="form-select" name="position" id="edit-position" required>
                                <option value="">Sélectionnez un poste</option>
                                <option value="Gardien de but">Gardien de but</option>
                                <option value="Défenseur">Défenseur</option>
                                <option value="Milieu">Milieu</option>
                                <option value="Attaquant">Attaquant</option>
                                <option value="Aillier">Aillier</option>
                                <option value="Avant-centre">Avant-centre</option>
                                <option value="Arrière-droit">Arrière-droit</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">Image du joueur</label>
                            <input type="file" class="form-control" name="photo">
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
        function openEditModal(player) {

            // Remplissage des champs du formulaire avec les données de la catégorie sélectionnée
            document.getElementById('edit-player-id').value = player.id;
            document.getElementById('edit-fullname').value = player.fullname;

            // Définir l'action du formulaire pour la mise à jour
            document.getElementById('edit-player-form').action = `/gamers/${ player.id }/update` ;

            // Afficher le modal
            $('#edit-player-modal').modal('show');
        }
    </script>
@endsection
