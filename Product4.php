<?php

abstract class Product4
{

    private string $title;
    private float $price;
    private int $quantity;
    private const UNITE = "€";

    public function __construct(string $title, float $price, int $quantity)
    {
        $this->title = $title;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    //J'ai les setter et getter
    public function setPrice(float $value): static
    {
        $this->price = $value;
        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }
}

class Meuble extends Product4
{
    private string $color;

    public function setColor(string $color): static
    {
        $this->color = $color;
        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }
}


class Vetement extends Product4
{
    private ?int $size = null;

    public function setSize(int $size): static
    {
        $this->size = $size;
        return $this;
    }
    public function getSize(): ?int
    {
        return $this->size;
    }
}


$commode = new Meuble('Commode', 40, 2);
$commode->setColor('rose');
echo "<pre>";
var_dump($commode);
echo "</pre>";

$robe = new Vetement('Robe', 50, 1);
$robe->setSize(38);
echo "<pre>";
var_dump($robe);
echo "</pre>";