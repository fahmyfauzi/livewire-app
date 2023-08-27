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
1. Proyek Counter
 ![Untitled video - Made with Clipchamp](https://github.com/fahmyfauzi/livewire-app/assets/58255031/2ec28c3b-39b3-4433-947b-fa9f07942ac2)


2. Proyek Kalkulator
   ![Untitled video - Made with Clipchamp (1)](https://github.com/fahmyfauzi/livewire-app/assets/58255031/f32142c2-20fb-443f-ac86-6c353a5e136a)



3. Proyek Todo List
  ![Untitled video - Made with Clipchamp (2)](https://github.com/fahmyfauzi/livewire-app/assets/58255031/3f66d917-87ea-4997-b0e9-433e8418a06e)


4. Proyek Cascading Dropdown
   ![Untitled video - Made with Clipchamp (3)](https://github.com/fahmyfauzi/livewire-app/assets/58255031/d34dc2d7-e9b3-4f81-87e0-5ace32527110)


5. Proyek Product Search
   ![Untitled video - Made with Clipchamp (4)](https://github.com/fahmyfauzi/livewire-app/assets/58255031/e8c4a0fb-459d-4d6f-863f-eb4ab3f5be8c)

6. Proyek Image Upload
    ![Untitled video - Made with Clipchamp (5)](https://github.com/fahmyfauzi/livewire-app/assets/58255031/1ca0d49a-ada6-40ef-b398-b1a8101f9514)

7. Proyek Registration Vendor atau Customer
    ![Untitled video - Made with Clipchamp (6)](https://github.com/fahmyfauzi/livewire-app/assets/58255031/552cd0f6-ba87-4866-b637-0e40a67396bb)

8. Proyek Slug otomatis
   ![Untitled video - Made with Clipchamp (8)](https://github.com/fahmyfauzi/livewire-app/assets/58255031/21c32eaf-e2ea-4824-94eb-8b6ed8eb35af)
