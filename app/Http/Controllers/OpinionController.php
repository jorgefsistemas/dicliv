<?php

use GuzzleHttp\Client;
namespace App\Http\Controllers;
use App\Models\Opinion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Providers\RouteServiceProvider;
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
        $data = Opinion::orderBy('id', 'DESC')->paginate(10);
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
    public function apiWithoutKey()
    {
        //dd("Llegando a ruta api");

        //$client = new Client(); //GuzzleHttp\Client
        $response = Http::get('https://api.github.com/users/kingsconsult/repos');

        //$url = "https://api.github.com/users/kingsconsult/repos";


        // $response = $client->request('GET', $url, [
        //     'verify'  => false,
        // ]);

        $responseBody = json_decode($response->getBody());

        return view('projects.apiwithoutkey', compact('responseBody'));
    }

    public function apiWithKey()
    {

        //dd("Llegando a apiWithKey");

        //$client = new Client();
        $response = Http::get('https://dev.to/api/articles/me/published');

        //$url = "https://dev.to/api/articles/me/published";

        $params = [
            //If you have any Params Pass here
        ];

        $headers = [
            'api-key' => 'k3Hy5qr73QhXrmHLXhpEh6CQ'
        ];

        // $response = $client->request('GET', $url, [
        //     // 'json' => $params,
        //     'headers' => $headers,
        //     'verify'  => false,
        // ]);

        // $responseBody = json_decode($response->getBody());

        // return view('projects.apiwithkey', compact('responseBody'));
        return view('projects.apiwithkey');


    }
    public function apistore()
    {
    	$response = Http::post('http://jsonplaceholder.typicode.com/posts', [
    				'title' => 'This is test from ItSolutionStuff.com',
    				'body' => 'This is test from ItSolutionStuff.com as body',
    			]);

    	dd($response->successful());
    }
    public function apiindex()
    {
    	// $response = Http::dd()->get('http://jsonplaceholder.typicode.com/posts');
    	$response = Http::get('http://jsonplaceholder.typicode.com/posts');

    	$jsonData = $response->json();

    	echo "<pre> Body:";
    	print_r($response->body());
        echo "<pre> status:";
    	print_r($response->status());
    	echo "<br/> ok:";
    	print_r($response->ok());
        echo "<br/> successful:";
        print_r($response->successful());
        echo "<br/> serverError:";
        print_r($response->serverError());
        echo "<br/> clientError:";
        print_r($response->clientError());
        echo "<br/> headers:";
        print_r($response->headers());
    }
}
