<?php

class Product2
{
    private string $title;
    private float $price;
    private int $quantity;
    private const UNITE = "€";

    public function calculTotal()
    {
        if(self::verifValeur($this->price, $this->quantity)){
            return $this->price * $this->quantity . self::UNITE;
        }else{
            return "L'une des valeurs n'est pas bonne!";
        }
    }

    static function verifValeur($prix, $quantite): bool
    {
        if($quantite > 0 && $prix > 0){
            return true;
        }else{
            return false;
        }
    }

    //J'ai les setter et getter
    public function setPrice(float $value) : static
    {
        $this->price = $value;
        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setTitle(string $value) : static
    {
        $this->title = $value;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setQuantity(int $quantity) : static
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getQuantity() : ?int
    {
        return $this->quantity;
    }
}

$commode = new Product2();
$commode->setQuantity(10);
$commode->setPrice(30);
$commode->setTitle('Commode en bois');
echo "<p>" . $commode->calculTotal() . "</p>";