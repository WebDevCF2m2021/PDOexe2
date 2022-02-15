# PDO exemple 2

## CRUD d'un article sur pdo_1

Nous allons utiliser un thème bootstrap:

https://bootswatch.com/lux/

### Ajout à config
- Un admin dont le login est 'admin'
- Un admin dont le mot de passe est '1234' 

### Publique

#### homepage
Que souhaite t'on voir ?
- Retour à l'accueil
- Bouton connexion
- Les articles avec l'auteur, la date, le titre et les sections et 250 caractères - par date décroissante (? pagination) - Au début on ne prendra que les 20 derniers -> lire la suite (idthearticle)
- Le détail de l'article
- Les rubriques cliquables avec les 20 derniers articles (thearticledate desc)
- Le détail des utilisateurs et leurs 20 derniers articles (thearticledate desc)