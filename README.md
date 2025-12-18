# Azuriom BlueMap Plugin

Plugin Azuriom permettant d’intégrer l’interface web de BlueMap directement sur votre site ou de proposer un lien externe.

## Installation

1. Copier le dossier du plugin dans `plugins/bluemap` sur votre instance Azuriom.
2. Exécuter `composer install` dans le dossier du plugin pour charger l’autoload PSR-4.
3. Activer le plugin depuis le panneau d’administration d’Azuriom.

## Configuration

Rendez-vous dans **Administration → BlueMap** pour définir :

- **URL publique de BlueMap** : l’adresse où est servie votre carte (ex. `https://mon-serveur.fr/bluemap/`).
- **Titre de la page** : texte affiché sur la page publique.
- **Mode d’affichage** :
  - **Iframe** : affiche la carte directement sur votre site Azuriom.
  - **Lien externe** : ajoute un bouton ouvrant BlueMap dans un nouvel onglet (utile si l’iframe est bloquée).

Les paramètres sont stockés en base de données (SQL) pour rester synchronisés. Des valeurs par défaut peuvent aussi être définies via les variables d’environnement suivantes :

```
BLUEMAP_URL=https://example.com/bluemap
BLUEMAP_MODE=iframe # ou link
BLUEMAP_TITLE=BlueMap
```

## Utilisation

La page publique du plugin est disponible sur `/bluemap`. Vous pouvez ajouter un lien dans votre navigation Azuriom vers cette URL ou utiliser le mode **Lien externe** pour rediriger vos joueurs vers l’interface BlueMap hébergée ailleurs.

## Compatibilité

Testé avec Azuriom **v1.2** (Laravel 9). Les routes sont gérées par un `RouteServiceProvider` dédié (comme le plugin officiel Wiki) et la navigation admin est déclarée pour apparaître dans le panneau d’administration. Le `plugin.json` inclut `azuriom_api: 1.0.0` et des providers pleinement qualifiés pour que l’activation fonctionne correctement. Une permission dédiée `bluemap.admin` est enregistrée automatiquement : assurez-vous que votre rôle admin la possède pour voir le menu.
