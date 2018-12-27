<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\FeatureRequest;
use App\Http\Controllers\Controller;
use App\Services\FeatureService;
use Gate;
use Validator;
use App\Feature;

class FeatureController extends AdminController
{
    private $featureService;

    public function __construct(FeatureService $featureService) {
        parent::__construct();

        $this->featureService = $featureService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('features.list')) {
            abort(403);
        }

        $features = $this->featureService->get([
            'order' => ['id' => 'desc'],
            'paginate' => config('settings.admin_page_items_count')
        ]);

        $this->addTemplateVariable('features', $features);

        $this->template = 'features.index';
        return $this->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::denies('features.create')) {
            abort(403);
        }

        $this->template = 'features.create';
        return $this->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeatureRequest $request)
    {
        if (Gate::denies('features.create')) {
            abort(403);
        }

        $data = $request->except(['_token', '_method']);

        $result = $this->featureService->add($data);

        if (is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }
        
        return redirect(route('admin.features.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        if (Gate::denies('features.update')) {
            abort(403);
        }

        $this->template = 'features.create';
        $this->addTemplateVariable('feature', $feature);

        return $this->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FeatureRequest $request, $id)
    {
        if (Gate::denies('features.update')) {
            abort(403);
        }
        
        $data = $request->except(['_token', '_method']);

        $result = $this->featureService->update($id, $data);

        if (is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }
        
        return redirect(route('admin.features.edit', ['id' => $id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Gate::denies('features.delete')) {
            abort(403);
        }

        $this->featureService->delete($id);

        return redirect(route('admin.features.index'));
    }
}
