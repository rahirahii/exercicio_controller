<?php

namespace App\Http\Controllers;

use App\Service\CarrosService;
use Illuminate\Http\Request;
use Psr\Http\Message\ResponseInterface;

class CarrosController extends Controller
{
    protected $carrosService;
    
    public function __construct(CarrosService $carrosService)
    {
        $this->carrosService= $carrosService;
    }

    public function store(Request $request)
    {
        $result= $this->carrosService->create($request->all());
        
        return response()->json($result);
    }

    public function index()
    {
        $result=$this->carrosService->getAll();
        
        return response()->json($result);
    }

    public function update(Request $request)
    {
        $result=$this->carrosService->update($request->all());
        return response()->json($result);
    }

}
