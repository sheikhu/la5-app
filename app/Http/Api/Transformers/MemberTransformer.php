<?php
/**
 * Created by PhpStorm.
 * User: sheikhu
 * Date: 02/05/16
 * Time: 21:55
 */

namespace App\Http\Api\Transformers;

use App\Member;
use League\Fractal\TransformerAbstract;

class MemberTransformer extends TransformerAbstract
{

    protected $defaultIncludes = [
        'user'
    ];

    public function transform(Member $member)
    {
        return [
            'id'    =>  (int) $member->id,
            'active' => (boolean)$member->active,
            'gender' => $member->gender
        ];
    }

    public function includeUser(Member $member)
    {
        return $this->item($member->user, new UserTransformer);
    }
}