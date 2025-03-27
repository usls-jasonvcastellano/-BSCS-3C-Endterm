<?php

class Item {

    public function Category() {
        return $this->hasOne(Category::class, 'category_id', 'id');
    }





}

$item = Item::with(['Category'])->find(1);

//array ??
