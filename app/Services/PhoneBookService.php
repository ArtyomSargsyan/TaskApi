<?php

namespace App\Services;
use App\Repositories\PhoneRepository;
use App\Models\Phones;

class PhoneBookService
{

    public PhoneRepository $phoneRepository;

    /**
     * @param PhoneRepository $phoneRepository
     */
    public function __construct(PhoneRepository $phoneRepository)
    {
        $this->phoneRepository = $phoneRepository;
    }

    public function getAll()
    {
        return $this->phoneRepository->getAll();
    }

    public function stroe($data)
    {
        $this->phoneRepository->store($data);
        
    }

    public function edit($id)
    {
       return $this->phoneRepository->edit($id);
    }

    public function update($id, $data)
    {
        return $this->phoneRepository->update($id, $data);
    }

    public function delete($id)
    {
        $this->phoneRepository->delete($id);
    }
}
