<?php

declare(strict_types=1);

final class Material
{
    private int $price;

    public function __construct(int $price)
    {
        $this->changePrice($price);
    }

    public function changePrice(int $price): void
    {
        if ($price < 0) {
            throw new InvalidArgumentException('قیمت نمی‌تواند منفی باشد.');
        }

        $this->price = $price;
    }

    public function price(): int
    {
        return $this->price;
    }
}

$material = new Material(1000);
$material->changePrice(1500);

echo $material->price(); // 1500