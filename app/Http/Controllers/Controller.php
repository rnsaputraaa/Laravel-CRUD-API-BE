<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *     title="Product CRUD API Documentation",
 *     version="1.0.0",
 *     description="API documentation for Product CRUD operations"
 * )
 * @OA\Server(
 *     url="http://localhost:8000",
 *     description="Development Server"
 * )
 * @OA\Tag(
 *     name="Products",
 *     description="Operations related to product management"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
