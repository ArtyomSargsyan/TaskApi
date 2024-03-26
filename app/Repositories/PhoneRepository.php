<?php

namespace App\Repositories;

use App\Models\Phones;


class PhoneRepository  implements  PhoneRepositoryInterface
{
    public Phones $phone;

    public function __construct(Phones $phone)
    {
        $this->phone = $phone;
    }

    public function getAll()
    {
       return Phones::paginate(10);
    }

    public function store($data)
    {
        Phones::create($data);
    }

    public function edit($id)
    {
        return Phones::find($id);
    }

    public function update($id, $data)
    {
        $phone = Phones::findOrFail($id);

        $phone->update($data);

    }

    public function delete($id)
    {
        $phone = Phones::find($id);

        $phone->delete();
    }
}