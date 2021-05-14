<p align="center">
    <img width="500px" alt="SIKAP-PENS" src="https://user-images.githubusercontent.com/41534140/117836941-3693c780-b2a3-11eb-95f1-23721296c288.png">
    <br>
    <h1 align="center">SIKAP PENS</h1>
    <br><br>
    <b>SIKAP-PENS</b> (Sistem Informasi Kerja Praktek PENS) is a web-based information system for managing PENS' student internship data.
</p>
<br><br>

# How To Use
To use this App is very simple, you must run a simple syntax in terminal or command prompt

### Clone The Project
```
git clone https://github.com/rizqiwahyudi/SIKAP-PENS.git
```

### Install The Project With Composer
```
composer install
```
or
```
composer update
```

### Initiate The Code With This Command, And Set It To Development
```
php init
```

### Initiate The Database Migration
```
php yii migrate
```
or
```
yii migrate
```

### And Lastly, Give It a Try From Your Browser, Access The Localhost.
you can access with
```
//FOR BACKEND TEMPLATE or ADMINISTRATION PAGE
http://localhost/SIKAP-PENS/admin/web/

//FOR FRONTEND TEMPLATE or CLIENT PAGE
http://localhost/SIKAP-PENS/client/web/
```


> **NOTE : Make sure the web server and database are turned on before migration command**

> **For Example USER you can use :** <br>
> Username : admin <br>
> Password : admin12345 <br>
DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
admin
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
client
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```

# Partners
Thanks very much to my partners [@MNasirulUmam](https://github.com/MNasirulUmam/), [@syafiena](https://github.com/syafiena/), [@wahyusantuy](https://github.com/wahyusantuy/).
