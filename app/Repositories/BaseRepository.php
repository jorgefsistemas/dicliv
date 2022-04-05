<?php

namespace app\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Event;




abstract class BaseRepository
{
    //abstract public function getModel();
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function find($id, $relations = '')
    {
        if (!empty($relations)) return $this->model::with($relations)->find(decrypt($id));
        else return $this->model->find(decrypt($id));
    }
    public function findFolio($folioToSearch)
    {
        $folio = $this->model::where('folio', $folioToSearch)->exists();
        return ($folio);
    }
    public function findSubject($subjectToSearch)
    {
        $subject = $this->model::where('subject', $subjectToSearch)->exists();
        return ($subject);
    }
    public function findResponsable($responsableToSearch)
    {
        $responsable = $this->model::where('responsable', $responsableToSearch)->exists();
        return ($responsable);
    }
    public function findDeadline($deadlineToSearch)
    {
        $deadline = $this->model::where('deadline', $deadlineToSearch)->first();
        return ($deadline);
    }
    public function findObservations($observationsToFind)
    {
        $observations = $this->model::where('observations', $observationsToFind)->exists();
        return ($observations);
    }

    public function getAll($relations = '')
    {
        if (!empty($relations)) {
            return $this->model->with($relations)->get();
        } else {
            return $this->model->get();
        }
    }


    public function create($data)
    {
        try {
            $object = $this->model->create($data);
            return $object;
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => "No se puede guardar el registro. {$e->getMessage()} ",
            ], 500);
        }
    }

    public function update($id, $data)
    {
        $object = $this->model->find(decrypt($id));
        $object->update($data);
        return $object;
    }


    public function show($id, $relations = '')
    {
        if (!empty($relations)) return $this->model::with($relations)->find(decrypt($id));
        else return $this->model->find(decrypt($id));
    }

    public function delete($id)
    {
        $registry = $this->model->find(decrypt($id));

        return $registry->delete();
    }

    public function paginate($id)
    {
        return $this->model->paginate($id);
    }
}
