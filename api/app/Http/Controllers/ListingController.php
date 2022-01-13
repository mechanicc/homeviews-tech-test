<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index()
    {
        return Listing::paginate(10);
    }

    public function show($id)
    {
        return Listing::findOrFail($id);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:listings|string',
            'slug' => 'required|unique:listings|string',
            'address_line_1' => 'required|string',
            'address_town' => 'required|string',
            'address_county' => 'required|string',
            'address_postal_code' => 'required|string',
            'address_country' => 'required|string',
            'cost' => 'required|numeric',
        ]);

        return Listing::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $listing = Listing::findOrFail($id);

        $this->validate($request, [
            'name' => 'unique:listings|string',
            'slug' => 'unique:listings|string',
            'address_line_1' => 'string',
            'address_town' => 'string',
            'address_county' => 'string',
            'address_postal_code' => 'string',
            'address_country' => 'string',
            'cost' => 'numeric',
        ]);

        $listing->update($request->all());

        return $listing;
    }

    public function delete(Request $request, $id)
    {
        $listing = Listing::findOrFail($id);
        $listing->delete();

        return 204;
    }
}
