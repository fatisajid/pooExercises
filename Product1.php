<?php

class Product1
{
    private string $title;
    private float $price;
    private int $quantity;

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

    public function calculerTotal() : float
    {
        return $this->price * $this->quantity;
    }
}

$commode = new Product1();
$commode->setQuantity(10);
$commode->setPrice(30);
$commode->setTitle('Commode en bois');

echo "<p>" . $commode->getTitle() . ". Prix :" . $commode->getPrice().  "€. Quantité : " . $commode->getQuantity() . ".</p>";
echo "<p>Le total : " . $commode->calculerTotal() . "€</p>";

$chaise = new Product1();
$chaise->setTitle("Chaise en bois");
$chaise->setPrice(20);
$chaise->setQuantity(5);

echo "<p>" . $chaise->getTitle() . ". Prix :" . $chaise->getPrice().  "€. Quantité : " . $chaise->getQuantity() . ".</p>";
echo "<p>Le total : " . $chaise->calculerTotal() . "€</p>";