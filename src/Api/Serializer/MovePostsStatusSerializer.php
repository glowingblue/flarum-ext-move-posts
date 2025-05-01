<?php

namespace GlowingBlue\MovePosts\Api\Serializer;

use Flarum\Api\Serializer\AbstractSerializer;
use InvalidArgumentException;
use GlowingBlue\MovePosts\Command\MovePosts;

class MovePostsStatusSerializer extends AbstractSerializer
{
    protected $type = 'move-posts';

    public function getId($model)
    {
        return 1;
    }

    protected function getDefaultAttributes($model)
    {
        return [
            'status' => $model['status'],
        ];
    }
}
