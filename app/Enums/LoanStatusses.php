<?php


namespace App\Enums;
enum LoanStatusses: string
{
    case PENDING = 'pending';
    case ACCEPTED = 'accepted';
    case REPAID = 'repaid';
    case OVERDUE = 'overdue';

    public function label(): string
    {
        return __('loans.' . $this->value);
    }
}
