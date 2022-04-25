<?php
  require_once('Publisher.php');
  require_once('Book.php');

  class PublisherController extends Controller {
    public function index() {
    return view('publisher/index',['publishers' => Publisher::all(),'title'=>'Publisher List']);
   }
   public function show($id) {
    $prof = Publisher::find($id);
    $books= Book::where('publisher_id',$id);
    return view('publisher/show',
      ['publisher'=>$prof,'books'=>$books,
       'title'=>'Publisher Detail']);
  }

  }
?>
