<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReview;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function index()
    {
        $reviews = \DB::table('product_reviews')->get();
        return view('index', compact('reviews'));
    }

    public function create()
    {
        return view('create');
    }

    public function show($id)
    {
        $review = \DB::table('product_reviews')->where('id', $id)->first();

        if (!$review) {
            abort(404);
        }
        return view('detail', compact('review'));
    }

    public function store(StoreReview $request)
    {
        $request_data = $request->all();
        unset($request_data['_token']);

        $result = \DB::table('product_reviews')->insert($request_data);

        if ($result) {
            return redirect('/home');
        }
    }
    public function edit($id)
    {
        $review  = \DB::table('product_reviews')->where('id', '=', $id)->first();

        return view('edit', compact('review'));
    }

    public function update(StoreReview $request, $id)
    {
        $request_product = $request->all();
        unset($request_product['_token']);

        $result = \DB::table('product_reviews')->where('id', $id)->update($request_product);

        if ($result) {
            return redirect('/product_review/' . $id);
        }
    }
    public function upvote($id)
    {
        \DB::table('product_reviews')->where('id',  $id)->increment('votes');

        return redirect('/product_review/' . $id);
    }

    public function downvote($id)
    {
        \DB::table('product_reviews')->where('id',  $id)->decrement('votes');

        return redirect('/product_review/' . $id);
    }
}
