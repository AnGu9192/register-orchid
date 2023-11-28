<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    

    public function redactor()
    {
        return view('redactor');
    }
    public function review(){

        $reviews = new Comment();
        return view('review', ['reviews' => $reviews->all()]);
    }

    public function review_check(Request $request){
        $valid  = $request->validate([
            'content' => 'required|min:6|max:500',
        ]);

        $review = new Comment();
        $review->content = $request->input('content');
        $review->save();

        return redirect('review');

    }

    public function store(Request $request)
    {

    $post = new Post();
    $post->content = $request->input('content');
    // return "Form submitted successfully!";
    $post->save();
    return redirect('/home');

}
  
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        $uploadedImage = $request->file('image');
        $imageName = time() . '_' . $uploadedImage->getClientOriginalName();
        $uploadedImage->storeAs('public/images', $imageName); 

        $imageUrl = asset('storage/images/' . $imageName);

        return response()->json(['url' => $imageUrl]);
    }
}
