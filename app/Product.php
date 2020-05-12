<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    public static $createRules = [
        'name' => 'required',
        'prize' => 'required',
        'description' => 'required',
      ];
  
      public static $updateRules = [
        'name' => 'required',
        'prize' => 'required',
        'description' => 'required',
      ];

    //attributes id, name, price, description, created_at, updated_at
    protected $fillable = ['name','prize', 'description', 'visible'];

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
        return $this->attributes['prize'];
    }

    public function setPrice($prize) {
        $this->attributes['prize'] = $prize;
    }

    public function getDescription() {
        return $this->attributes['description'];
    }

    public function setDescription($description) {
        $this->attributes['description'] = $description;
    }

    public function Comments(){
        return $this->hasMany('App\Comment');
    }

    public function getVisible(){
        return $this->attributes['visible'];
    }

    public function setVisible($visible){
        $this->attributes['visible'] = $visible;
    }
}
