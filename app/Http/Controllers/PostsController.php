<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\Posts;
 use Illuminate\Validation\Rule;
 
class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index',[
            
            'posts' => Posts::latest()->paginate(4)
        ]);
    }

    public function show(Posts $posts) {
        return view('posts.show', [
            'posts' => $posts
        ]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->move('uploads/images/');
        }

        Posts::create($formFields);

        return redirect('/')->with('message', 'Kreirana je novost uspješno!');
    }

     // Show Edit Form
     public function edit(Posts $posts) {
       
        return view('posts.edit', ['posts' => $posts]);
    }

    // Update  Data
    public function update(Request $request, Posts $posts) {
        // Make sure logged in user is owner
        //if($posts->user_id != auth()->id()) {
        //    abort(403, 'Unauthorized Action');
        //}
        
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->move('uploads/images/');
        }

        $posts->update($formFields);

        return back()->with('message', 'Novost je promjenjena!');
    }

    public function destroy(Posts $posts)
    {

        $posts->delete();

        return back()->with('message', 'Novost je uspješno obrisana!');
    }

       
    
}
