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
        $post_categories = json_decode(file_get_contents('http://plenitudetao.com/blog-api/wp-json/wp/v2/categories', true));

        $post_categories_photos = [
            'https://s3-alpha-sig.figma.com/img/e1a6/3982/a7cef8bc71a662eeea90f864bf41d3ac?Expires=1604275200&Signature=KG355Ms1EpVEJrf2SpfsX8I1VdwGNHBR-50bXds6pyr1UxYGsxAU~yxy~lawNZGBgOgGrKRNDyyO12nEWc7AcP~a206L~wRFp7R7WRaSB8TliKtF0S8fWLEPiNmS-nKRN8ZUfdeSjLJC29iV5p0iONuS1eqRSIaG3jPW-gM-UaoqosxmSR5ImH6EzpJf9J5P4mqpqt7v5oP8HeQ5ePoYBeaZCQ34lWrOqyk4vZPVGo-RXPqNe8e5yYzEkM0q7huR31F7zbJ0pcJNgnc9ZQybbn-0sfQPDjo9qkrXJm6e13qQLFh6D2BvgO985pmxPoEa70HJ5op7S47ixEhdrI9V2g__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA',
            'https://s3-alpha-sig.figma.com/img/e1a6/3982/a7cef8bc71a662eeea90f864bf41d3ac?Expires=1604275200&Signature=KG355Ms1EpVEJrf2SpfsX8I1VdwGNHBR-50bXds6pyr1UxYGsxAU~yxy~lawNZGBgOgGrKRNDyyO12nEWc7AcP~a206L~wRFp7R7WRaSB8TliKtF0S8fWLEPiNmS-nKRN8ZUfdeSjLJC29iV5p0iONuS1eqRSIaG3jPW-gM-UaoqosxmSR5ImH6EzpJf9J5P4mqpqt7v5oP8HeQ5ePoYBeaZCQ34lWrOqyk4vZPVGo-RXPqNe8e5yYzEkM0q7huR31F7zbJ0pcJNgnc9ZQybbn-0sfQPDjo9qkrXJm6e13qQLFh6D2BvgO985pmxPoEa70HJ5op7S47ixEhdrI9V2g__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA',
            'https://s3-alpha-sig.figma.com/img/e1a6/3982/a7cef8bc71a662eeea90f864bf41d3ac?Expires=1604275200&Signature=KG355Ms1EpVEJrf2SpfsX8I1VdwGNHBR-50bXds6pyr1UxYGsxAU~yxy~lawNZGBgOgGrKRNDyyO12nEWc7AcP~a206L~wRFp7R7WRaSB8TliKtF0S8fWLEPiNmS-nKRN8ZUfdeSjLJC29iV5p0iONuS1eqRSIaG3jPW-gM-UaoqosxmSR5ImH6EzpJf9J5P4mqpqt7v5oP8HeQ5ePoYBeaZCQ34lWrOqyk4vZPVGo-RXPqNe8e5yYzEkM0q7huR31F7zbJ0pcJNgnc9ZQybbn-0sfQPDjo9qkrXJm6e13qQLFh6D2BvgO985pmxPoEa70HJ5op7S47ixEhdrI9V2g__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA',
            'https://s3-alpha-sig.figma.com/img/e1a6/3982/a7cef8bc71a662eeea90f864bf41d3ac?Expires=1604275200&Signature=KG355Ms1EpVEJrf2SpfsX8I1VdwGNHBR-50bXds6pyr1UxYGsxAU~yxy~lawNZGBgOgGrKRNDyyO12nEWc7AcP~a206L~wRFp7R7WRaSB8TliKtF0S8fWLEPiNmS-nKRN8ZUfdeSjLJC29iV5p0iONuS1eqRSIaG3jPW-gM-UaoqosxmSR5ImH6EzpJf9J5P4mqpqt7v5oP8HeQ5ePoYBeaZCQ34lWrOqyk4vZPVGo-RXPqNe8e5yYzEkM0q7huR31F7zbJ0pcJNgnc9ZQybbn-0sfQPDjo9qkrXJm6e13qQLFh6D2BvgO985pmxPoEa70HJ5op7S47ixEhdrI9V2g__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA',
            'https://s3-alpha-sig.figma.com/img/e1a6/3982/a7cef8bc71a662eeea90f864bf41d3ac?Expires=1604275200&Signature=KG355Ms1EpVEJrf2SpfsX8I1VdwGNHBR-50bXds6pyr1UxYGsxAU~yxy~lawNZGBgOgGrKRNDyyO12nEWc7AcP~a206L~wRFp7R7WRaSB8TliKtF0S8fWLEPiNmS-nKRN8ZUfdeSjLJC29iV5p0iONuS1eqRSIaG3jPW-gM-UaoqosxmSR5ImH6EzpJf9J5P4mqpqt7v5oP8HeQ5ePoYBeaZCQ34lWrOqyk4vZPVGo-RXPqNe8e5yYzEkM0q7huR31F7zbJ0pcJNgnc9ZQybbn-0sfQPDjo9qkrXJm6e13qQLFh6D2BvgO985pmxPoEa70HJ5op7S47ixEhdrI9V2g__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA',
            'https://s3-alpha-sig.figma.com/img/e1a6/3982/a7cef8bc71a662eeea90f864bf41d3ac?Expires=1604275200&Signature=KG355Ms1EpVEJrf2SpfsX8I1VdwGNHBR-50bXds6pyr1UxYGsxAU~yxy~lawNZGBgOgGrKRNDyyO12nEWc7AcP~a206L~wRFp7R7WRaSB8TliKtF0S8fWLEPiNmS-nKRN8ZUfdeSjLJC29iV5p0iONuS1eqRSIaG3jPW-gM-UaoqosxmSR5ImH6EzpJf9J5P4mqpqt7v5oP8HeQ5ePoYBeaZCQ34lWrOqyk4vZPVGo-RXPqNe8e5yYzEkM0q7huR31F7zbJ0pcJNgnc9ZQybbn-0sfQPDjo9qkrXJm6e13qQLFh6D2BvgO985pmxPoEa70HJ5op7S47ixEhdrI9V2g__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA',
            'https://s3-alpha-sig.figma.com/img/e1a6/3982/a7cef8bc71a662eeea90f864bf41d3ac?Expires=1604275200&Signature=KG355Ms1EpVEJrf2SpfsX8I1VdwGNHBR-50bXds6pyr1UxYGsxAU~yxy~lawNZGBgOgGrKRNDyyO12nEWc7AcP~a206L~wRFp7R7WRaSB8TliKtF0S8fWLEPiNmS-nKRN8ZUfdeSjLJC29iV5p0iONuS1eqRSIaG3jPW-gM-UaoqosxmSR5ImH6EzpJf9J5P4mqpqt7v5oP8HeQ5ePoYBeaZCQ34lWrOqyk4vZPVGo-RXPqNe8e5yYzEkM0q7huR31F7zbJ0pcJNgnc9ZQybbn-0sfQPDjo9qkrXJm6e13qQLFh6D2BvgO985pmxPoEa70HJ5op7S47ixEhdrI9V2g__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA',
            'https://s3-alpha-sig.figma.com/img/e1a6/3982/a7cef8bc71a662eeea90f864bf41d3ac?Expires=1604275200&Signature=KG355Ms1EpVEJrf2SpfsX8I1VdwGNHBR-50bXds6pyr1UxYGsxAU~yxy~lawNZGBgOgGrKRNDyyO12nEWc7AcP~a206L~wRFp7R7WRaSB8TliKtF0S8fWLEPiNmS-nKRN8ZUfdeSjLJC29iV5p0iONuS1eqRSIaG3jPW-gM-UaoqosxmSR5ImH6EzpJf9J5P4mqpqt7v5oP8HeQ5ePoYBeaZCQ34lWrOqyk4vZPVGo-RXPqNe8e5yYzEkM0q7huR31F7zbJ0pcJNgnc9ZQybbn-0sfQPDjo9qkrXJm6e13qQLFh6D2BvgO985pmxPoEa70HJ5op7S47ixEhdrI9V2g__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA',
            'https://s3-alpha-sig.figma.com/img/e1a6/3982/a7cef8bc71a662eeea90f864bf41d3ac?Expires=1604275200&Signature=KG355Ms1EpVEJrf2SpfsX8I1VdwGNHBR-50bXds6pyr1UxYGsxAU~yxy~lawNZGBgOgGrKRNDyyO12nEWc7AcP~a206L~wRFp7R7WRaSB8TliKtF0S8fWLEPiNmS-nKRN8ZUfdeSjLJC29iV5p0iONuS1eqRSIaG3jPW-gM-UaoqosxmSR5ImH6EzpJf9J5P4mqpqt7v5oP8HeQ5ePoYBeaZCQ34lWrOqyk4vZPVGo-RXPqNe8e5yYzEkM0q7huR31F7zbJ0pcJNgnc9ZQybbn-0sfQPDjo9qkrXJm6e13qQLFh6D2BvgO985pmxPoEa70HJ5op7S47ixEhdrI9V2g__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA',
            'https://s3-alpha-sig.figma.com/img/e1a6/3982/a7cef8bc71a662eeea90f864bf41d3ac?Expires=1604275200&Signature=KG355Ms1EpVEJrf2SpfsX8I1VdwGNHBR-50bXds6pyr1UxYGsxAU~yxy~lawNZGBgOgGrKRNDyyO12nEWc7AcP~a206L~wRFp7R7WRaSB8TliKtF0S8fWLEPiNmS-nKRN8ZUfdeSjLJC29iV5p0iONuS1eqRSIaG3jPW-gM-UaoqosxmSR5ImH6EzpJf9J5P4mqpqt7v5oP8HeQ5ePoYBeaZCQ34lWrOqyk4vZPVGo-RXPqNe8e5yYzEkM0q7huR31F7zbJ0pcJNgnc9ZQybbn-0sfQPDjo9qkrXJm6e13qQLFh6D2BvgO985pmxPoEa70HJ5op7S47ixEhdrI9V2g__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA',
        ];

        return view('pages.home', [
            'page_title' => 'Plenitude Tao - A sabedoria do Tao',
            'post_collection' => $post_collection,
            'post_categories' => $post_categories,
            'post_categories_photos' => $post_categories_photos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
