<?php

    namespace App\Http\Controllers;

    /**
     * Bill acces control class
     */
    class BillController extends Controller {

        /**
         * Shows bill with given id
         * @param int $id
         * @return view
         */
        public function show($id) {
            return view('bill', ['id' => $id]);
        }

    }
