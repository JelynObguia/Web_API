<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateseafoodrestoRequest;
use App\Http\Requests\UpdateseafoodrestoRequest;
use App\Repositories\seafoodrestoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class seafoodrestoController extends AppBaseController
{
    /** @var  seafoodrestoRepository */
    private $seafoodrestoRepository;

    public function __construct(seafoodrestoRepository $seafoodrestoRepo)
    {
        $this->seafoodrestoRepository = $seafoodrestoRepo;
    }

    /**
     * Display a listing of the seafoodresto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $seafoodrestos = $this->seafoodrestoRepository->all();

        return view('seafoodrestos.index')
            ->with('seafoodrestos', $seafoodrestos);
    }

    /**
     * Show the form for creating a new seafoodresto.
     *
     * @return Response
     */
    public function create()
    {
        return view('seafoodrestos.create');
    }

    /**
     * Store a newly created seafoodresto in storage.
     *
     * @param CreateseafoodrestoRequest $request
     *
     * @return Response
     */
    public function store(CreateseafoodrestoRequest $request)
    {
        $input = $request->all();

        $seafoodresto = $this->seafoodrestoRepository->create($input);

        Flash::success('Seafoodresto saved successfully.');

        return redirect(route('seafoodrestos.index'));
    }

    /**
     * Display the specified seafoodresto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $seafoodresto = $this->seafoodrestoRepository->find($id);

        if (empty($seafoodresto)) {
            Flash::error('Seafoodresto not found');

            return redirect(route('seafoodrestos.index'));
        }

        return view('seafoodrestos.show')->with('seafoodresto', $seafoodresto);
    }

    /**
     * Show the form for editing the specified seafoodresto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $seafoodresto = $this->seafoodrestoRepository->find($id);

        if (empty($seafoodresto)) {
            Flash::error('Seafoodresto not found');

            return redirect(route('seafoodrestos.index'));
        }

        return view('seafoodrestos.edit')->with('seafoodresto', $seafoodresto);
    }

    /**
     * Update the specified seafoodresto in storage.
     *
     * @param int $id
     * @param UpdateseafoodrestoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateseafoodrestoRequest $request)
    {
        $seafoodresto = $this->seafoodrestoRepository->find($id);

        if (empty($seafoodresto)) {
            Flash::error('Seafoodresto not found');

            return redirect(route('seafoodrestos.index'));
        }

        $seafoodresto = $this->seafoodrestoRepository->update($request->all(), $id);

        Flash::success('Seafoodresto updated successfully.');

        return redirect(route('seafoodrestos.index'));
    }

    /**
     * Remove the specified seafoodresto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $seafoodresto = $this->seafoodrestoRepository->find($id);

        if (empty($seafoodresto)) {
            Flash::error('Seafoodresto not found');

            return redirect(route('seafoodrestos.index'));
        }

        $this->seafoodrestoRepository->delete($id);

        Flash::success('Seafoodresto deleted successfully.');

        return redirect(route('seafoodrestos.index'));
    }
}
