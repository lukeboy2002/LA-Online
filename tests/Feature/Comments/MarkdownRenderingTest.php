<?php

use App\Models\Comment;
use App\Models\Post;

it('renders Markdown in comments on the post page', function () {
    $post = Post::factory()->create();

    Comment::factory()->for($post)->create([
        'comment' => '**bold** _italic_',
    ]);

    $this->get(route('posts.show', $post->slug))
        ->assertSuccessful()
        ->assertSee('<strong>bold</strong>', false)
        ->assertSee('<em>italic</em>', false);
});
