<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenericLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genericLinks = [
            [
                'title' => 'Google',
                'url' => 'https://www.google.com',
                'description' => 'Moteur de recherche populaire.',
                'status' => true
            ],
            [
                'title' => 'Facebook',
                'url' => 'https://www.facebook.com',
                'description' => 'Réseau social pour se connecter avec des amis et la famille.',
                'status' => true
            ],
            [
                'title' => 'Twitter',
                'url' => 'https://www.twitter.com',
                'description' => 'Plateforme de microblogging pour partager des pensées en 280 caractères.',
                'status' => true
            ],
            [
                'title' => 'LinkedIn',
                'url' => 'https://www.linkedin.com',
                'description' => "Réseau professionnel pour le réseautage et la recherche d'emploi.",
                'status' => true
            ],
            [
                'title' => 'YouTube',
                'url' => 'https://www.youtube.com',
                'description' => "Plateforme de partage de vidéos.",
                'status' => true
            ],
            [
                'title' => 'Wikipedia',
                'url' => 'https://www.wikipedia.org',
                'description' => "Encyclopédie en ligne gratuite et collaborative.",
                'status' => true
            ],
            [
                'title' => 'Amazon',
                'url' => 'https://www.amazon.com',
                'description' => "Site de commerce électronique pour acheter une variété de produits.",
                'status' => true
            ],
            [
                'title' => 'Reddit',
                'url' => 'https://www.reddit.com',
                'description' => "Plateforme de discussion et de partage de contenu.",
                'status' => true
            ],
            [
                'title' => 'Instagram',
                'url' => 'https://www.instagram.com',
                'description' => "Réseau social axé sur le partage de photos et de vidéos.",
                'status' => true,
            ],
            [
                'title' => 'Netflix',
                'url' => 'https://www.netflix.com',
                'description' => "Service de streaming pour regarder des films et des séries TV.",
                'status' => true,
            ],
            [
                'title' => 'GitHub',
                'url' => 'https://www.github.com',
                'description' => "Plateforme de développement collaboratif pour héberger et gérer du code.",
                'status' => true,
            ],
            [
                'title' => 'Stack Overflow',
                'url' => 'https://stackoverflow.com',
                'description' => "Communauté de questions-réponses pour les programmeurs.",
                'status' => true,
            ],
            [
                'title' => 'Pinterest',
                'url' => 'https://www.pinterest.com',
                'description' => "Plateforme de découverte visuelle pour trouver des idées et de l'inspiration.",
                'status' => true,
            ],
            [
                'title' => 'TikTok',
                'url' => 'https://www.tiktok.com',
                'description' => "Application de partage de vidéos courtes et virales.",
                'status' => true,
            ],
            [
                'title' => 'Spotify',
                'url' => 'https://www.spotify.com',
                'description' => "Service de streaming musical pour écouter des chansons et des podcasts.",
                'status' => true,
            ],
            [
                'title' => 'Dropbox',
                'url' => 'https://www.dropbox.com',
                'description' => "Service de stockage en ligne pour sauvegarder et partager des fichiers.",
                'status' => true,
            ],
            [
                'title' => 'Quora',
                'url' => 'https://www.quora.com',
                'description' => "Plateforme de questions-réponses où les utilisateurs partagent des connaissances.",
                'status' => true,
            ],
            [
                'title' => 'Medium',
                'url' => 'https://www.medium.com',
                'description' => "Plateforme de publication pour lire et écrire des articles.",
                'status' => true,
            ],
            [
                'title' => 'Coursera',
                'url' => 'https://www.coursera.org',
                'description' => "Plateforme d'apprentissage en ligne offrant des cours de diverses universités.",
                'status' => true,
            ],
            [
                'title' => 'Udemy',
                'url' => 'https://www.udemy.com',
                'description' => "Plateforme d'apprentissage en ligne avec des cours sur une variété de sujets.",
                'status' => true,
            ],
            [
                'title' => 'Slack',
                'url' => 'https://www.slack.com',
                'description' => "Outil de communication et de collaboration pour les équipes.",
                'status' => true,
            ],
            [
                'title' => 'Twitch',
                'url' => 'https://www.twitch.tv',
                'description' => "Plateforme de streaming en direct principalement axée sur les jeux vidéo.",
                'status' => true,
            ]
        ];

        foreach ($genericLinks as $link) {
            \App\Models\GenericLink::firstOrCreate($link);
        }
    }
}
