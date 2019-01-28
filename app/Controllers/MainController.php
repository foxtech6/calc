<?php

namespace App\Controllers;

use Foxtech\Kernel\AbstractController;
use Foxtech\Kernel\Exceptions\NotFoundException;

/**
 * Class MainController
 *
 * @author Mykhailo Bavdys <bavdysmyh@ukr.net>
 * @since 28.01.2019
 */
class MainController extends AbstractController
{
    /**
     * Main page
     *
     * @throws NotFoundException
     */
    public function index()
    {
        $this->render('main');
    }
}
