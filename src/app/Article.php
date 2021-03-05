<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    /**
     * @var string
     */
    private $article_name;

    /**
     * @var int
     */
    private $lender_id;

    /**
     * @var int
     */
    private $borrower_id;

    /**
     * @var date
     */
    private $deadline;

    /**
     * @var string
     */
    private $description;

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
