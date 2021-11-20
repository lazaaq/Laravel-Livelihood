<?php

namespace App\Http\Controllers;

use App\Models\Sertificate;
use App\Http\Requests\StoreSertificateRequest;
use App\Http\Requests\UpdateSertificateRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.certificate.index', [
            'certificates' => Sertificate::all(),
            'no' => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.certificate.create', [
            'products' => Product::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSertificateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'product_id' => 'required',
            'slug' => 'required',
            'image' => 'required',
            'deskripsi' => '',
        ]);

        $file = $request->file('image');
        $folder_tujuan = 'img/sertifikat';
        $filename = time() . '_' . $file->getClientOriginalName();
        $validated['image'] = $file->move($folder_tujuan, $filename);
        
        Sertificate::create($validated);
        return redirect('/dashboard/certificate')->with('success', 'Berhasil menambahkan sertifikat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sertificate  $sertificate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sertificate = Sertificate::find($id);
        return view('dashboard.certificate.show', [
            'certificate' => $sertificate
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sertificate  $sertificate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sertificate = Sertificate::find($id);
        return view('dashboard.certificate.edit', [
            'certificate' => $sertificate,
            'products' => Product::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSertificateRequest  $request
     * @param  \App\Models\Sertificate  $sertificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sertificate = Sertificate::find($id);

        $validated = $request->validate([
            'title' => 'required',
            'product_id' => 'required',
            'slug' => 'required',
            'deskripsi' => '',
        ]);

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $folder_tujuan = 'img/sertifikat';
            $filename = time() . '_' . $file->getClientOriginalName();
            $filepath = $file->move($folder_tujuan, $filename);
            $sertificate->update([
                'image' => $filepath
            ]);
        }

        $sertificate->update([
            'title' => $validated['title'],
            'product_id' => $validated['product_id'],
            'slug' => $validated['slug'],
            'deskripsi' => $validated['deskripsi'],
        ]);

        return redirect('/dashboard/certificate')->with('success', 'Berhasil mengubah sertifikat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sertificate  $sertificate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sertificate = Sertificate::find($id);
        File::delete($sertificate->image);
        $sertificate->delete();
        return redirect('/dashboard/certificate')->with('success', 'Berhasil menghapus sertifikat');
    }
}
