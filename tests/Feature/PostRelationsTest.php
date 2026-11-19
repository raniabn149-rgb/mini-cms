
<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

beforeEach(function () {
    $this->withoutVite();
});

it('shows the author, category and tags of each post', function () {
    $user = User::factory()->create(['name' => 'Amira Ben Salah']);
    $category = Category::factory()->create(['name' => 'Développement']);
    $tag = Tag::factory()->create(['name' => 'Laravel']);

    $post = Post::factory()->published()->create([
        'user_id' => $user->id,
        'category_id' => $category->id,
    ]);

    $post->tags()->attach($tag);

    $this->get(route('posts.index'))
        ->assertOk()
        ->assertSee('Amira Ben Salah')
        ->assertSee('Développement')
        ->assertSee('Laravel');
});