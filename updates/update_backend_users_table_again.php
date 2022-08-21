<?php declare(strict_types=1);

namespace RatMD\BlogHub\Updates;

use Schema;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;
use System\Classes\PluginManager;

/**
 * UpdateBackendUsers Migration
 */
class UpdateBackendUsersTableAgain extends Migration
{

    /**
     * @inheritDoc
     */
    public function up()
    {
        Schema::table('backend_users', function (Blueprint $table) {
            $table->text('about_me')->nullable();
        });
    }

    /**
     * @inheritDoc
     */
    public function down()
    {
        Schema::dropColumns('backend_users', ['about_me']);
    }

}
