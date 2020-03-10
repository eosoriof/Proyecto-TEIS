<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    //attributes id, name, price, description, created_at, updated_at

    protected $fillable = ['name','price', 'description'];

    public function getId() {
        return $this->attributes['id'];
    }

    public function setId($id) {
        $this->attributes['id'] = $id;
    }

    public function getName() {
        return $this->attributes['name'];
    }

    public function setName($name) {
        $this->attributes['name'] = $name;
    }

    public function getPrice() {
        return $this->attributes['price'];
    }

    public function setPrice($price) {
        $this->attributes['price'] = $price;
    }

    public function getDescription() {
        return $this->attributes['description'];
    }

    public function setDescription($price) {
        $this->attributes['description'] = $description;
    }
}