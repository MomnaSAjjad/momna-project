<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'contract_folder_id',
        'contract_type_id',
        'contract_name',
        'contract_type_optional',
        'contract_owner',
        'contract_telephone',
        'contract_email',
        'amount_type',
        'amount_value',
        'amount_payment_period',
        'duration_start_date',
        'duration_end_date',
        'duration_auto_renew',
        'duration_notice_period',
        'set_reminder',
        'reminder_date',
        'reminder_type',
        'reminder_notice_date',
        'reminder_repeat_yearly',
        'reminder_emails',
        'counterparty_company_name',
        'counterparty_person_name',
        'counterparty_telephone',
        'counterparty_email',
        'attach_document_type',
        'attach_document_file',
        'attach_document_link',
        'comment_area'
    ];

    public function contractFolder()
    {
        return $this->belongsTo(Category::class, 'contract_folder_id');
    }

    public function contractType()
    {
        return $this->belongsTo(Subcategory::class, 'contract_type_id');
    }
}
