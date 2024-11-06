<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contract_folder_id');
            $table->unsignedBigInteger('contract_type_id');
            $table->string('contract_name');
            $table->string('contract_type_optional')->nullable();
            $table->string('contract_owner');
            $table->string('contract_telephone');
            $table->string('contract_email');
            $table->integer('amount_type');
            $table->decimal('amount_value', 10, 2);
            $table->integer('amount_payment_period');
            $table->dateTime('duration_start_date');
            $table->dateTime('duration_end_date');
            $table->integer('duration_auto_renew');
            $table->integer('duration_notice_period');
            $table->integer('set_reminder');
            $table->dateTime('reminder_date')->nullable();
            $table->integer('reminder_type')->nullable();
            $table->integer('reminder_notice_date');
            $table->integer('reminder_repeat_yearly');
            $table->string('reminder_emails');
            $table->string('counterparty_company_name');
            $table->string('counterparty_person_name')->nullable();
            $table->string('counterparty_telephone')->nullable();
            $table->string('counterparty_email')->nullable();
            $table->integer('attach_document_type')->nullable();
            $table->string('attach_document_file')->nullable();
            $table->text('comment_area')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Define foreign keys
            $table->foreign('contract_folder_id')->references('id')->on('category');
            $table->foreign('contract_type_id')->references('id')->on('subcategory');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
