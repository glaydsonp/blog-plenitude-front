<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post_collection = json_decode(file_get_contents('http://plenitudetao.com/blog-api/wp-json/wp/v2/posts?_embed&categories=52&page=1&per_page=4'), true);
        $post_categories_response = json_decode(file_get_contents('http://plenitudetao.com/blog-api/wp-json/wp/v2/categories', true));

        $post_categories = $this->filterUnwantedCategories($post_categories_response);

        $post_categories_photos = [
            '/public/images/acupuntura.jpg',
            '/public/images/aromaterapia.jpg',
            '/public/images/access.jpeg',
            '/public/images/hipnoterapia.jpg',
            '/public/images/laserterapia.jpg',
            '/public/images/regressão.jpg',
            '/public/images/thetahealing.jpg',
            '/public/images/tqc.jpg',
        ];

        return view('pages.home', [
            'page_title' => 'Plenitude Tao - A sabedoria do Tao',
            'post_collection' => $post_collection,
            'post_categories' => $post_categories,
            'post_categories_photos' => $post_categories_photos
        ]);
    }

    protected function filterUnwantedCategories($categoriesArray)
    {
        $categories_filtered = array();

        foreach ($categoriesArray as $category) {
            if ($category->id != 1 && $category->id != 52) {
                array_push($categories_filtered, $category);
            }
        }
        return $categories_filtered;
    }
}
