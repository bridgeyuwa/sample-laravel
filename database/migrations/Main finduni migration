use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFindUniversityTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('region_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('region_id')
                ->references('id')
                ->on('regions')
                ->onDelete('cascade');
        });

        Schema::create('local_governments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('state_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('state_id')
                ->references('id')
                ->on('states')
                ->onDelete('cascade');
        });

        Schema::create('types_of_institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('categories_of_institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('semester_systems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('state_id');
            $table->unsignedInteger('local_government_id');
            $table->unsignedInteger('type_of_institution_id');
            $table->unsignedInteger('category_of_institution_id');
            $table->unsignedInteger('semester_system_id');
            $table->string('abbreviation');
            $table->integer('year_established');
            $table->integer('minimum_fee');
            $table->integer('maximum_fee');
            $table->string('address');
            $table->string('website_address');
            $table->timestamps();

            $table->foreign('state_id')
                ->references('id')
                ->on('states')
                ->onDelete('cascade');

            $table->foreign('local_government_id')
                ->references('id')
                ->on('local_governments')
                ->onDelete('cascade');

            $table
->foreign('type_of_institution_id')
->references('id')
->on('types_of_institutions')
->onDelete('cascade');

        $table->foreign('category_of_institution_id')
            ->references('id')
            ->on('categories_of_institutions')
            ->onDelete('cascade');

        $table->foreign('semester_system_id')
            ->references('id')
            ->on('semester_systems')
            ->onDelete('cascade');
    });

    Schema::create('catchment_areas', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('institution_id');
        $table->unsignedInteger('state_id');
        $table->timestamps();

        $table->foreign('institution_id')
            ->references('id')
            ->on('institutions')
            ->onDelete('cascade');

        $table->foreign('state_id')
            ->references('id')
            ->on('states')
            ->onDelete('cascade');
    });

    Schema::create('programs', function (Blueprint $table) {
        $table->increments('id');
        $table->string('description');
        $table->timestamps();
    });

    Schema::create('institution_program', function (Blueprint $table) {
        $table->unsignedInteger('institution_id');
        $table->unsignedInteger('program_id');
        $table->integer('duration');
        $table->integer('fee');
        $table->timestamps();

        $table->foreign('institution_id')
            ->references('id')
            ->on('institutions')
            ->onDelete('cascade');

        $table->foreign('program_id')
            ->references('id')
            ->on('programs')
            ->onDelete('cascade');

        $table->primary(['institution_id', 'program_id']);
    });

    Schema::create('utme_subjects', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->timestamps();
    });

    Schema::create('program_utme_subject', function (Blueprint $table) {
        $table->unsignedInteger('program_id');
        $table->unsignedInteger('utme_subject_id');
        $table->timestamps();

        $table->foreign('program_id')
            ->references('id')
            ->on('programs')
            ->onDelete('cascade');

        $table->foreign('utme_subject_id')
            ->references('id')
            ->on('utme_subjects')
            ->onDelete('cascade');

        $table->primary(['program_id', 'utme_subject_id']);
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('program_utme_subject');
    Schema::dropIfExists
('utme_subjects');
Schema::dropIfExists('institution_program');
Schema::dropIfExists('programs');
Schema::dropIfExists('catchment_areas');
Schema::dropIfExists('institutions');
Schema::dropIfExists('semester_systems');
Schema::dropIfExists('categories_of_institutions');
Schema::dropIfExists('types_of_institutions');
Schema::dropIfExists('local_governments');
Schema::dropIfExists('states');
Schema::dropIfExists('regions');
}
}
