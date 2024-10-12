<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSiteRequest;
use App\Http\Requests\UpdateSiteRequest;
use App\Models\Site;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function home()
    {
        $windowTitle = env('APP_NAME');
        $pageTitle = 'Digibook';
        return view('home', [
            "windowTitle" => $windowTitle,
            "pageTitle" => $pageTitle
        ]);

    }

    public function about()
    {
        $windowTitle =  "Sobre Nós - " .  env('APP_NAME');
        $pageTitle = 'Sobre Nós';
        return view('about', [
            "windowTitle" => $windowTitle,
            "pageTitle" => $pageTitle
        ]);
    }
    public function services()
    {
        $windowTitle =  "Nossos Serviços - " .  env('APP_NAME');
        $pageTitle = 'Nossos Serviços';
        return view('services', [
            "windowTitle" => $windowTitle,
            "pageTitle" => $pageTitle
        ]);
    }
    public function contact()
    {
        $windowTitle =  "Entre em Contato! - " .  env('APP_NAME');
        $pageTitle = 'Entre em Contato!';
        return view('contact', [
            "windowTitle" => $windowTitle,
            "pageTitle" => $pageTitle
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSiteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiteRequest $request, Site $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Site $site)
    {
        //
    }
}
