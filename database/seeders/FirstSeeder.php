<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Discount;
use App\Models\Product;
use App\Models\Role;
use App\Models\Stock;
use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\Hash;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User
        User::create([
            "name" => "tasya",
            "email" => "tasya@gmail.com",
        
            "password" => Hash::make("tasya"),
        ]);

        User::create([
            "name" => "Bernika",
            "email" => "bernini@gmail.com",
            "password" => Hash::make("bernika"),
        ]);

        User::create([
            "name" => "totoro",
            "email" => "totoro@gmail.com",
            "password" => Hash::make("totimatoz"),
        ]);

        //Role
        Role::create([
            "name" => "Customer"
        ]);

        Role::create([
            "name" => "Cashier"
        ]);

        Role::create([
            "name" => "Manager"
        ]);

        //UserRole
        UserRole::create([
            "user_id" => "1",
            "role_id" => "3",
        ]);

        UserRole::create([
            "user_id" => "2",
            "role_id" => "1",
        ]);

        UserRole::create([
            "user_id" => "3",
            "role_id" => "1",
        ]);

        //Category
        Category::create([
            "name" => "Snack"
        ]);

        Category::create([
            "name" => "Food & Goods"
        ]);

        Category::create([
            "name" => "Drinks"
        ]);

        Category::create([
            "name" => "Beauties"
        ]);

        Category::create([
            "name" => "Medicine"
        ]);

        //Product

        Product::create([
            "name" => "Chitato",
            "price" => "11500",
            "thumbnail" => "chitato.jpg",
            "desc" => "enak tau",
            "category_id" => "1",
        ]);

        Product::create([
            "name" => "Indomie Goreng",
            "price" => "3500",
            "thumbnail" => "indomie.jpg",
            "desc" => "Lejat bergiji",
            "category_id" => "2",
        ]);

        Product::create([
            "name" => "Pocari Sweat",
            "price" => "7000",
            "thumbnail" => "pocari.jpg",
            "desc" => "Segar",
            "category_id" => "3",
        ]);

        Product::create([
            "name" => "Scarlett Whitening",
            "price" => "52000",
            "thumbnail" => "scarlett.jpg",
            "desc" => "Putih berkilau",
            "category_id" => "4",
        ]);

        Product::create([
            "name" => "Bodrex",
            "price" => "5000",
            "thumbnail" => "bodrex.jpg",
            "desc" => "Obat sakit kepala",
            "category_id" => "5",
        ]);

        //Stock
        Stock::create([
            "product_id" => "1",
            "quantity" => "50",
            "expire_date" => "2023-1-5",
        ]);

        Stock::create([
            "product_id" => "2",
            "quantity" => "50",
            "expire_date" => "2023-1-5",
        ]);

        Stock::create([
            "product_id" => "3",
            "quantity" => "50",
            "expire_date" => "2023-1-5",
        ]);

        Stock::create([
            "product_id" => "4",
            "quantity" => "50",
            "expire_date" => "2023-1-5",
        ]);

        Stock::create([
            "product_id" => "5",
            "quantity" => "50",
            "expire_date" => "2023-1-5",
        ]);


        //Transaction
        Transaction::create([
            "product_id" => "1",
            "user_id" => "2",
            "quantity" => "3",
            "status" => "unpaid",
            "invoice_code" => "INV_32301"
        ]);

        Transaction::create([
            "product_id" => "2",
            "user_id" => "2",
            "quantity" => "5",
            "status" => "unpaid",
            "invoice_code" => "INV_32301"
        ]);

        Transaction::create([
            "product_id" => "3",
            "user_id" => "2",
            "quantity" => "1",
            "status" => "unpaid",
            "invoice_code" => "INV_32301"
        ]);

        Transaction::create([
            "product_id" => "4",
            "user_id" => "2",
            "quantity" => "1",
            "status" => "unpaid",
            "invoice_code" => "INV_32301"
        ]);

        Transaction::create([
            "product_id" => "5",
            "user_id" => "2",
            "quantity" => "3",
            "status" => "unpaid",
            "invoice_code" => "INV_32301"
        ]);

        Transaction::create([
            "product_id" => "1",
            "user_id" => "2",
            "quantity" => "3",
            "status" => "unpaid",
            "invoice_code" => "INV_32301"
        ]);

        Transaction::create([
            "product_id" => "1",
            "user_id" => "2",
            "quantity" => "3",
            "status" => "unpaid",
            "invoice_code" => "INV_32301"
        ]);

        //Discount
        Discount::create([
        "product_id" => "4",
        "percentage" => "10",
        "start_date" => "2022-08-01",
        "end_date" => "2022-08-30",
        ]);

        Discount::create([
            "product_id" => "3",
            "percentage" => "5",
            "start_date" => "2022-08-01",
            "end_date" => "2022-08-30",
            ]);
    }
}
