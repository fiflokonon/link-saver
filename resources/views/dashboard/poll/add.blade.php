@extends('dashboard.index')
@section('title', "Nouveau sondage")
@section('content')
    <style>
        #dynamic-options {
            display: flex;
            flex-wrap: wrap; /* Permet aux options de passer à la ligne si nécessaire */
            gap: 15px; /* Espacement entre les éléments */
            justify-content: flex-start; /* Alignement horizontal */
            margin-top: 15px;
        }

        /* Style général des options */
        .option {
            display: flex;
            align-items: center;
            gap: 10px; /* Espacement */
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff; /* Fond blanc pour unifier */
            transition: box-shadow 0.3s ease-in-out;
        }

        .option:hover {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2); /* Effet hover léger */
        }

        /* Style pour l'image */
        .option img.option-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 50%;
        }

        /* Style du checkbox */
        .option input[type="checkbox"] {
            width: 20px; /* Taille fixe pour le checkbox */
            height: 20px;
            margin: 0; /* Retire les marges par défaut */
            accent-color: #007bff; /* Couleur principale Bootstrap */
            cursor: pointer;
        }

        /* Alignement vertical précis */
        .option label {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 0;
        }

        /* Texte de l'option */
        .option span {
            font-size: 1em;
            font-weight: 600;
            color: #333;
        }


    </style>
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
                                <li class="breadcrumb-item active">Ajouter un sondage</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Ajouter un sondage</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('polls.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Titre du sondage</label>
                                <input type="text" id="title" name="title" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="short_description">Description courte</label>
                                <textarea id="short_description" class="form-control" name="short_description" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" class="form-control" name="description"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="type" class="form-label">Type de sondage</label>
                                <select id="type" name="type" required class="form-select">
                                    <option value="">Sélectionnez un type</option>
                                    <option value="player">Joueur</option>
                                    <option value="country">Pays</option>
                                    <option value="team">Club ou Équipe</option>
                                </select>
                            </div>

                            <div id="dynamic-options" style="display: none;">
                                <!-- Les options dépendront du JS -->
                            </div>

                            <div class="mb-3">
                                <label for="expiration_date" class="form-label">Date d'expiration</label>
                                <input type="datetime-local" id="expiration_date" class="form-control" name="expiration_date" required>
                            </div>

                            <button type="submit" class="btn btn-primary mt">Créer le sondage</button>
                        </form>

                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- container -->

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const typeSelect = document.getElementById('type');
            const dynamicOptions = document.getElementById('dynamic-options');

            typeSelect.addEventListener('change', async function () {
                const type = this.value;

                if (!type) {
                    dynamicOptions.style.display = 'none';
                    dynamicOptions.innerHTML = '';
                    return;
                }

                // Afficher le conteneur et charger les options dynamiques
                dynamicOptions.style.display = 'block';
                dynamicOptions.innerHTML = 'Chargement des options...';

                try {
                    var response;
                    if (type === 'country'){
                        response = await fetch(`/api/countries`);
                    }else {
                        response = await fetch(`/api/${type.toLowerCase()}s`);
                    }
                    const data = await response.json();

                    if (data.success) {
                        dynamicOptions.innerHTML = data.response.map(option => {
                            if (type === 'player') {
                                return `
                            <div class="col-md-3 mb-3">
                                <div class="option d-flex align-items-center">
                                    <input type="checkbox" name="options[]" value="${option.id}" class="me-2">
                                    <img src="${option.photo || 'default-player.png'}" alt="${option.name || 'Joueur'}" class="option-image rounded-circle me-2" style="width: 50px; height: 50px; object-fit: cover;">
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
                                    <input type="checkbox" name="options[]" value="${option.id}" class="me-2">
                                    <img src="${option.flag || 'default-flag.png'}" alt="${option.name || 'Pays'}" class="option-image rounded-circle me-2" style="width: 50px; height: 50px; object-fit: cover;">
                                    <span>${option.name || 'Nom indisponible'}</span>
                                </div>
                            </div>
                            `;
                            }
                            else if (type === 'team') {
                                return `
                            <div class="col-md-3 mb-3">
                                <div class="option d-flex align-items-center">
                                    <input type="checkbox" name="options[]" value="${option.id}" class="me-2">
                                    <img src="${option.logo_link || 'default-flag.png'}" alt="${option.name || 'Pays'}" class="option-image rounded-circle me-2" style="width: 50px; height: 50px; object-fit: cover;">
                                    <span>${option.name || 'Nom indisponible'}</span>
                                </div>
                            </div>
                            `;
                            }
                        }).join('');
                        // Wrap the entire content in a row
                        dynamicOptions.innerHTML = `<div class="row">${dynamicOptions.innerHTML}</div>`;
                    } else {
                        dynamicOptions.innerHTML = `<p>${data.message}</p>`;
                    }
                } catch (error) {
                    console.error('Erreur lors du chargement des options :', error);
                    dynamicOptions.innerHTML = '<p>Une erreur est survenue. Veuillez réessayer.</p>';
                }
            });
        });

    </script>

@endsection
