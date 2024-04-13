<?php

namespace Tests\Feature\Article;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexText extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function can_fetch_all_article(){
 
        $this->withoutExceptionHandling();
        $article = Article::factory()->count(3)->create();
        $response = $this->getJson(route('api.articles.index'));

        $response->assertExactJson([
            'data' => [
                [
                'type' => 'article',
                'id' => (string)$article[0]->getRouteKey(),
                'attributes' => [
                    'title' => $article[0]->title,
                    'slug' => $article[0]->slug,
                    'content' => $article[0]->content
                ],
                'link' => [
                    'self' => route('api.articles.index', $article[0])
                ]
            ],

               [
                'type' => 'article',
                'id' => (string)$article[1]->getRouteKey(),
                'attributes' => [
                    'title' => $article[1]->title,
                    'slug' => $article[1]->slug,
                    'content' => $article[1]->content
                ],
                'link' => [
                    'self' => route('api.articles.index', $article[1])
                ]
            ],

               [
                'type' => 'article',
                'id' => (string)$article[2]->getRouteKey(),
                'attributes' => [
                    'title' => $article[2]->title,
                    'slug' => $article[2]->slug,
                    'content' => $article[2]->content
                ],
                'link' => [
                    'self' => route('api.articles.index', $article[2])
                ],
               ]
            ]
        ]);
    }
}


