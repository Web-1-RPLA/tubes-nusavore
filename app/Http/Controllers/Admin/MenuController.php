<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::latest()->get();
        return view('admin.menu.index', compact('menus'));
    }

    public function create()
    {
        return view('admin.menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'image' => 'nullable|image'
        ]);

        $imagePath = $request->file('image')
            ? $request->file('image')->store('menu', 'public')
            : null;

        Menu::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
            'image' => $imagePath
        ]);

        return redirect('/admin/menu')->with('success', 'Menu berhasil ditambahkan');
    }

public function edit($id)
{
    $menu = Menu::findOrFail($id);
    return view('admin.menu.edit', compact('menu'));
}


    
public function update(Request $request, $id)
{
    $menu = Menu::findOrFail($id);

    $data = $request->validate([
        'name' => 'required',
        'description' => 'nullable',
        'price' => 'required|numeric',
        'category' => 'required',
        'image' => 'nullable|image'
    ]);

    // Jika upload gambar baru
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('menu', 'public');
    }

    $menu->update($data);

    return redirect('/admin/menu')->with('success', 'Menu berhasil diupdate');
}


    public function destroy(Menu $menu)
    {
        if ($menu->image) {
            Storage::disk('public')->delete($menu->image);
        }

        $menu->delete();
        return back()->with('success', 'Menu berhasil dihapus');
    }
}
