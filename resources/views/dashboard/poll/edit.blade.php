@extends('dashboard.index')
@section('title', "Modifier le sondage")
@section('content')

    <style>
        #dynamic-options {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: flex-start;
            margin-top: 15px;
        }

        .option {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            transition: box-shadow 0.3s ease-in-out;
        }

        .option:hover {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        .option img.option-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 50%;
        }

        .option input[type="checkbox"] {
            width: 20px;
            height: 20px;
            margin: 0;
            accent-color: #007bff;
            cursor: pointer;
        }

        .option label {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 0;
        }

        .option span {
            font-size: 1em;
            font-weight: 600;
            color: #333;
        }
    </style>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Vote Carréfoot</a></li>
                                <li class="breadcrumb-item active">Modifier un sondage</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Modifier le sondage</h4>
                    </div>
                </div>
            </div>

            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('polls.update', $poll->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="title" class="form-label">Titre du sondage</label>
                                <input type="text" id="title" name="title" class="form-control" required value="{{ $poll->title }}">
                            </div>

                            <div class="mb-3">
                                <label for="short_description">Description courte</label>
                                <textarea id="short_description" class="form-control" name="short_description" required>{{ $poll->short_description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" class="form-control" name="description">{{ $poll->description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="type" class="form-label">Type de sondage</label>
                                <select id="type" name="type" required class="form-select">
                                    <option value="player" {{ $poll->type == 'player' ? 'selected' : '' }}>Joueur</option>
                                    <option value="country" {{ $poll->type == 'country' ? 'selected' : '' }}>Pays</option>
                                </select>
                            </div>

                            <div id="dynamic-options" style="display: none;">
                                <!-- Les options seront générées dynamiquement -->
                            </div>

                            <div class="mb-3">
                                <label for="expiration_date" class="form-label">Date d'expiration</label>
                                <input type="datetime-local" id="expiration_date" class="form-control" name="expiration_date" required value="{{ \Carbon\Carbon::parse($poll->expiration_date)->format('Y-m-d\TH:i') }}">
                            </div>

                            <button type="submit" class="btn btn-primary mt">Mettre à jour</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const typeSelect = document.getElementById('type');
            const dynamicOptions = document.getElementById('dynamic-options');
            const selectedOptions = @json($poll->options->pluck('optionable_id')); // Récupère les options sélectionnées

            async function loadOptions(type) {
                if (!type) {
                    dynamicOptions.style.display = 'none';
                    dynamicOptions.innerHTML = '';
                    return;
                }

                dynamicOptions.style.display = 'block';
                dynamicOptions.innerHTML = 'Chargement des options...';

                try {
                    let response;
                    if (type === 'country') {
                        response = await fetch(`/api/countries`);
                    } else {
                        response = await fetch(`/api/${type.toLowerCase()}s`);
                    }

                    const data = await response.json();
                    //console.log('DATA:', data);
                    if (data.success) {
                        dynamicOptions.innerHTML = data.response.map(option => {
                            const isChecked = selectedOptions.includes(option.id) ? 'checked' : '';
                            console.log(selectedOptions);
                            if (type === 'player') {
                                return `
                                <div class="col-md-3 mb-3">
                                    <div class="option d-flex align-items-center">
                                        <input type="checkbox" name="options[]" value="${option.id}" ${isChecked} class="me-2">
                                        <img src="/${option.photo || 'default-player.png'}" alt="${option.name || 'Joueur'}" class="option-image rounded-circle me-2" style="width: 50px; height: 50px; object-fit: cover;">
                                        <div>
                                            <span>${option.name || 'Nom indisponible'}</span><br>
                                            <small>${option.position || 'Poste inconnu'}</small>
                                        </div>
                                    </div>
                                </div>
                            `;
                            } else if (type === 'country') {
                                return `
                                <div class="col-md-3 mb-3">
                                    <div class="option d-flex align-items-center">
                                        <input type="checkbox" name="options[]" value="${option.id}" ${isChecked} class="me-2">
                                        <img src="/${option.flag || 'default-flag.png'}" alt="${option.name || 'Pays'}" class="option-image rounded-circle me-2" style="width: 50px; height: 50px; object-fit: cover;">
                                        <span>${option.name || 'Nom indisponible'}</span>
                                    </div>
                                </div>
                            `;
                            }
                        }).join('');

                        dynamicOptions.innerHTML = `<div class="row">${dynamicOptions.innerHTML}</div>`;
                    } else {
                        dynamicOptions.innerHTML = `<p>${data.message}</p>`;
                    }
                } catch (error) {
                    console.error('Erreur lors du chargement des options :', error);
                    dynamicOptions.innerHTML = '<p>Une erreur est survenue. Veuillez réessayer.</p>';
                }
            }

            typeSelect.addEventListener('change', function () {
                loadOptions(this.value);
            });

            // Charger les options au chargement de la page
            loadOptions(typeSelect.value);
        });
    </script>

@endsection
