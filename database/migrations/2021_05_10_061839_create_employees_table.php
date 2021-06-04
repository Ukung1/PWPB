<?php

use App\Models\employee\employee;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_image')->nullable();
            $table->string('employee_name', 100)->nullable();
            $table->string('employee_email', 100)->nullable();
            $table->string('employee_title', 100)->nullable();
            $table->string('employee_department', 100)->nullable();
            $table->boolean('employee_status')->nullable();
            $table->string('employee_role', 30)->nullable();
            $table->integer('employee_salary')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
