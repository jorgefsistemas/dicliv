<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;

use App\Models\Opinion;
use Illuminate\Http\Request;
use App\Repositories\OpinionRepository;
use App\Http\Requests\StoreOpinionRequest;
use App\Http\Requests\UpdateOpinionRequest;

class OpinionController extends Controller
{
    protected $OpinionRepo;
    public $data;
    public function __construct(OpinionRepository $opinionRepository )
    {
        $this->middleware('auth');
        $this->OpinionRepo = $opinionRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Opinion::orderBy('id', 'ASC')->paginate(10);
        return view('opinion')->with([
            'data'=>$data,
            ]);
    }
    public function opinionindex()
    {
        $data = Opinion::orderBy('id', 'ASC')->paginate(10);
        return view('opinion')->with([
            'data'=>$data,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        dd($request->all());
        // dd("Create de OPinion controller");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOpinionRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreOpinionRequest $request)
    public function store(StoreOpinionRequest $request)

    {
                // dd("Store de Opinion controller");

        //
        $data=$request->all();
        // returndd($data['numberSerie']);
    // dd("Store :",$data);


        Opinion::create([
            'numberSerie' => $data['numberSerie'],
            'originVehicle' =>$data['originVehicle'],
            'curp' => $data['curp'],
            'folioOpinion' => $data['folioOpinion']
        ]);
        // return redirect(RouteServiceProvider::HOME);
        return redirect('/opinion');


    }
        /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOpinionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(StoreOpinionRequest $request)
    {

        //
        dd($request->all());


        Opinion::create([
            'numberSerie' => $this->numberSerie,
            'originVehicle' => $this->originVehicle,
            'curp' => $this->curp,
            'folioOpinion' => $this->folioOpinion
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function show(Opinion $opinion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        // dd("edit");
        $idEdit=Opinion::find($id);
        $data = Opinion::orderBy('id', 'ASC')->paginate(10);
        $updateMode = true;
        $id= $id;

        return view('update')->with([
            'idEdit' =>$idEdit,
            'data'=>$data,
            'updateMode ' =>$updateMode
            ]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateOpinionRequest $request, Opinion $opinion)
    public function update(UpdateOpinionRequest $request,  Opinion  $opinion)

    {
        //


       // dd("update de controller id", $opinion, "request:", $request->all() );

        // dd("update");
        //dd($opinion->id);

       //$result= Opinion->update($request->all());

       Opinion::find($opinion->id)->update($request->all());


        return redirect()->route('opinion.index')
            ->with('success', 'Dictamen actualizado Exitosamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opinion $opinion)
    {
        //
        //dd($opinion);
        $opinion->delete();

        return redirect()->route('opinion.index')
            ->with('success', 'Dictamen eliminado Exitosamente');

    }
}
