<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Role;
use App\Business;
use App\Currencies;
use DataTables;
use View;
use session;
class AppServiceProvider extends ServiceProvider
{
 public function boot(Request $request)
    {

               view()->composer('*', function ($view) 
               {
               $user=Auth::user();
               if($user!="")
               {
               $rolename=Role::where('role_id',$user->role_id)->pluck('role_name')->first(); 
               View::share('rolename',$rolename);
               }
               else
               {
               View::share('rolename',"");
               }
                              if($user!="")
               {
               $rolename=Role::where('role_id',$user->role_id)->pluck('role_name')->first(); 
               View::share('notifictions',$notification);
               }
               else
               {
               View::share('rolename',"");
               }
               if ($user!="")
               {
               $business_id=$user->business_id;
               $business_curruency=Business::where('business_id',$business_id)->pluck
               ('currency_id')->first(); 
               $currency_data=Currencies::where('currency_id',$business_curruency)->first();   
               View::share('currency_data',$currency_data);
               }
               else
               {
               View::share('currency_data',"");
               }


               if ($user!="")
               {
               $business_id=$user->business_id;
               $is_restaurant=Business::where('business_id',$business_id)->pluck
               ('is_restaurant')->first(); 

               View::share('is_restaurant',$is_restaurant);
               }
               else
               {
               View::share('is_restaurant',"");
               }
               

        });
        
}
}