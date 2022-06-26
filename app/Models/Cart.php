<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acomodation;

class Cart extends Model
{
    use HasFactory;

    public function __construct()
    {
        if($this->get() === null)
            $this->set($this->empty());
    }

    public function add(Acomodation $acomodation): void
    {
        $cart = $this->get();
        array_push($cart['acomodations'], $acomodation);
        $this->set($cart);
    }

    public function remove(int $acomodationId): void
    {
        $cart = $this->get();
        array_splice($cart['acomodations'], array_search($acomodationId, array_column($cart['acomodations'], 'id')), 1);
        $this->set($cart);
    }

    public function clear(): void
    {
        $this->set($this->empty());
    }

    public function empty(): array
    {
        return [
            'acomodations' => [],
        ];
    }

    public function get(): ?array
    {
        return request()->session()->get('cart');
    }

    private function set($cart): void
    {
        request()->session()->put('cart', $cart);
    }
}
