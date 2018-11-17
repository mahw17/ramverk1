<?php

namespace Mahw17\Controller;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;

/**
 * Controller to hanle the About request
 * lets the user choose the stylesheet to use.
 */
class AboutController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;

    /**
     * Display the about page.
     *
     * @return object to render
     */
    public function indexActionGet() : object
    {
        // Set navbar active
        $session = $this->di->get("session");
        $session->set('navbar', 'about');

        $data = [
            "title"         => "OM | ramverk1",
            "navbar"        => 'about',
            "intro_mount"   => 'Om Ramverk1',
            "intro_path"    => 'Om Ramverk1'
        ];

        $page = $this->di->get("page");

        $page->add("mahw17/intro/subintro", $data, "subintro");
        $page->add("mahw17/about/about", $data, "main");

        return $page->render($data);
    }
}
