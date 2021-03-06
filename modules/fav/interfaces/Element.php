<?php
namespace app\modules\fav\interfaces;

interface Element
{
    public function getId();
    public function getItemId();
    
    public function getCount();
    public function getPrice();
    
    public function getModel($withFavElementModel);
    public function setItemId($itemId);
    
    public function setCount($count);
    
    public function countIncrement($count);
    public function setPrice($price);
    
    public function setModel($model);
}