<?php
  require_once('Book.php');

  class BookController extends Controller {
    public function index() {
    return view('book/index',['books' => Book::all(),'title'=>'Books List']);
   }
   public function home() {
    echo 'Hello, World 22222!';
  }

  public function show($id) {
    $prof = Book::find($id);
    return view('book/show',
      ['book'=>$prof,
       'title'=>'Book Detail']);
  }
  }
?>
