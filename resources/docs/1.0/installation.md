# Installation SaaSWeb

---

- [Requirements](#section-1)
- [Download](#section-2)
- [Installation](#section-3)
- [Create new User](#section-4)

<a name="section-1"></a>

### Requirements

SaaSWeb has been crafted with Laravel 5.8 and vue, which have a few server requirements before installing. you will need to make sure your server meets the following requirements:

* PHP >= 7.1.3
* BCMath PHP Extension
* Ctype PHP Extension
* JSON PHP Extension
* Mbstring PHP Extension
* OpenSSL PHP Extension
* PDO PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* Node.js & NPM

<a name="section-2"></a>

### Downloading SaasWeb
Before you can install SaaSWeb, you will need to download the latest version from codecanyon on your dashboard. <strong><a href="http://example.com/" target="_blank">Buy SaaSWeb now</a></strong>
> {warning} In order to download a copy of SaaSWeb you have to buy it from Codecanyon.com.

After downloading the latest version of SaaSWeb, extract the zip file and rename it.

Great ! you are ready to begin the installation.
<br><br>

<a name="section-3"></a>

#### 1. Regenerate your application key
For security measures you may regenerate your application key, be sure to run the following command below:
```php
php artisan key:generate
```
<br>
#### 2. Create a New Database

Create a new MySQL database and save the credentials, you will need them to fill your .env file.
<br><br>
#### 3. Duplicate & Rename the ``` .env.example ``` file

Make sure to specify your Environment variables for your great saas application. Duplicate ``` .env.example ```, and rename it to ```.env```.

Then, open up the .env file and update your DB_DATABASE, DB_USERNAME, and DB_PASSWORD in the appropriate fields. You will also want to update the APP_URL to the URL of your application.

```php 
APP_URL=http://your-url.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=saasweb
DB_USERNAME=root
DB_PASSWORD=
```
<br><br>
#### 4. Install or Update Composer Dependencies
Install all the composer dependencies by running the following command:
```php
composer install
```
<br><br>
#### 5. Run Migrations and Seeds
Migrate the database by runing :
```php
php artisan migrate
```

Next seed the database with the following command: :
```php
php artisan db:seed
```
Next, you should run the `passport:install` command. This command will create the encryption keys needed to generate secure access tokens.
```php
php artisan passport:install
```
<br><br>
#### 6. Linking The Storage Directory
you should link the `public/storage` directory to your `storage/app/public` directory. Otherwise, user profile photos stored on the local disk will not be available:
```php
php artisan storage:link
```

🎉 Congratulations! You will now be able to visit your URL and see your new SaaS application up and running.

<a name="section-4"></a>

<br>
#### 7. Create a new user
You can go to `http://your-domaine.com/register` to create a new user

<br>
#### 8. Assign user a role
You can now create and assign the newly created user a super / root admin role.
To so run this command: 

```php
php artisan admin:assign-role youremail@example.org admin-root
```
> {warning} `youremail@example.org` with an existing user email. `admin-root` is the default root Admin role.
