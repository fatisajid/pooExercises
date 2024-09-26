<?php

class Product3
{
    private string $title;
    private float $price;
    private int $quantity;
    private const UNITE = "€";

    public function __construct(string $title, float $price, int $quantity )
    {
        $this->title = $title;
        $this->price = $price;
        $this->quantity = $quantity;
    }

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

$commode = new Product3('Commode en bois', 40, 2);
echo "<p>" . $commode->calculTotal() . "</p>";