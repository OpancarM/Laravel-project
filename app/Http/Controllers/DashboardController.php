<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        return view('dashboard',[
            'posts' => Posts::paginate(6)
        ]);
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Posts::create($formFields);

        return redirect('/')->with('message', 'Kreirana je novost uspješno!');
    }

    public function destroy(Posts $posts)
    {

        $posts->delete();

        if($posts->image && Storage::disk('public')->exists($posts->image)) {
            Storage::disk('public')->delete($posts->image);
        }

        return redirect('/dashboard')->with('message', 'Novost je uspješno obrisana!');
    }
}


