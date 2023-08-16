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
    public function buscarComentario(Request $request)
    {
        $comments = Post::find(1)->comments;
  
        dd($comments);
    }
    public function buscarPosteo(Request $request)
    {
        $post = Comment::find(1)->post;
  
        dd($post);
    }
    public function agregarComentario(Request $request)
    {
        $post = Post::find(1);
   
        $comment = new Comment;
        $comment->comment = "Hi ItSolutionStuff.com";
           
        $post = $post->comments()->save($comment);
    }
    public function AgregarNuevosComentario(Request $request)
    {
        $post = Post::find(1);
   
        $comment1 = new Comment;
        $comment1->comment = "Hi ItSolutionStuff.com Comment 1";
           
        $comment2 = new Comment;
        $comment2->comment = "Hi ItSolutionStuff.com Comment 2";
           
        $post = $post->comments()->saveMany([$comment1, $comment2]);
    }
    public function postearComentario(Request $request)
    {
        $comment = Comment::find(1);
        $post = Post::find(2);
           
        $comment->post()->associate($post)->save();
    }
}
