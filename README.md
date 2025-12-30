# 📸 PhotoSphere - Galerie Photo Communautaire

## 📖 Présentation du Projet

PhotoSphere est une plateforme élégante et performante conçue par PixelCraft Digital. Elle offre aux photographes (amateurs et professionnels) un espace dédié pour partager leur travail, organiser leurs œuvres en albums et interagir avec une communauté passionnée, sans la complexité des réseaux sociaux traditionnels.

## 🚀 Fonctionnalités Clés

### 👤 Gestion des Utilisateurs & Rôles

Le système repose sur une hiérarchie stricte à quatre niveaux :

BasicUser (Amateur) : Quota de 10 photos/mois, albums publics uniquement.

ProUser (Professionnel) : Upload illimité, albums privés, statistiques avancées (vues, likes, géolocalisation).

Moderator : Gestion des commentaires, suspension de comptes, accès au journal d'audit.

Administrator : Contrôle total du système, statistiques globales et gestion des infrastructures.

## 🚀 Fonctionnalités Clés

1. Gestion des Utilisateurs & Sécurité
- Authentification : Système de login sécurisé.

- Hachage : Utilisation de l'algorithme natif password_hash() (BCRYPT).

- Rôles : 4 niveaux d'accès (Visiteur, Auteur, Éditeur, Administrateur).

2. Moteur Éditorial
- Workflow : État de l'article évolutif (draft, published, archived).

- Multi-catégorisation : Possibilité d'assigner un article à plusieurs thématiques.

- Recherche : Moteur de recherche interne par mots-clés dans les titres et contenus.

3. Structure des Catégories
- Hiérarchie infinie : Gestion des catégories parentes et enfants.

- Validation : Empêchement strict des boucles récursives (une catégorie ne peut être son propre parent).

- Compteurs : Affichage dynamique du nombre d'articles par catégorie dans l'arborescence.

### 🖼️ Gestion des Photos

Cycle de vie complet : Brouillon → Publié → Archivé.

Métadonnées riches : Titre, description, tags, et extraction automatique des propriétés techniques (Dimensions, MIME type, taille).

Traitement d'image : Génération automatique de miniatures (thumbnails) et redimensionnement optimisé.
