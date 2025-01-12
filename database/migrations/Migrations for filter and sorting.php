<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('subtype_id')->nullable();
            $table->unsignedBigInteger('subsubtype_id')->nullable();
            $table->unsignedBigInteger('subsubsubtype_id')->nullable();
            $table->timestamps();
            
            $table->foreign('type_id')
                  ->references('id')->on('types')
                  ->onDelete('cascade');
            
            $table->foreign('subtype_id')
                  ->references('id')->on('subtypes')
                  ->onDelete('cascade');
            
            $table->foreign('subsubtype_id')
                  ->references('id')->on('subsubtypes')
                  ->onDelete('cascade');
            
            $table->foreign('subsubsubtype_id')
                  ->references('id')->on('subsubsubtypes')
                  ->onDelete('cascade');
        });
        
        Schema::create('types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        
        Schema::create('subtypes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('type_id');
            $table->timestamps();
            
            $table->foreign('type_id')
                  ->references('id')->on('types')
                  ->onDelete('cascade');
        });
        
        Schema::create('subsubtypes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('subtype_id');
            $table->timestamps();
            
            $table->foreign('subtype_id')
                  ->references('id')->on('subtypes')
                  ->onDelete('cascade');
        });
        
        Schema::create('subsubsubtypes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('subsubtype_id');
            $table->timestamps();
            
            $table->foreign('subsubtype_id')
                  ->references('id')->on('subsubtypes')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
    public function down()
    {
        Schema::dropIfExists('institutions');
        Schema::dropIfExists('types');
        Schema::dropIfExists('subtypes');
        Schema::dropIfExists('subsubtypes');
        Schema::dropIfExists('subsubsubtypes');
    }
}



/*This migration creates five tables: 
institutions, types, subtypes, subsubtypes, 
and subsubsubtypes. The institutions table has 
columns for the institution's name and its type, 
subtype, subsubtype, and subsubsubtype,
 represented by foreign keys to the respective 
tables. The types table stores the top-level 
type of the institution (public or private), 
and the subtypes table stores the second-level 
type (federal, state, non-sectarian, or sectarian).
 The subsubtypes table stores the third-level 
type (Christian or Islam), and the subsubsubtypes 
table stores the fourth-level type
 (Catholic or Protestant). The relationships 
between the tables are established through 
foreign key constraints, so that when a record 
is deleted in one of the tables, any related 
records in the other tables will also be deleted.
*/
