# Proyek Sederhana Laravel Livewire 
Pembelajaran 8 proyek sederhana untuk pemula dari [youtube The Codeholic](https://www.youtube.com/watch?v=aUyZWth4PUQ&ab_channel=TheCodeholic) 

## features
- Counter 
- Calculator
- Todo List
- Cascading Dropdown
- Product Search
- Image Upload
- Registration
- Slug

## requirements
- php ^8.1
- database mysql
- laravel 10.8
- laragon/xampp
- chrome
- composer


## installation
1. Clone repositori
    ```sh
    git https://github.com/fahmyfauzi/livewire-app.git
    ```
2. masuk ke dalam directori
    ```sh
    cd livewire-app
    ```
3. Instal composer
    ```sh
    composer install
    atau
    composer update
    ```
4. Copy file .env.example 
    ```
    cp .env.example .env
    ```
4. Generate an app encryption key

    ```sh
    php artisan key:generate
    ```
5. Create database on your computer or phpMyAdmin
6. In the .env file, add database information to allow Laravel to connect to the database
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=DB_NAME
    DB_USERNAME=DB_USERNAME
    DB_PASSWORD=DB_PASSWORD
    ```
    
7. migrasi database
    ```
    php artisan migrate 
    ```
    
8. jalankan project
    ```sh
   php artisan serve
    ```


## usage
- buka chrome masukan link ```livewire-app.test/counter``` or ``` http://127.0.0.1:8000/counter ```.
- masukan url ``` livewire-app.test/calculator ``` untuk menghitung.
- masukan url ``` livewire-app.test/todolist ``` untuk membuat todo list.
- masukan url ``` livewire-app.test/cascading ``` untuk memilih negara.
- masukan url ``` livewire-app.test/product-search ``` untuk mencari produk
- masukan url ``` livewire-app.test/image-upload ``` untuk unggah gambar.
- masukan url ``` livewire-app.test/registration ``` untuk daftar sebagai vendor atau customer.
- masukan url ``` livewire-app.test/slug ``` untuk membuat slug otomatis.


## credits

[Fahmy Fauzi ](https://github.com/fahmyfauzi)

## screanshot



https://github.com/fahmyfauzi/livewire-app/assets/58255031/8ba17095-05db-40c4-99d0-bd26ef746b10

