<?php

namespace App\Http\Livewire\Admin;

use App\Models\ShopItemsCategory;
use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;

class ShopItemCategory extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['ShopItemCategory' => '$refresh'];

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'item';

    public $search = '';

    public function render()
    {
        $all_shop_items_categories = $this->getShopItemCategory();

        return view('livewire.admin.shop-item-category', compact('all_shop_items_categories'));
    }

    /**
     * This function returns category items
     */
    private function getShopItemCategory()
    {
        return ShopItemsCategory::orderBy($this->sortBy, $this->sortDirection)
        ->search($this->search)
       ->Paginate($this->perPage);
    }
}
