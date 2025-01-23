<?php


namespace App\Enums;
enum LoanStatusses: string
{
    case PENDING = 'pending';
    case ACCEPTED = 'accepted';
    case REPAID = 'repaid';
    case OVERDUE = 'overdue';
}
