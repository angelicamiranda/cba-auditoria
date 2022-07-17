<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Carlos';
        $user->email = 'carlos@gmail.com';
        $user->password = bcrypt('12345'); 
        $user->save(); 
    
        $user = new User();
        $user->name = 'Rister';
        $user->email = 'rister@gmail.com';
        $user->password = bcrypt('12345');
        $user->save(); 


        $user = new User();
        $user->name = 'Eliot';
        $user->email = 'eliot@gmail.com';
        $user->password = bcrypt('12345'); 
        $user->save(); 
 
        $user = new User();
        $user->name = 'Angélica';
        $user->email = 'angelicamirandau@gmail.com';
        $user->password = bcrypt('Miranda123'); 
        $user->save(); 
        

        $user = new User();
        $user->name = 'Alvaro';
        $user->email = 'alvaro@gmail.com';
        $user->password = bcrypt('12345'); 
        $user->save(); 
   
    }
}
//https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/usuario%2FPhotoGrid_1568399833200.jpg?alt=media&token=d8753c3b-bc41-4beb-a6f8-d7b89e960053