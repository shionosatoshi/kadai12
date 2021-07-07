{"filter":false,"title":"2021_07_05_102425_create_news_table.php","tooltip":"/mynews/database/migrations/2021_07_05_102425_create_news_table.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":31,"column":0},"action":"remove","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreateNewsTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('news', function (Blueprint $table) {","            $table->bigIncrements('id');","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('news');","    }","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":34,"column":1},"action":"insert","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreateNewsTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","     // title と body と image_path を追記","    public function up()","    {","        Schema::create('news', function (Blueprint $table) {","            $table->bigIncrements('id');","            $table->string('title'); // ニュースのタイトルを保存するカラム","            $table->string('body');  // ニュースの本文を保存するカラム","            $table->string('image_path')->nullable();  // 画像のパスを保存するカラム","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('news');","    }","}"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":16,"column":60},"end":{"row":16,"column":60},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1625481083289,"hash":"5a19b71a2774d57619fa0f447828fe2293a22617"}