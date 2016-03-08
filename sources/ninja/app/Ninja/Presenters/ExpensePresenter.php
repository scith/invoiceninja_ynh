<?php namespace App\Ninja\Presenters;

use Utils;
use Laracasts\Presenter\Presenter;

class ExpensePresenter extends Presenter {

    // Expenses
    public function vendor()
    {
        return $this->entity->vendor ? $this->entity->vendor->getDisplayName() : '';
    }

    public function expense_date()
    {
        return Utils::fromSqlDate($this->entity->expense_date);
    }

    public function converted_amount()
    {
        return round($this->entity->amount * $this->entity->exchange_rate, 2);
    }
}