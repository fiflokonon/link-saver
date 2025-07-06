@extends('dashboard.index')
@section('title', "Liste des sondages")
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
                                <li class="breadcrumb-item active">Sondages</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Sondages</h4>
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
                                    <a href="{{ route('new_poll') }}" class="btn btn-danger mb-2">
                                        <i class="mdi mdi-plus-circle me-2"></i> Nouveau sondage
                                    </a>
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
                                        <th>Titre</th>
                                        <th>Nombre d'options</th>
                                        <th>Nombre de vote enregistré</th>
                                        <th>Statut</th>
                                        <th>Date de fin</th>
                                        <th style="width: 120px;">Action</th>
                                    </tr>
                                    </thead>
                                    @php $i = ($polls->currentPage() - 1) * $polls->perPage() + 1; @endphp
                                    <tbody>
                                    @foreach($polls as $poll)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>
                                                <p class="m-0 d-inline-block align-middle font-16">
                                                    <a href="#" class="text-body">{{ $poll->title }}</a>
                                                </p>
                                            </td>
                                            <td>{{ $poll->options ? $poll->options->count() : 0 }}</td>
                                            <td>{{ $poll->total_votes() }}</td>
                                            <td>
                                                @if($poll->active)
                                                    <span class="badge bg-success">Actif</span>
                                                @else
                                                    <span class="badge bg-danger">Inactif</span>
                                                @endif
                                            </td>
                                            <td>{{ $poll->expiration_date }}</td>
                                            <td class="table-action">
                                                <a href="{{ route('poll_details', $poll->id) }}" class="btn action-icon">
                                                    <i class="mdi mdi-eye"></i>
                                                </a>
                                                @if(!$poll->active)
                                                    <a href="{{ route('activate_poll', $poll->id) }}" class="action-icon">
                                                        <i class="mdi mdi-check-circle"></i>
                                                    </a>
                                                @else
                                                    <a href="javascript:void(0);" class="btn action-icon text-primary"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#editDateModal"
                                                       onclick="openModal({{ $poll->id }}, '{{ $poll->expiration_date }}')">
                                                        <i class="mdi mdi-calendar"></i>
                                                    </a>
                                                @endif
                                                <a href="{{ route('edit_poll', $poll->id) }}" class="btn action-icon">
                                                    <i class="mdi mdi-pen"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination personnalisée -->
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    Affichage de {{ $polls->firstItem() }} à {{ $polls->lastItem() }} sur {{ $polls->total() }} sondages
                                </div>
                                <ul class="pagination mb-0">
                                    @if($polls->onFirstPage())
                                        <li class="page-item disabled"><a class="page-link" href="#">Précédent</a></li>
                                    @else
                                        <li class="page-item"><a class="page-link" href="{{ $polls->previousPageUrl() }}">Précédent</a></li>
                                    @endif
                                    @foreach ($polls->getUrlRange(1, $polls->lastPage()) as $page => $url)
                                        <li class="page-item {{ $page == $polls->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                    @if($polls->hasMorePages())
                                        <li class="page-item"><a class="page-link" href="{{ $polls->nextPageUrl() }}">Suivant</a></li>
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

    <!-- Modal pour modifier la date de fin -->
    <div id="editDateModal" class="modal fade" tabindex="-1" aria-labelledby="editDateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDateModalLabel">Modifier la date de fin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editDateForm" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="poll_id" id="poll_id">
                        <div class="mb-3">
                            <label for="expiration_date" class="form-label">Nouvelle date de fin</label>
                            <input type="datetime-local" class="form-control" id="expiration_date" name="expiration_date" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openModal(pollId, expirationDate) {
            document.getElementById('poll_id').value = pollId;
            document.getElementById('expiration_date').value = expirationDate;
            document.getElementById('editDateForm').action = '/polls/' + pollId + '/update-date';
        }
    </script>

@endsection
