<?php
  require_once('Author.php');
  require_once('Book.php');

  class AuthorController extends Controller {
    public function index() {
    return view('author/index',['author' => Author::all(),'title'=>'Authors List']);
   }
   public function show($id) {
    $aut= Author::find($id);
    $books= Book::where('author_id',$id);
    return view('author/show',
      ['author'=>$aut, 'books'=>$books,
       'title'=>'Author Detail']);
  }

  }
?>
