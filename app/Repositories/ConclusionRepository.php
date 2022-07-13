<?php

namespace App\Repositories;

use App\Models\Conclusion;


class ConclusionRepository
{
    protected $Conclusion;
    function __construct(Conclusion $Conclusion)
    {
        $this->Conclusion = $Conclusion;
    }
    function create($attributes)
    {
        return $this->Conclusion->create($attributes);
    }
    function get($id)
    {
        return $this->Conclusion->where('user_id', $id)->get();
    }
}
