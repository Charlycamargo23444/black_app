<?php

namespace Tests\Feature\Article;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateArticleTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function can_create_article(): void
    {
        $this->withoutExceptionHandling();
        $this->postJson(route('api.articles.create'),[
            'data' => [
                'type' => 'article',
                'attributes' => [
                    'title' => 'nuevo articulo',
                    'slug' => 'nuevo-articulo',
                    'content' => 'contenido del articulo'
                ]
            ]

        ])->assertCreated();
    }
}
