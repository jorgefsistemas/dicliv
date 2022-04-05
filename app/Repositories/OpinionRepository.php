<?php
namespace  app\Repositories;

use App\Models\opinion;
use App\Repositories\BaseRepository;
class OpinionRepository extends BaseRepository
{

    protected $model;

    public function __construct(opinion $model)
    {
        $this->model = $model;
    }

}
