<?php

namespace Mahw17\Book;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;
use Mahw17\Book\HTMLForm\CreateForm;
use Mahw17\Book\HTMLForm\EditForm;
use Mahw17\Book\HTMLForm\DeleteForm;
use Mahw17\Book\HTMLForm\UpdateForm;

// use Anax\Route\Exception\ForbiddenException;
// use Anax\Route\Exception\NotFoundException;
// use Anax\Route\Exception\InternalErrorException;

/**
 * A sample controller to show how a controller class can be implemented.
 */
class BookController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;



    /**
     * @var $data description
     */
    //private $data;



    // /**
    //  * The initialize method is optional and will always be called before the
    //  * target method/action. This is a convienient method where you could
    //  * setup internal properties that are commonly used by several methods.
    //  *
    //  * @return void
    //  */
    // public function initialize() : void
    // {
    //     ;
    // }



    /**
     * Show all items.
     *
     * @return object as a response object
     */
    public function indexActionGet() : object
    {

        // Set navbar active
        $session = $this->di->get("session");
        $session->set('navbar', 'book');


        $page = $this->di->get("page");
        $book = new Book();
        $book->setDb($this->di->get("dbqb"));

        $data = [
            "title"         => "Böcker | ramverk1",
            "navbar"        => 'book',
            "intro_mount"   => 'Böcker',
            "intro_path"    => 'Visa böcker',
            "items"         => $book->findAll(),
        ];

        $page->add("mahw17/intro/subintro", $data, "subintro");
        $page->add("book/crud/view-all", $data, "main");

        return $page->render($data);
    }



    /**
     * Handler with form to create a new item.
     *
     * @return object as a response object
     */
    public function createAction() : object
    {
        // Set navbar active
        $session = $this->di->get("session");
        $session->set('navbar', 'book');

        $page = $this->di->get("page");
        $form = new CreateForm($this->di);
        $form->check();

        $data = [
            "title"         => "Böcker | ramverk1",
            "navbar"        => 'book',
            "intro_mount"   => 'Böcker',
            "intro_path"    => 'Lägg till bok',
            "form"          => $form->getHTML(),
        ];

        $page->add("mahw17/intro/subintro", $data, "subintro");
        $page->add("book/crud/create", $data, "main");

        return $page->render($data);
    }



    /**
     * Handler with form to delete an item.
     *
     * @return object as a response object
     */
    public function deleteAction() : object
    {
        // Set navbar active
        $session = $this->di->get("session");
        $session->set('navbar', 'book');

        $page = $this->di->get("page");
        $form = new DeleteForm($this->di);
        $form->check();

        $data = [
            "title"         => "Böcker | ramverk1",
            "navbar"        => 'book',
            "intro_mount"   => 'Böcker',
            "intro_path"    => 'Radera bok',
            "form"          => $form->getHTML(),
        ];

        $page->add("mahw17/intro/subintro", $data, "subintro");
        $page->add("book/crud/delete", $data, "main");

        return $page->render($data);
    }



    /**
     * Handler with form to update an item.
     *
     * @param int $id the id to update.
     *
     * @return object as a response object
     */
    public function updateAction(int $id) : object
    {
        // Set navbar active
        $session = $this->di->get("session");
        $session->set('navbar', 'book');

        $page = $this->di->get("page");
        $form = new UpdateForm($this->di, $id);
        $form->check();

        $data = [
            "title"         => "Böcker | ramverk1",
            "navbar"        => 'book',
            "intro_mount"   => 'Böcker',
            "intro_path"    => 'Uppdatera bok',
            "form"          => $form->getHTML(),
        ];

        $page->add("mahw17/intro/subintro", $data, "subintro");
        $page->add("book/crud/update", $data, "main");

        return $page->render($data);
    }
}
