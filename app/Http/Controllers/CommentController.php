<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    private $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function store(Request $request)
    {
        $comment = $request->all('post_id', 'text');
        $this->comment->create($comment);

        return redirect()->route('show', ['post_id' => $comment['post_id']]);
    }

    public function delete(int $comment_id, int $post_id)
    {
        $this->comment->destroy($comment_id);

        return redirect()->route('show', ['post_id' => $post_id]);
    }
}
