<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSiteSettingsRequest;
use App\Http\Requests\UpdateSiteSettingsRequest;
use App\Models\SiteSettings;

class SiteSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreSiteSettingsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SiteSettings $siteSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiteSettings $siteSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiteSettingsRequest $request, SiteSettings $siteSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteSettings $siteSettings)
    {
        //
    }
}
