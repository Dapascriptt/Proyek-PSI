<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\User;
use Dotenv\Util\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use PhpParser\Node\Expr\Cast\String_;

class ReviewController extends Controller
{
    public function index()
    {
        $review = Review::all();
        return view('admin.review.table', compact('review'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.review.add-review', compact('users'));
    }

    public function store(Request $request)
    {
        Review::create([
            'user_id' => $request->user_id,
            'ulasan' => $request->ulasan,
        ]);

        return redirect()->route('review-table');
    }

    public function edit(string $id)
    {
        $review = Review::findOrFail($id);
        return view('admin.review.edit-review', compact('review'));
    }

    public function update(Request $request, string $id)
    {
        $review = Review::findOrFail($id);

        $review->update([
            'ulasan' => $request->ulasan,
        ]);

        return redirect()->route('review-table');
    }

    public function destroy(string $id)
    {
        $review = Review::findOrFail($id);

        $review->delete();

        return redirect()->route('review-table');
    }
}
