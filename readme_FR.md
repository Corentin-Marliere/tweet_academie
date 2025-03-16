# <p align="center">Faccovi : Tweet Academy

## <ins>Le projet :
Réalisation d'un site reprenant les codes de **_'X'_**, anciennement **_"[Twitter](https://x.com/)"_**.

### <ins>Notre projet :
![ScreenShot de l'accueil de la page](./public/screenshots/screen-login_page.png)

## <ins>Comment utiliser le projet :
Pour utiliser au mieux le projet, vous devez ajouter la **[base de données](./public/db/my_twitter-database.sql)** dans votre *localhost* *(généralement sur [PHPMyAdmin](http://localhost/phpmyadmin/))*.

Une fois que vous avez ajouté la base de données sur votre serveur local, utilisez votre compte principal ou créez un utilisateur avec des droits afin de pouvoir la gérer. <br>

### <ins>Ajouter un utilisateur et ses droits :<br>
```sql
CREATE USER 'nom'@'localhost' IDENTIFIED BY 'mot de passe';
GRANT ALL PRIVILEGES ON 'nom de la db'.* TO 'nom'@'localhost';
```

Une fois la base de données installée et prête à être utilisée, vous devrez utiliser votre utilisateur créé dans le projet. Pour ce faire, vous devez créer un fichier `.env` et y ajouter les informations suivantes :
```
DB_HOST=
DB_PORT=
DB_NAME=
DB_USER=
DB_PASS=
DB_CHARSET=
```
#### *Vous trouverez plus de détails sur le fichier `.env` dans le fichier [exemple](./db.env.example).*

### <ins>Installer le style :
Le projet utilise les frameworks *"Tailwind"* et *"Skeleton"* pour gérer le style.<br>
Dans un premier temps, ouvrez le terminal à la racine du projet.<br>

Une fois fait, vous devrez installer des dépendances grâce à la commande suivante dans le terminal :
```
npm install
```

Une fois l'installation terminée, vous pouvez appliquer le style du projet grâce à la commande :
```
npm run dev
```

#### Si le style n'est pas correctement appliqué, vous pouvez rafraîchir la page sans le cache _(<ins>raccourci clavier :</ins> CTRL+SHIFT+R)._

### <ins>Création d'un utilisateur et connexion :
Une fois tout cela effectué,  
rendez-vous sur la page d'inscription, créez un compte et connectez-vous ! <br>
##### <p align="center">Félicitations, vous pouvez maintenant tweeter ! 🎉
