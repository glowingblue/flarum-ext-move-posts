<?php

/*
 * This file is part of sycho/flarum-move-posts.
 *
 * Copyright (c) 2021 Sami Mazouz.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Schema\Builder;

 return [
     'up' => function (Builder $schema) {
         if (!$schema->hasColumn('discussions', 'is_first_moved')) {
             $schema->table('discussions', function (Blueprint $table) {
                 $table->boolean('is_first_moved')->default(false);
             });
         }
     },
     'down' => function (Builder $schema) {
         $schema->table('discussions', function (Blueprint $table) {
             $table->dropColumn('is_first_moved');
         });
     }
 ];
