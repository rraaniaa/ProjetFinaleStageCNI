<?php
     use Illuminate\Database\Migrations\Migration;
     use Illuminate\Database\Schema\Blueprint;
     use Illuminate\Support\Facades\Schema;
     
     class UpdateUsersTableEmailIndex extends Migration
     {
         /**
          * Run the migrations.
          *
          * @return void
          */
         public function up()
         {
             Schema::table('users', function (Blueprint $table) {
                 $table->dropUnique('users_email_unique'); // Supprimer l'index unique actuel
                 $table->unique('email', 191); // Créer un nouvel index unique avec une longueur de 191 caractères
             });
         }
     
         /**
          * Reverse the migrations.
          *
          * @return void
          */
         public function down()
         {
             Schema::table('users', function (Blueprint $table) {
                 $table->dropUnique('users_email_unique');
                 $table->unique('email'); // Pour revenir à l'index unique d'origine, sans spécifier la longueur
             });
         }
     }
     