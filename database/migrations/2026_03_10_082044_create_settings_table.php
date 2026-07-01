<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->text('site_desc');
            $table->string('site_phone');
            $table->string('site_address');
            $table->string('site_email');
            $table->string('email_support', 500);
            $table->string('logo');
            $table->string('favicon');

            // SEO
            $table->text('meta_title')->nullable();
            $table->string('meta_description', 160);
            $table->string('meta_keywords', 200);

            // Site status
            $table->text('maintenance_message')->nullable();
            $table->boolean('maintenance_mode')->default(false);
            $table->boolean('registration_status')->default(true);

            // Social media
            $table->string('facebook_url', 500)->nullable();
            $table->string('twitter_url', 500)->nullable();
            $table->string('youtube_url', 500)->nullable();
            $table->string('instagram_url', 500)->nullable();
            $table->string('whatsapp_number')->nullable();

            // Appearance
            $table->string('primary_color')->default('#1e9ff2');
            $table->string('secondary_color')->default('#ff4961');
            $table->string('default_currency')->default('SYP');

            // SMTP
            $table->string('smtp_host')->nullable();
            $table->string('smtp_port')->nullable();
            $table->string('smtp_username')->nullable();
            $table->string('smtp_password')->nullable();
            $table->string('smtp_encryption')->nullable();

            // Extra
            $table->string('site_copyright');
            $table->string('promotion_video_url', 1000)->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
