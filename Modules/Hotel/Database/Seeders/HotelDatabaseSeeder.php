<?php

namespace Modules\Hotel\Database\Seeders;
use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class HotelDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();

        // $this->call("OthersTableSeeder");
        $module = strtolower('Hotel');
        $permission_model = config('access.permission');
        $view_permission = new $permission_model();
        $view_permission->name = 'view-'.$module;
        $view_permission->display_name = 'View Hotel';
        $view_permission->sort = \Module::count()+1;
        $view_permission->created_at = Carbon::now();
        $view_permission->updated_at = Carbon::now();
        $view_permission->save();

        $permission_model = config('access.permission');
        $create_permission = new $permission_model();
        $create_permission->name = 'create-'.$module;
        $create_permission->display_name = 'Create Hotel';
        $create_permission->sort = \Module::count()+1;
        $create_permission->created_at = Carbon::now();
        $create_permission->updated_at = Carbon::now();
        $create_permission->save();

        $permission_model = config('access.permission');
        $edit_permission = new $permission_model();
        $edit_permission->name = 'edit-'.$module;
        $edit_permission->display_name = 'Edit Hotel';
        $edit_permission->sort = \Module::count()+1;
        $edit_permission->created_at = Carbon::now();
        $edit_permission->updated_at = Carbon::now();
        $edit_permission->save();

        $permission_model = config('access.permission');
        $delete_permission = new $permission_model();
        $delete_permission->name = 'delete-'.$module;
        $delete_permission->display_name = 'Delete Hotel';
        $delete_permission->sort = \Module::count()+1;
        $delete_permission->created_at = Carbon::now();
        $delete_permission->updated_at = Carbon::now();
        $delete_permission->save();
    }
}
