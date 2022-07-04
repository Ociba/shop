<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserType;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_types = ["Admin","Accomodation","Shop","Produce"];
    
            for($i=0; $i < count($user_types); $i++){
               $type = new UserType();
                if(UserType::where("id",$i)->exists()){
                    $type->id = $i+1;
                }
                else{
                   $type->id = $i;
                } 
                $type->type=$user_types[$i];
                $type->save();
            }
    }
}
