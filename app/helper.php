<?php
use App\Product;
use App\Category;
use App\Application;

function menuCategory()
{
    $categories = Category::all();
    return $categories;
}

function menuProduct()
{
    $categories = Product::all();
    return $categories;
}

function menuApplication()
{
    $categories = Application::all();
    return $categories;
}