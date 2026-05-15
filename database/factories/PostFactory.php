<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            // $table->id();
            // $table->string('title');
            // $table->string('slug')->unique();
            // $table->text('description');
            // $table->integer('user_id');
            // $table->enum('status', ['draft', 'published'])->default('draft');
            // $table->string("image")->nullable();
        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->paragraph(),
            'user_id' => 1, // Assuming you have a user with ID 1
            'status' => $this->faker->randomElement(['draft', 'published']),
            'image' => null, // You can set this to a fake image URL if needed
        ];
    }
}
