<?php

class AppController
{
    /**
     * @return void
     */
    public function home(): void
    {
        require "../src/Views/home.php";
    }

    /**
     * @return void
     */
    public function rgpd(): void
    {
        require "../src/Views/rgpd.php";
    }

    /**
     * @return void
     */
    public function pageNotFound()
    {
        require "../src/Views/page-not-found.php";
    }
}