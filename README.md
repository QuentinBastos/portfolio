# portfolio

Portfolio personnel de Quentin Bastos, en ligne sur [quentin-bastos.com](https://quentin-bastos.com).

Application Symfony 7.2 / Twig, sans base de données. Les pages sont statiques,
seul l'âge affiché sur la page d'accueil est calculé au rendu.

## Inspiration

https://shkw-dev.com/ , https://www.awwwards.com/websites/nominees/

## Déploiement

L'hébergement est une offre **OVH mutualisée Starter** : pas d'accès SSH, pas de
base de données, pas de cron. Impossible d'exécuter Composer ou une commande
Symfony sur le serveur.

Le déploiement passe par la fonction **Git d'OVH**, configurée sur le répertoire
racine `www` et branchée sur la branche **`prod`**. Un webhook GitHub déclenche le
déploiement à chaque push :

```bash
git push origin prod
```

Rien d'autre à faire, le site est à jour en quelques secondes. Pour déclencher un
déploiement à la main : manager OVH, Hébergements, onglet Multisite, menu de la
ligne `quentin-bastos.com`, « Déployer Git ».

Conséquence directe de l'absence de SSH : **`vendor/` et `var/cache/prod` sont
commités**. C'est volontaire, le serveur ne sait rien construire lui-même.

## Attention au cache de prod

`var/cache/prod` contient les traductions et les templates Twig **compilés**.
Modifier `translations/*.yaml` ou un fichier `.twig` ne change donc rien en ligne
tant que le cache n'a pas été régénéré et commité.

Le cache embarque des chemins absolus figés à `/home/ubuntu/Projects/portfolio`.
Il faut le régénérer à ce chemin exact, sinon de nouveaux chemins s'y glissent :

```bash
docker run --rm -v "$PWD":/home/ubuntu/Projects/portfolio -w /home/ubuntu/Projects/portfolio php:8.4-cli sh -c 'rm -rf var/cache/prod && php bin/console cache:clear --env=prod --no-debug && php bin/console cache:warmup --env=prod --no-debug'
```

`src/Entity/` doit exister (même vide) sinon Doctrine fait échouer la commande.

Vérifier le rendu avant de pousser :

```bash
docker run --rm -v "$PWD":/home/ubuntu/Projects/portfolio -w /home/ubuntu/Projects/portfolio -e APP_ENV=prod php:8.4-cli sh -c 'php -S 127.0.0.1:8099 -t public public/index.php & sleep 4; curl -s http://127.0.0.1:8099/ | grep descriptionWho'
```

## Âge automatique

`App\Twig\AppExtension` expose une fonction Twig `age()` qui calcule l'âge depuis
la date de naissance. Les traductions l'injectent via le paramètre `%age%`, il n'y
a donc jamais de valeur en dur à mettre à jour.
