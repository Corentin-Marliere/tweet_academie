# <p align="center">Faccovi : Tweet Academy
[French Readme](./readme_FR.md)

## <ins>The Project:
Development of a website following the principles of **_'X'_**, formerly **_"[Twitter](https://x.com/)"_**.

### <ins>Our Project:
![Screenshot of the homepage](./public/screenshots/screen-login_page.png)

## <ins>How to Use the Project:
To make the most of this project, you need to add the **[database](./public/db/my_twitter-database.sql)** to your *localhost* *(usually on [PHPMyAdmin](http://localhost/phpmyadmin/))*.

Once you have added the database to your local server, use your main account or create a user with the necessary privileges to manage it. <br>

### <ins>Create a User and Grant Privileges:<br>
```sql
CREATE USER 'username'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON 'database_name'.* TO 'username'@'localhost';
```

Once the database is installed and ready to use, you need to configure the project with your user credentials. To do this, create a `.env` file and add the following information:
```
DB_HOST=
DB_PORT=
DB_NAME=
DB_USER=
DB_PASS=
DB_CHARSET=
```
#### *You can find more details about the `.env` file in the [example file](./db.env.example).*

### <ins>Install the Styling:
The project uses the *"Tailwind"* and *"Skeleton"* frameworks for styling.<br>
First, open the terminal at the root of the project.<br>

Once done, install the dependencies using the following command in the terminal:
```sh
npm install
```

After the installation is complete, you can apply the project's styling using the command:
```sh
npm run dev
```

#### If the styling is not applied correctly, try refreshing the page without cache _(<ins>shortcut:</ins> CTRL+SHIFT+R)._

### <ins>Creating a User and Logging In:
Once everything is set up,  
go to the registration page, create an account, and log in! <br>
##### <p align="center">Congratulations, you can now tweet! 🎉

