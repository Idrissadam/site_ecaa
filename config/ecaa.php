<?php

return [
    'site_name' => 'ECAA',
    'full_name' => 'Association Tchadienne pour le Développement des Technologies Agricoles',
    'tagline' => 'Fabrication, réparation, formation et innovation au service de l’agriculture locale.',
    'logo' => 'assets/ecaa/images/logo-ecaa.png',
    'hero_image' => 'assets/ecaa/images/gallery-01.jpg',

    'intro' => [
        'created' => '1988',
        'location' => 'Bokoro, Département du Dababa, Tchad',
        'summary' => "L'ECAA développe et adapte des équipements agricoles pour répondre aux réalités du terrain, en s'appuyant sur les ressources locales et le savoir-faire des artisans.",
    ],

    'stats' => [
        ['value' => '1988', 'label' => 'année de création'],
        ['value' => '6', 'label' => 'domaines d’équipements'],
        ['value' => '18+', 'label' => 'partenaires et réseaux'],
        ['value' => '27', 'label' => 'images d’illustration'],
    ],

    'about' => [
        'title' => "À propos de l'ECAA",
        'preamble' => [
            "L’autosuffisance alimentaire demeure un objectif majeur pour le Tchad. Dans ce contexte, l’ECAA accompagne les producteurs et les artisans par des solutions techniques adaptées aux réalités locales.",
            "L’association met l’accent sur l’utilisation des ressources locales, la formation, la maintenance des équipements et l’innovation technologique pour renforcer l’agriculture de proximité.",
            "Depuis sa création à Bokoro, l’ECAA contribue à la fabrication, à la réparation et à la diffusion d’équipements agricoles conçus pour les besoins des zones rurales.",
        ],
        'history' => [
            "Créée en 1988 sur la base de l’atelier de Bokoro, l’ECAA est née de l’initiative d’ACORD (Association de Coopération et de Recherche pour le Développement).",
            "Elle a commencé ses activités dans le Département du Dababa, une zone à forte vocation arachidière et céréalière, située à 313 km de N’Djamena.",
            "L’association intervient sur les axes de production, réparation, maintenance, formation et recherche-innovation afin de mieux soutenir les producteurs.",
        ],
        'objectives' => [
            "Promouvoir l’artisanat utilitaire et les services de proximité.",
            "Augmenter la production agricole locale grâce à des équipements adaptés.",
            "Contribuer à l’autosuffisance alimentaire à travers l’innovation technique.",
            "Assurer la production, la réparation et la maintenance des équipements.",
            "Former les artisans aux technologies appropriées.",
            "Développer la recherche et l’innovation technologique.",
        ],
        'images' => [
            'assets/ecaa/images/gallery-02.jpg',
            'assets/ecaa/images/gallery-15.jpg',
        ],
    ],

    'equipment_categories' => [
        [
            'id' => 'soil-work',
            'name' => 'Travail de sol',
            'description' => 'Équipements pour la préparation des terres et le travail du sol.',
            'items' => [
                ['name' => 'Houe occidentale', 'description' => 'Houe traditionnelle adaptée à la traction animale.'],
                ['name' => 'Houe Manga', 'description' => 'Version locale pour différents types de sols.'],
                ['name' => 'Houe Sine', 'description' => 'Équipement spécialisé pour le travail en profondeur.'],
            ],
        ],
        [
            'id' => 'seeding',
            'name' => 'Semis',
            'description' => 'Solutions de semis mécanisé pour petites et grandes exploitations.',
            'items' => [
                ['name' => 'Semoir monorang à traction animale', 'description' => 'Conçu pour les petites exploitations.'],
                ['name' => 'Semoir multirang à traction animale', 'description' => 'Pour augmenter la productivité au semis.'],
                ['name' => 'Semoir multirang attelé sur tracteur', 'description' => 'Adapté aux tracteurs modernes.'],
            ],
        ],
        [
            'id' => 'weeding',
            'name' => 'Sarclage',
            'description' => 'Équipements pour le désherbage et l’entretien des cultures.',
            'items' => [
                ['name' => 'Ensembles sarcleurs pour houe occidentale', 'description' => 'Compatible avec les houes traditionnelles.'],
                ['name' => 'Ensembles sarcleurs pour charrues', 'description' => 'Adaptés aux charrues BP 4, AT 30 et AT 35.'],
                ['name' => 'Houe alouette', 'description' => 'Houe légère pour sarclage fin.'],
                ['name' => 'Houe monosoc', 'description' => 'Houe à soc unique pour un travail précis.'],
            ],
        ],
        [
            'id' => 'harvest',
            'name' => 'Récolte',
            'description' => 'Machines dédiées à la récolte mécanisée.',
            'items' => [
                ['name' => "Soulèveuse d'arachide", 'description' => 'Machine spécialisée pour la récolte des arachides.'],
            ],
        ],
        [
            'id' => 'transformation',
            'name' => 'Transformation',
            'description' => 'Équipements de transformation des produits agricoles.',
            'items' => [
                ['name' => 'Décortiqueuse d’arachide', 'description' => 'Version manuelle et motorisée.'],
                ['name' => 'Moulin à céréales motorisé', 'description' => 'Pour la mouture des céréales.'],
                ['name' => 'Pileuse à mil', 'description' => 'Pour le pilage traditionnel du mil.'],
                ['name' => "Moulin à pâte d'arachide", 'description' => 'Pour la transformation de l’arachide.'],
                ['name' => 'Batteuse à mil', 'description' => 'Pour le battage du mil.'],
                ['name' => "Presse à huile", 'description' => "Pour l’extraction d’huile."] ,
                ['name' => 'Égraineuse à maïs', 'description' => 'Pour l’égrenage du maïs.'],
            ],
        ],
        [
            'id' => 'transport',
            'name' => 'Transport',
            'description' => 'Solutions de transport et de manutention.',
            'items' => [
                ['name' => 'Charrettes à traction animale', 'description' => 'De deux à quatre roues selon les besoins.'],
                ['name' => 'Remorques adaptables sur tracteur', 'description' => 'Pour le transport motorisé.'],
            ],
        ],
    ],

    'achievements' => [
        [
            'title' => 'Production',
            'icon' => 'bi-gear-wide-connected',
            'description' => "Fabrication d’une large gamme d’équipements agricoles adaptés aux besoins locaux et aux conditions climatiques du Tchad.",
        ],
        [
            'title' => 'Réparation et entretien',
            'icon' => 'bi-wrench-adjustable-circle',
            'description' => "Services de maintenance et de réparation pour garantir la durabilité et les performances des équipements.",
        ],
        [
            'title' => 'Formation et transfert de technologie',
            'icon' => 'bi-mortarboard',
            'description' => "Ateliers et accompagnement technique pour les artisans, les producteurs et les partenaires terrain.",
        ],
        [
            'title' => 'Recherche & innovation',
            'icon' => 'bi-lightbulb',
            'description' => "Développement de solutions nouvelles et adaptation des équipements aux réalités locales et climatiques.",
        ],
    ],

    'partners' => [
        'ONDR', 'PNSA', 'SIMATRAC', 'ACORD', 'SECADEV', 'CICR', 'ACF', 'Croix Rouge',
        'FLM', 'ACTED', 'OXFAM', 'INTERSOS', 'UMOCIRT', 'FONAP', 'AFRICARICE',
        'PAPAT', 'SOS SAHEL', 'Coopération Suisse'
    ],

    'news' => [
        [
            'title' => 'Nouveau prototype de semoir',
            'date' => '15 Mai 2026',
            'category' => 'Innovation',
            'image' => 'assets/ecaa/images/gallery-02.jpg',
            'excerpt' => "Tests finalisés pour un semoir multirang plus robuste et mieux adapté aux sols du Tchad.",
        ],
        [
            'title' => 'Atelier de formation à Bokoro',
            'date' => '10 Mai 2026',
            'category' => 'Formation',
            'image' => 'assets/ecaa/images/gallery-13.jpg',
            'excerpt' => "Plus de 20 artisans ont été formés à la maintenance préventive et à la réparation des équipements.",
        ],
        [
            'title' => 'Expansion de la chaîne de production',
            'date' => '25 Avril 2026',
            'category' => 'Production',
            'image' => 'assets/ecaa/images/gallery-15.jpg',
            'excerpt' => "Inauguration de nouvelles installations pour augmenter la capacité de fabrication.",
        ],
        [
            'title' => 'Service de maintenance amélioré',
            'date' => '18 Avril 2026',
            'category' => 'Maintenance',
            'image' => 'assets/ecaa/images/gallery-26.jpg',
            'excerpt' => "Lancement d’un service de maintenance préventive avec techniciens formés et certifiés.",
        ],
        [
            'title' => 'Innovation : houe adaptée au climat',
            'date' => '10 Avril 2026',
            'category' => 'Innovation',
            'image' => 'assets/ecaa/images/gallery-20.jpg',
            'excerpt' => "Développement d’une houe pensée pour les conditions climatiques sahéliennes.",
        ],
        [
            'title' => 'Appui aux producteurs locaux',
            'date' => '02 Avril 2026',
            'category' => 'Terrain',
            'image' => 'assets/ecaa/images/gallery-11.jpg',
            'excerpt' => "Mise à disposition d’équipements et accompagnement de proximité pour les campagnes agricoles.",
        ],
    ],

    'gallery' => [
        ['image' => 'assets/ecaa/images/gallery-01.jpg', 'title' => 'Atelier mobile'],
        ['image' => 'assets/ecaa/images/gallery-02.jpg', 'title' => 'Équipement assemblé'],
        ['image' => 'assets/ecaa/images/gallery-03.jpg', 'title' => 'Machine de production'],
        ['image' => 'assets/ecaa/images/gallery-04.jpg', 'title' => 'Atelier et moteur'],
        ['image' => 'assets/ecaa/images/gallery-05.jpg', 'title' => 'Prototype rouge'],
        ['image' => 'assets/ecaa/images/gallery-06.jpg', 'title' => 'Machine en test'],
        ['image' => 'assets/ecaa/images/gallery-07.jpg', 'title' => 'Production en cours'],
        ['image' => 'assets/ecaa/images/gallery-08.jpg', 'title' => 'Récolte sur le terrain'],
        ['image' => 'assets/ecaa/images/gallery-09.jpg', 'title' => 'Stockage de récolte'],
        ['image' => 'assets/ecaa/images/gallery-10.jpg', 'title' => 'Récolte et préparation'],
        ['image' => 'assets/ecaa/images/gallery-11.jpg', 'title' => 'Appui communautaire'],
        ['image' => 'assets/ecaa/images/gallery-12.jpg', 'title' => 'Accompagnement paysan'],
        ['image' => 'assets/ecaa/images/gallery-13.jpg', 'title' => 'Partage d’expérience'],
        ['image' => 'assets/ecaa/images/gallery-14.jpg', 'title' => 'Travail collectif'],
        ['image' => 'assets/ecaa/images/gallery-15.jpg', 'title' => 'Chaîne de production'],
        ['image' => 'assets/ecaa/images/gallery-16.jpg', 'title' => 'Pièces métalliques'],
        ['image' => 'assets/ecaa/images/gallery-17.jpg', 'title' => 'Atelier de fabrication'],
        ['image' => 'assets/ecaa/images/gallery-18.jpg', 'title' => 'Composants mécaniques'],
        ['image' => 'assets/ecaa/images/gallery-19.jpg', 'title' => 'Production verte'],
        ['image' => 'assets/ecaa/images/gallery-20.jpg', 'title' => 'Éléments alignés'],
        ['image' => 'assets/ecaa/images/gallery-21.jpg', 'title' => 'Série d’outils'],
        ['image' => 'assets/ecaa/images/gallery-22.jpg', 'title' => 'Atelier de montage'],
        ['image' => 'assets/ecaa/images/gallery-23.jpg', 'title' => 'Outil agricole'],
        ['image' => 'assets/ecaa/images/gallery-24.jpg', 'title' => 'Outil prêt à l’emploi'],
        ['image' => 'assets/ecaa/images/gallery-25.jpg', 'title' => 'Machine montée'],
        ['image' => 'assets/ecaa/images/gallery-26.jpg', 'title' => 'Machine de maintenance'],
        ['image' => 'assets/ecaa/images/gallery-27.jpg', 'title' => 'Atelier final'],
    ],

    'contact' => [
        'director_name' => 'M. Ramadan Madani',
        'director_title' => 'Directeur Général',
        'phones' => ['+235 66289996', '+235 99201782'],
        'emails' => ['agrieca@yahoo.fr', 'madaniramadan@gmail.com'],
        'location' => 'Bokoro, BP 9',
        'country' => 'Tchad',
        'working_hours' => 'Lundi - Vendredi | 08h00 - 17h00',
    ],
];
