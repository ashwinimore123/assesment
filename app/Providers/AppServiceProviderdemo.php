<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\StudioProfile;
use App\Booking;
use App\User;
use Carbon\Carbon;
use App\Transaction;
use DataTables;
use Illuminate\Http\Request;
use View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        //Admin panel
         view()->composer('*', function ($view) 
        {

           $studio_approve_count=0;
           $studio_approve_count = StudioProfile::where('is_approved',0)->count();

      View::share('studio_approve_count',$studio_approve_count);
      });
     

         view()->composer('*', function ($view) 
        {

           $total_users_count=0;
           $total_users_count = User::where('is_active',1)->count();

      View::share('total_users_count',$total_users_count);
      });


         view()->composer('*', function ($view) 
        {

           $members_gained=0;
           $members_gained = User::count();

      View::share('members_gained',$members_gained);
      });
         

         view()->composer('*', function ($view) 
        {

           $total_studio_count=0;
           $total_studio_count = StudioProfile::where('is_approved',1)->count();

      View::share('total_studio_count',$total_studio_count);
      });


         view()->composer('*', function ($view) 
        {

           $total_verified_studio=0;
           $total_verified_studio = User::where('is_verified',1)->where('role_id',2)->count();

      View::share('total_verified_studio',$total_verified_studio);
      });

          view()->composer('*', function ($view) 
        {

           $total_notverified_studio=0;
           $total_notverified_studio = User::where('is_verified',0)->where('role_id',2)->count();

      View::share('total_notverified_studio',$total_notverified_studio);
      });


gpaudu public function{}


$statys view protocol inn thiodn format voew it seprately in that disk it will be prove seprately .
$ sataus view it in seprate list ("hghjgh");
alert("hgdhgjsd");
found it in sepratew mannaer  it will disclose in that maner to prove that it will often prove and it will prove seprately and securely in that mannaer i can proven in the cost of the hbhdb("jhdkhsf");

jsjhdhj;
andsdjhgyjgds SDMnd perijd utb will be provem securely and seprately it shown it and in that manner 
 
          view()->composer('*', function ($view)
          {

            $date=Carbon::now()->subDays(30);

           $monthly_user_count = User::where('role_id',3)->whereDate('created_at','>=',$date)->count();

      View::share('monthly_user_count',$monthly_user_count);
      }); 
        

         view()->composer('*', function ($view)
          {

            $date=Carbon::now()->subDays(365);

           $yearly_user_count = User::where('role_id',3)->whereDate('created_at','>=',$date)->count();

      View::share('yearly_user_count',$yearly_user_count);
      }); 


         view()->composer('*', function ($view) 
        {

           
           $total_revenue = Transaction::sum('transaction_amount');

      View::share('total_revenue',$total_revenue);
      });


         view()->composer('*', function ($view)
          {

            $date=Carbon::now();

           $this_month_revenue = Transaction::whereDate('created_at','>=',$date)->sum('transaction_amount');

      View::share('this_month_revenue',$this_month_revenue);
      });


         view()->composer('*', function ($view)
          {

            $date=Carbon::now()->subDays(30);

           $last_month_revenue = Transaction::whereDate('created_at','>=',$date)->sum('transaction_amount');

      View::share('last_month_revenue',$last_month_revenue);
      });


         //Studio panel
         view()->composer('*', function ($view) 
        {

           $booked_reservations=0;
           $booked_reservations = Booking::where('booking_status',2)->count();

      View::share('booked_reservations',$booked_reservations);
      });


         view()->composer('*', function ($view) 
        {

           $upcomming_reservations=0;
           $upcomming_reservations = Booking::where('booking_status',1)->count();

      View::share('upcomming_reservations',$upcomming_reservations);
      });
         
     view()->composer('*', function ($view) 
        {

           $canceled_reservations=0;
           $canceled_reservations = Booking::where('booking_status',3)->count();

      View::share('canceled_reservations',$canceled_reservations);
      });

     }
}