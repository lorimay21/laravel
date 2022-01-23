<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->nullable()->change();
            $table->dropUnique('users_email_unique');
            $table->integer('employee_no')->after('id');
            $table->integer('branch_id')->after('employee_no');
            $table->timestamp('start_datetime')->useCurrent()->after('password');
            $table->timestamp('end_datetime')->after('start_datetime');
            $table->timestamp('deleted_at')->nullable()->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
