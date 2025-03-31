<?php

/**
 * SPDX-License-Identifier: MIT
 * Copyright (c) 2017-2018 Tobias Reich
 * Copyright (c) 2018-2025 LycheeOrg.
 */

return [
	/*
	|--------------------------------------------------------------------------
	| Jobs page
	|--------------------------------------------------------------------------
	*/
	'title' => 'Galerie',

	'smart_albums' => 'Albums intelligents',
	'albums' => 'Albums',
	'root' => 'Albums',

	'original' => 'Original',
	'medium' => 'Moyen',
	'medium_hidpi' => 'Moyen HiDPI',
	'small' => 'Miniature',
	'small_hidpi' => 'Miniature HiDPI',
	'thumb' => 'Vignette carrée',
	'thumb_hidpi' => 'Vignette carrée HiDPI',
	'placeholder' => 'Image de basse qualité (LQIP)',
	'thumbnail' => 'Vignette de la photo',
	'live_video' => 'Partie vidéo d’une live-photo',

	'camera_data' => 'Données de l’appareil',
	'album_reserved' => 'Tous droits réservés',

	'map' => [
		'error_gpx' => 'Erreur lors du chargement du fichier GPX',
		'osm_contributors' => 'Contributeurs OpenStreetMap',
	],

	'search' => [
		'title' => 'Recherche',
		'no_results' => 'Aucun résultat ne correspond à votre recherche.',
		'searchbox' => 'Rechercher…',
		'minimum_chars' => 'Minimum %s caractères requis.',
		'photos' => 'Photos (%s)',
		'albums' => 'Albums (%s)',
	],

	'smart_album' => [
		'unsorted' => 'Non trié',
		'starred' => 'Favoris',
		'recent' => 'Récents',
		'public' => 'Publics',
		'on_this_day' => 'Ce jour-là',
	],

	'layout' => [
		'squares' => 'Vignettes carrées',
		'justified' => 'Justifié avec proportions',
		'masonry' => 'Masonry avec proportions',
		'grid' => 'Grille avec proportions',
	],

	'overlay' => [
		'none' => 'Aucun',
		'exif' => 'Données EXIF',
		'description' => 'Description',
		'date' => 'Date de prise',
	],

	'timeline' => [
		'default' => 'par défaut',
		'disabled' => 'désactivé',
		'year' => 'Année',
		'month' => 'Mois',
		'day' => 'Jour',
		'hour' => 'Heure',
	],

	'album' => [
		'header_albums' => 'Albums',
		'header_photos' => 'Photos',
		'no_results' => 'Rien à voir ici',
		'upload' => 'Téléverser des photos',

		'tabs' => [
			'about' => 'À propos de l’album',
			'share' => 'Partager l’album',
			'move' => 'Déplacer l’album',
			'danger' => 'ZONE DANGEREUSE',
		],

		'hero' => [
			'created' => 'Créé le',
			'copyright' => 'Copyright',
			'subalbums' => 'Sous-albums',
			'images' => 'Photos',
			'download' => 'Télécharger l’album',
			'share' => 'Partager l’album',
			'stats_only_se' => 'Statistiques disponibles dans l’édition Supporter',
		],

		'stats' => [
			'lens' => 'Objectif',
			'shutter' => 'Vitesse d’obturation',
			'iso' => 'ISO',
			'model' => 'Modèle',
			'aperture' => 'Ouverture',
			'no_data' => 'Aucune donnée',
		],

		'properties' => [
			'title' => 'Titre',
			'description' => 'Description',
			'photo_ordering' => 'Ordre des photos',
			'children_ordering' => 'Ordre des albums',
			'asc/desc' => 'asc/desc',
			'header' => 'Définir l’en-tête de l’album',
			'compact_header' => 'Utiliser un en-tête compact',
			'license' => 'Définir la licence',
			'copyright' => 'Définir le copyright',
			'aspect_ratio' => 'Définir le ratio des miniatures',
			'album_timeline' => 'Mode chronologique de l’album',
			'photo_timeline' => 'Mode chronologique des photos',
			'layout' => 'Disposition des photos',
			'show_tags' => 'Définir les étiquettes à afficher',
			'tags_required' => 'Les étiquettes sont obligatoires.',
		],
	],

	'photo' => [
		'actions' => [
			'star' => 'Favori',
			'unstar' => 'Retirer des favoris',
			'set_album_header' => 'Définir comme en-tête d’album',
			'move' => 'Déplacer',
			'delete' => 'Supprimer',
			'header_set' => 'En-tête défini',
		],

		'details' => [
			'about' => 'À propos',
			'basics' => 'Informations de base',
			'title' => 'Titre',
			'uploaded' => 'Téléversée',
			'description' => 'Description',
			'license' => 'Licence',
			'reuse' => 'Réutilisation',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
			'altitude' => 'Altitude',
			'location' => 'Emplacement',
			'image' => 'Image',
			'video' => 'Vidéo',
			'size' => 'Taille',
			'format' => 'Format',
			'resolution' => 'Résolution',
			'duration' => 'Durée',
			'fps' => 'Images/s',
			'tags' => 'Étiquettes',
			'camera' => 'Appareil photo',
			'captured' => 'Prise de vue',
			'make' => 'Fabricant',
			'type' => 'Type/Modèle',
			'lens' => 'Objectif',
			'shutter' => 'Vitesse d’obturation',
			'aperture' => 'Ouverture',
			'focal' => 'Longueur focale',
			'iso' => 'ISO %s',
		],

		'edit' => [
			'set_title' => 'Définir le titre',
			'set_description' => 'Définir la description',
			'set_license' => 'Définir la licence',
			'no_tags' => 'Aucune étiquette',
			'set_tags' => 'Définir les étiquettes',
			'set_created_at' => 'Définir la date de téléversement',
			'set_taken_at' => 'Définir la date de prise de vue',
			'set_taken_at_info' => 'Une étoile %s sera affichée si cette date n’est pas la date EXIF d’origine.<br>Décochez la case et enregistrez pour revenir à la date d’origine.',
		],
	],

	'nsfw' => [
		'header' => 'Contenu sensible',
		'description' => 'Cet album contient un contenu sensible qui peut heurter la sensibilité de certaines personnes.',
		'consent' => 'Appuyez pour consentir.',
	],

	'menus' => [
		'star' => 'Favori',
		'unstar' => 'Retirer des favoris',
		'star_all' => 'Mettre en favoris',
		'unstar_all' => 'Retirer des favoris',
		'tag' => 'Étiqueter',
		'tag_all' => 'Étiqueter la sélection',
		'set_cover' => 'Définir la couverture',
		'remove_header' => 'Retirer l’en-tête',
		'set_header' => 'Définir l’en-tête',
		'copy_to' => 'Copier vers…',
		'copy_all_to' => 'Copier la sélection vers…',
		'rename' => 'Renommer',
		'move' => 'Déplacer',
		'move_all' => 'Déplacer la sélection',
		'delete' => 'Supprimer',
		'delete_all' => 'Supprimer la sélection',
		'download' => 'Télécharger',
		'download_all' => 'Télécharger la sélection',
		'merge' => 'Fusionner',
		'merge_all' => 'Fusionner la sélection',

		'upload_photo' => 'Téléverser une photo',
		'import_link' => 'Importer via un lien',
		'import_dropbox' => 'Importer depuis Dropbox',
		'new_album' => 'Nouvel album',
		'new_tag_album' => 'Nouvel album par étiquette',
		'upload_track' => 'Téléverser une trace',
		'delete_track' => 'Supprimer la trace',
	],

	'sort' => [
		'photo_select_1' => 'Date de téléversement',
		'photo_select_2' => 'Date de prise de vue',
		'photo_select_3' => 'Titre',
		'photo_select_4' => 'Description',
		'photo_select_6' => 'Favori',
		'photo_select_7' => 'Format de la photo',
		'ascending' => 'Croissant',
		'descending' => 'Décroissant',
		'album_select_1' => 'Date de création',
		'album_select_2' => 'Titre',
		'album_select_3' => 'Description',
		'album_select_5' => 'Date de prise la plus récente',
		'album_select_6' => 'Date de prise la plus ancienne',
	],

	'albums_protection' => [
		'private' => 'privé',
		'public' => 'public',
		'inherit_from_parent' => 'hériter du parent',
	],
];