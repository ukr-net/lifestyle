<?php

namespace App\Policies;
use App\User;

class FeaturePolicy extends SitePolicy
{
    protected $permissions = [
        'create' => 'FEATURES_ADD',
        'update' => 'FEATURES_UPDATE',
        'delete' => 'FEATURES_DELETE',
        'index' => 'FEATURES_INDEX'
    ];
}
