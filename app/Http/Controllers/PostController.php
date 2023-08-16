<?php
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
  
class PostController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $comment = Comment::find(1);
        $post = Post::find(2);
           
        $comment->post()->associate($post)->save();
    }
}
