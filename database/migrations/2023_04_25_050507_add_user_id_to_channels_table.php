<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints(); //для временной откл проверки ключей-пчто колонка user_id была пустой

        Schema::table('channels', function (Blueprint $table) {
            $table->foreignIdFor(User::class)->after('name')->constrained();
        });


        Schema::enableForeignKeyConstraints(); //для временной откл и вкл проверки ключей-пчто колонка user_id была пустой
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('channels', function (Blueprint $table) {

            $table->dropForeign(['user_id']);   //сперва удаляю внешний ключ, а патом колонку

            $table->dropColumn('user_id');
        });
    }
}
