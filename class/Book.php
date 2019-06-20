<?php


class Book
{
    public $book_id;
    public $bookName;
    public $bookAuthor;
    public $bookPrice;
    public $bookImage;
    public $bookQuantity;
    public function __construct($bookName, $bookAuthor, $bookPrice, $bookImage, $bookQuantity)
    {
        $this->bookName = $bookName;
        $this->bookAuthor = $bookAuthor;
        $this->bookPrice = $bookPrice;
        $this->bookQuantity = $bookQuantity;
        $this->bookImage = $bookImage;
    }

}