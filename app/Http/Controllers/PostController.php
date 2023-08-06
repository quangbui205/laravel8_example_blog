<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

/**
 * Class PostController handle post requests
 */
class PostController extends Controller
{
    /**
     * Method Post Index
     *
     * @return string
     */
    public function index()
    {
        return 'Post Index Controller';
    }

    /**
     * Method Post Add New
     *
     * @return string
     */
    public function add()
    {
        return 'Post Add New Controller';
    }

    /**
     * Method create new post
     *
     * @param Request $request
     *
     * @return string
     */
    public function create(Request $request)
    {
        return 'Post Create New Record';
    }

    /**
     * Method view detail of post
     *
     * @param Request $request
     * @param int $id
     *
     * @return string
     */
    public function detail(Request $request, int $id)
    {
        return 'Post record detail: ' . $id;
    }

    /**
     * Method edit data of post
     *
     * @param Request $request
     * @param int $id
     * @return string
     */
    public function edit(Request $request, int $id)
    {
        return 'Post Edit Record: ' . $id;
    }

    /**
     * Method update data of post
     *
     * @param Request $request
     * @param int $id
     * @return string
     */
    public function update(Request $request, int $id)
    {
        return 'Post Update Record: ' . $id;
    }

    /**
     * Method delete data of post
     *
     * @param Request $request
     * @param int $id
     * @return string
     */
    public function delete(Request $request, int $id)
    {
        return 'Post Delete Record: ' . $id;
    }
}
