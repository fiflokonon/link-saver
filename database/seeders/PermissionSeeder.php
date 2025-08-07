<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // 🔐 Authentification
            ['title' => "Se connecter", 'code' => "login-users"],
            ['title' => "Se déconnecter", 'code' => "logout-users"],
            ['title' => "Créer un compte", 'code' => "register-users"],
            ['title' => "Modifier son mot de passe", 'code' => "update-password-users"],

            // 🔗 Liens utilisateurs
            ['title' => "Lister ses liens", 'code' => "list-links"],
            ['title' => "Voir un lien", 'code' => "show-links"],
            ['title' => "Créer un lien", 'code' => "create-links"],
            ['title' => "Mettre à jour un lien", 'code' => "update-links"],
            ['title' => "Supprimer un lien", 'code' => "delete-links"],
            ['title' => "Archiver un lien", 'code' => "archive-links"],
            ['title' => "Ajouter ou retirer un lien des favoris", 'code' => "toggle-favorite-links"],
            ['title' => "Générer un QR code pour un lien", 'code' => "generate-qr-links"],
            ['title' => "Voir les statistiques d’un lien", 'code' => "view-stats-links"],

            // 🗂️ Catégories
            ['title' => "Lister les catégories", 'code' => "list-categories"],
            ['title' => "Créer une catégorie", 'code' => "create-categories"],
            ['title' => "Mettre à jour une catégorie", 'code' => "update-categories"],
            ['title' => "Supprimer une catégorie", 'code' => "delete-categories"],

            // ⏰ Alertes
            ['title' => "Lister les alertes", 'code' => "list-alerts"],
            ['title' => "Créer une alerte", 'code' => "create-alerts"],
            ['title' => "Mettre à jour une alerte", 'code' => "update-alerts"],
            ['title' => "Supprimer une alerte", 'code' => "delete-alerts"],

            // 🌐 Liens génériques
            ['title' => "Lister les liens génériques", 'code' => "list-generic_links"],
            ['title' => "Voir un lien générique", 'code' => "show-generic_links"],

            // 👤 Profil
            ['title' => "Voir son profil", 'code' => "show-profile"],
            ['title' => "Modifier son profil", 'code' => "update-profile"],

            // 📊 Statistiques (admin)
            ['title' => "Voir les statistiques globales", 'code' => "view-stats-dashboard"],

            // 🧑‍🔧 Gestion des utilisateurs (admin uniquement)
            ['title' => "Lister les utilisateurs", 'code' => "list-users"],
            ['title' => "Voir un utilisateur", 'code' => "show-users"],
            ['title' => "Créer un utilisateur", 'code' => "create-users"],
            ['title' => "Mettre à jour un utilisateur", 'code' => "update-users"],
            ['title' => "Supprimer un utilisateur", 'code' => "delete-users"]
        ];

        foreach ($permissions as $permission) {
            \App\Models\Permission::create($permission);
        }

    }
}
