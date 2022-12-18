<?php

namespace App\Policies\admin;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAdmin(Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode($admin->permissions);
        $indix = array_search('admin',array_column($permissions,'0')) ;
        return ($permissions[$indix]->v ? true : false);
    }
    public function addAdmin(Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode(auth()->guard('admin')->user()->permissions);
        $indix = array_search('admin',array_column($permissions,'0')) ;
        return ($permissions[$indix]->a ? true : false);
    }
    public function updateAdmin( Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode(auth()->guard('admin')->user()->permissions);
        $indix = array_search('admin',array_column($permissions,'0')) ;
        return ($permissions[$indix]->u ? true : false);
    }
    public function deleteAdmin( Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode(auth()->guard('admin')->user()->permissions);
        $indix = array_search('admin',array_column($permissions,'0')) ;
        return ($permissions[$indix]->d ? true : false);
    }

    public function viewCategory(Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode($admin->permissions);
        $indix = array_search('category',array_column($permissions,'0')) ;
        return ($permissions[$indix]->v ? true : false);
    }
    public function addCategory(Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode(auth()->guard('admin')->user()->permissions);
        $indix = array_search('category',array_column($permissions,'0')) ;
        return ($permissions[$indix]->a ? true : false);
    }
    public function updateCategory( Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode(auth()->guard('admin')->user()->permissions);
        $indix = array_search('category',array_column($permissions,'0')) ;
        return ($permissions[$indix]->u ? true : false);
    }
    public function deleteCategory( Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode(auth()->guard('admin')->user()->permissions);
        $indix = array_search('category',array_column($permissions,'0')) ;
        return ($permissions[$indix]->d ? true : false);
    }

    public function viewSeller(Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode($admin->permissions);
        $indix = array_search('seller',array_column($permissions,'0')) ;
        return ($permissions[$indix]->v ? true : false);
    }
    public function addSeller(Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode(auth()->guard('admin')->user()->permissions);
        $indix = array_search('seller',array_column($permissions,'0')) ;
        return ($permissions[$indix]->a ? true : false);
    }
    public function updateSeller( Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode(auth()->guard('admin')->user()->permissions);
        $indix = array_search('seller',array_column($permissions,'0')) ;
        return ($permissions[$indix]->u ? true : false);
    }
    public function deleteSeller( Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode(auth()->guard('admin')->user()->permissions);
        $indix = array_search('seller',array_column($permissions,'0')) ;
        return ($permissions[$indix]->d ? true : false);
    }

    public function viewProduct(Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode($admin->permissions);
        $indix = array_search('product',array_column($permissions,'0')) ;
        return ($permissions[$indix]->v ? true : false);
    }
    public function addProduct(Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode(auth()->guard('admin')->user()->permissions);
        $indix = array_search('product',array_column($permissions,'0')) ;
        return ($permissions[$indix]->a ? true : false);
    }
    public function updateProduct( Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode(auth()->guard('admin')->user()->permissions);
        $indix = array_search('product',array_column($permissions,'0')) ;
        return ($permissions[$indix]->u ? true : false);
    }
    public function deleteProduct( Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode(auth()->guard('admin')->user()->permissions);
        $indix = array_search('product',array_column($permissions,'0')) ;
        return ($permissions[$indix]->d ? true : false);
    }

    public function viewOrder(Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode($admin->permissions);
        $indix = array_search('order',array_column($permissions,'0')) ;
        return ($permissions[$indix]->v ? true : false);
    }
    public function updateOrder(Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode(auth()->guard('admin')->user()->permissions);
        $indix = array_search('order',array_column($permissions,'0')) ;
        return ($permissions[$indix]->u ? true : false);
    }

    public function viewCurrencie(Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode($admin->permissions);
        $indix = array_search('currencie',array_column($permissions,'0')) ;
        return ($permissions[$indix]->v ? true : false);
    }
    public function updateCurrencie(Admin $admin)
    {
        if($admin->owner ){ return true;}
        $permissions = json_decode(auth()->guard('admin')->user()->permissions);
        $indix = array_search('currencie',array_column($permissions,'0')) ;
        return ($permissions[$indix]->u ? true : false);
    }

}
