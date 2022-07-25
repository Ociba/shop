<?php

namespace App\Http\Livewire\Admin;

use App\Models\Payment;
use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;

class RegistrationPayments extends Component
{
    use WithPagination, WithSorting;

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'name';

    public function render()
    {
        $all_registration_payments = $this->getAllPayments();

        return view('livewire.admin.registration-payments', compact('all_registration_payments'));
    }

    /**
     * This function returns all payments details for subscription during registration and when subscription expires
     */
    public function getAllPayments()
    {
        return Payment::join('users', 'users.id', 'payments.user_id')
       ->orderBy($this->sortBy, $this->sortDirection)
       ->search($this->search)
      ->Paginate($this->perPage, ['payments.*', 'users.name', 'users.payment_status']);
    }
}
