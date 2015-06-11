<?php namespace App\Http\Controllers;

    /**
     * Article acces control class
     */
    class ArticleController extends Controller {

        /**
         * Shows article with given id
         * @param int $id
         * @return view
         */
        public function show($id) {
            return view('article', ['id' => $id]);
        }

    }
