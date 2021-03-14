<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'article_id' => 1,
                'lender_id' => 1,
                'borrower_id' => 2,
                'article_name' => 'Vue.js入門',
                'description' => '頑張るぞ',
                'status' => 0,
                'deadline' => '2021-09-12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'article_id' => 2,
                'lender_id' => 2,
                'borrower_id' => 1,
                'article_name' => 'ラスアス2',
                'description' => 'クリアするまで借ります',
                'status' => 0,
                'deadline' => '2022-09-12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'article_id' => 3,
                'lender_id' => 3,
                'borrower_id' => 1,
                'article_name' => '簿記検定3級の本',
                'description' => '頑張るお',
                'status' => 1,
                'deadline' => '2020-10-10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
