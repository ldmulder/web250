<$php
class Book {

  // properties

  var $title;
  
  var $author;

  // methods 

  function show_due_date() {
    // returns today's date
    return date('d F, Y');
    
  }

  function display_book_author() {
    return "This book is titled " . $this->title . " and is written by " . $this->author . ".<br/>";
  }
  

}



// instantiate the class into an object 
$book = new Book;
$book->title = "The Hobbit";
$book->author = "J.R.R. Tolkien";
echo $book->display_book_author();

$book2 = new Book;
$book->title = "Lord of the Flies";
$book->author = "William Golding";
echo $book->display_book_author();
