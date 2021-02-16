<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // ダミーデータ
        $articles = [
            (object)[
                'article_id' => 1,
                'article_name' => '簿記検定の本',
                'description' => '次2級借りる',
                'lender' => (object)[
                    'user_id' => 1,
                    'user_name' => 'zzzheng',
                    'nickname' => 'masana',
                ],
                'borrower' => (object)[
                    'user_id' => 2,
                    'user_name' => 'tarotaro',
                    'nickname' => 'taro',
                ],
                'deadline' => '2021/03/23',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            (object)[
                'article_id' => 2,
                'article_name' => 'ラスアス2',
                'description' => 'クリアして返す',
                'lender' => (object)[
                    'user_id' => 2,
                    'user_name' => 'tarotaro',
                    'nickname' => 'taro',
                ],
                'borrower' => (object)[
                    'user_id' => 1,
                    'user_name' => 'zzzheng',
                    'nickname' => 'masana',
                ],
                'deadline' => '2021/03/25',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            (object)[
                'article_id' => 3,
                'article_name' => 'インフラの教科書',
                'description' => '',
                'lender' => (object)[
                    'user_id' => 1,
                    'user_name' => 'zzzheng',
                    'nickname' => 'masana',
                ],
                'borrower' => (object)[
                    'user_id' => 3,
                    'user_name' => 'yokoyoko',
                    'nickname' => 'yoko',
                ],
                'deadline' => '2021/03/20',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        return view('articles.index')->with(['articles' => $articles]);
    }
}
