<?php

namespace App\Http\Controllers\Common;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class PublishController extends Controller
{
    protected array $allowedModels = [
        'menuTypes' => \App\Models\MenuType::class,
        'menus'  => \App\Models\Menu::class,
    ];

    public function publish(string $model, int $id)
    {
        $record = $this->resolveModel($model, $id);
        $record->publish();

        return back()->with('status', 'Published successfully.');
    }

    public function unpublish(string $model, int $id)
    {
        $record = $this->resolveModel($model, $id);
        $record->unpublish();

        return back()->with('status', 'Unpublished successfully.');
    }

    protected function resolveModel(string $model, int $id)
    {
        abort_unless(isset($this->allowedModels[$model]), 403);

        $modelClass = $this->allowedModels[$model];
        $record = $modelClass::findOrFail($id);

        abort_unless(
            method_exists($record, 'publish') &&
            method_exists($record, 'unpublish'),
            403
        );

        return $record;
    }
}
