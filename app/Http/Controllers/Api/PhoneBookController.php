<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\PhoneBookRequest;
use App\Services\PhoneBookService;
use Illuminate\Http\Request;


class PhoneBookController extends Controller
{
    private PhoneBookService $service;

    public function __construct(PhoneBookService $service) {

        $this->service = $service;
    }

    public function index()
    {
      $data =  $this->service->getAll();

      return response()->json($data);
    }

    public function store(PhoneBookRequest $request)
    {
          
        $res = $this->service->stroe($request->all());
        return response()->json();
    }

    public function edit($id)
    {
        return $this->service->edit($id);
    }

    public function update(PhoneBookRequest $request, $id)
    {
        $this->service->update($id,  $request->all());

       return response()->json(['message' => 'Phone updated successfully'], 200);
    }

    public function destroy($id)
    {
       $this->service->delete($id);

       return response()->json(['message' => 'Phone delete successfully'], 200);
    }
}
