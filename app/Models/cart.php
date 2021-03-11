<?php

namespace App\Models;

class Cart {
  public $items;
  public $totalQty = 0;
  public $total = 0;

  public function __construct($oldCart)
  {
    if ($oldCart) {
      $this->items = $oldCart->items;
      $this->totalQty = $oldCart->totalQty;
      $this->total = $oldCart->total;
    }
  }

  public function add($item, $id)
  {
    $storedItem = [
      'qty' => 0,
      'price' => $item->price,
      'item' => $item,
      'title' => $item->title,
      'image' => $item->image,
      'id' => $item->id,
    ];

    if ($this->items) {
      if (array_key_exists($id, $this->items)) {
        $storedItem = $this->items[$id];
      }
    }
    $storedItem['qty']++;
    $storedItem['price'] = $item->price * $storedItem['qty'];
    $this->items[$id] = $storedItem;
    $this->totalQty++;
    $this->total += $item->price;
  }

  public function remove($item, $id)
  {
    if ($this->items) {
      if (array_key_exists($id, $this->items)) {
        unset($this->items[$id]);
      }
    }
    $this->totalQty--;
    $this->total -= $item->price;
  }

  public function reset() {
    $this->items = [];
    $this->totalQty = 0;
    $this->total = 0;
  }
}
