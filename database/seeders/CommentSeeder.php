<?php
namespace Database\Seeders;
use App\Models\Comment;
use App\Models\Video;
use Illuminate\Database\Seeder;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::take(2)
            ->get()
            ->flatMap(fn (Video $video) => $this->forVideo($video))
            ->each(fn (Comment $comment) => $this->repliesOf($comment));
    }

    private function forVideo(Video $video)
    {
        return Comment::factory(3)->for($video)->create();
    }

    private function repliesOf(Comment $comment)
    {
        Comment::factory(3)->for($comment->video)->for($comment, 'parent')->create();
    }
}
