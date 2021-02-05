<?php namespace OFFLINE\Mall\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddMediaSetColumnToProdictVariants extends Migration
{
    public function up()
    {
        Schema::table('offline_mall_product_variants', function ($table) {
            $table->integer('media_set_id')->unsigned()->nullable()->after('image_set_id');;
        });
    }

    public function down()
    {
        Schema::table('offline_mall_product_variants', function ($table) {
            $table->dropColumn(['media_set_id']);
        });
    }
}
