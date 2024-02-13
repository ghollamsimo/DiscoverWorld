<?php

namespace App\Http\Controllers;

use App\Models\Recit;
use App\Models\RecitImages;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecitsController extends Controller
{
    public function Recit(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'destination' => 'required',
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'conseils' => 'required',
        ]);

        $userId = Auth::id();

        $newAventure = Recit::create([
            'title' => $data['title'],
            'user_id' => $userId,
            'destination' => $data['destination'],
            'description' => $data['description'],
            'conseils' => $data['conseils']
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public/images', $filename);

                $newAventureImage = RecitImages::create([
                    'image' => $filename,
                    'recit_id' => $newAventure->id
                ]);
            }

            return redirect()->route('profile')->with('success', 'Recits Created  successfully!');
        } else {
            return back()->with('error', 'Aucune image téléchargée!');
        }
    }
    public function DisplayTheRecits()
    {
        $userId = Auth::id();
        $aventures = Recit::where('user_id', $userId)->with('images')->get();
        return view('profile', compact('aventures'));
    }

    public function afficherAll()
    {
        $aventures = Recit::with('images')->latest()->get();
        $userCount = User::count();
        $recitCount = Recit::count();
        $destinationCount = Recit::distinct('destination')->count();
        return view('welcome', compact('aventures', 'userCount', 'recitCount', 'destinationCount'));
    }


    public function filterDesc()
    {
        $recits = Recit::with('images', 'user')->get();
        $userCount = User::count();
        $recitCount = Recit::count();
        $destinationCount = Recit::distinct('destination')->count();
        $aventures = Recit::with('images')->latest()->get();
        return view('welcome', compact('recits', 'userCount', 'recitCount', 'destinationCount', 'aventures'));
    }

    public function filterAsc()
    {
        $recits = Recit::with('images', 'user')->get();
        $userCount = User::count();
        $recitCount = Recit::count();
        $destinationCount = Recit::distinct('destination')->count();
        $aventures = Recit::with('images')->oldest()->get();
        return view('welcome', compact('recits', 'userCount', 'recitCount', 'destinationCount', 'aventures'));
    }

    public function filterDestination(Request $request)
    {
        $destination = $request->input('destination');
        if ($destination === 'ََAll') {
            return redirect()->route('home');
        } else {
            $aventures = Recit::where('destination', $destination)->with('images')->get();
        }
        $userCount = User::count();
        $recitCount = Recit::count();
        $destinationCount = Recit::distinct('destination')->count();
        return view('welcome', compact('aventures',  'userCount', 'recitCount', 'destinationCount', 'aventures'));
    }

    public function singleRecit(Recit $recit)
    {
        // dd($recit);
        return view('singleRecit', [
            "recit" => $recit,
        ]);
    }

    public function SingleRecitUser(Recit $recit){
        return view('profile' , [
            'recit' => $recit
        ]);
    }
}
