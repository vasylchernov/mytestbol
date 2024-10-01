<?php

namespace App\Enums;

enum InvoiceTypeString: string
{
    case INVOICE = 'App\Http\Controllers\Invoice';
    case CASH_INVOICE = 'App\Http\Controllers\CashInvoice';
};
