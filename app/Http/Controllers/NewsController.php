<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NewsController extends Controller
{
    // Show all news
    public function index() {
        return view('news.index', [
            'news' => News::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    //Show single news
    public function show(news $news) {
        return view('news.show', [
            'news' => $news
        ]);
    }

    // Show Create Form
    public function create() {
        return view('news.create');
    }

    // Store news Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('news', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        News::create($formFields);

        return redirect('/')->with('message', 'News created successfully!');
    }

    // Show Edit Form
    public function edit(News $news) {
        return view('news.edit', ['news' => $news]);
    }

    // Update news Data
    public function update(Request $request, News $news) {
        // Make sure logged in user is owner
        if($news->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $news->update($formFields);

        return back()->with('message', 'News updated successfully!');
    }

    // Delete News
    public function destroy(News $news) {
        // Make sure logged in user is owner
        if($news->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        if($news->logo && Storage::disk('public')->exists($news->logo)) {
            Storage::disk('public')->delete($news->logo);
        }
        $news->delete();
        return redirect('/')->with('message', 'News deleted successfully');
    }

    // Manage News
    public function manage() {
        return view('news.manage', ['news' => auth()->user()->news()->get()]);
    }
}