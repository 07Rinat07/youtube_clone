<?php
namespace Database\Factories;
use App\Models\Comment;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    public function definition()
    {
        return [
            'text' => fake()->sentences(mt_rand(1, 3), true),
            'user_id' => User::inRandomOrder()->first() ?: User::factory(),
            'video_id' => Video::inRandomOrder()->first() ?: Video::factory(),
        ];
    }
}
