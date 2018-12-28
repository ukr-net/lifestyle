<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use App\Http\Requests\MenuRequest;

class MenuController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('menu.index')) {
            abort(403);
        }

        $menu = $this->menuService->getMenu();
        $this->addTemplateVariable('menu', $menu);

        $this->template = 'menu.index';
        return $this->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::denies('menu.create')) {
            abort(403);
        }

        $menu = $this->menuService->getMenu();
        $this->addTemplateVariable('menu', $menu);

        $this->template = 'menu.create';
        return $this->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        if (Gate::denies('menu.create')) {
            abort(403);
        }

        $data = $request->except(['_token', '_method']);

        $result = $this->menuService->add($data);

        if (is_array($result) && $result['error']) {
            return back()->with($result);
        }

        return redirect(route('admin.menu.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Gate::denies('menu.view')) {
            abort(403);
        }

        $item = $this->menuService->getMenuItem($id);
        
        if ($item->parent) {
            $item->parentMenu = $this->menuService->getMenuItem($item->parent);
        }

        $this->addTemplateVariable('item', $item);

        $this->template = 'menu.show';
        return $this->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::denies('menu.update')) {
            abort(403);
        }

        $item = $this->menuService->getMenuItem($id);
        $menu = $this->menuService->getMenu();

        $this->addTemplateVariable('menu', $menu);
        $this->addTemplateVariable('item', $item);

        $this->template = 'menu.create';
        return $this->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, $id)
    {
        if (Gate::denies('menu.update')) {
            abort(403);
        }

        $data = $request->except(['_token', '_method']);

        $result = $this->menuService->update($id, $data);

        if (is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }
        
        return redirect(route('admin.menu.show', ['id' => $id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Gate::denies('menu.delete')) {
            abort(403);
        }

        $this->menuService->delete($id);

        return redirect(route('admin.menu.index'));
    }
}
