<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use ValidateRequests;

class AuthForm extends Component
{
        public $email,$password;
        public $returnUrl;

        public function mount(){
            $this->returnUrl = request()->returnUrl;
        }

        public function loginhandler(){
            // dd($this->email,$this->password);
            // $this->validate([
            //     'email'=>'required|email|exists:users,email',
            //     'password'=>'required|min:5'
            // ],[
            //     'email.required'=>'Veillez entrer votre adresse email',
            //     'email.email'=>'Adresse email invalide',
            //     'email.exists'=>'Cette email n\'est enregistré ',
            //     'password.required'=>'Veillez entrer votre mot de passe'
            // ]);

            $creds = array('email'=>$this->email,'password'=>$this->password);

            if(Auth::guard('web')->attempt($creds)){
                $checkUser = User::where('email',$this->email)->first();
                    if($checkUser->status != 1){
                        Auth::guard('web')->logout();
                        return redirect()->route('login')->with('error','Votre compte a été bloqué');
                    }elseif($checkUser->role_id == 1 && $this->returnUrl == null){
                        return redirect()->route('admin.dashboard');

                    }elseif($checkUser->role_id == 2 && $this->returnUrl == null){
                        return redirect()->route('agent.dashboard');

                    }else{
                        return redirect()->to($this->returnUrl);
                    }
                }

            else{
                session()->flash('error','Email ou Mot de passe Incorrect');
            }
        }

        public function logout(){
            Auth::guard('web')->logout();
            return redirect()->route('login');
        }
    public function render()
    {
        return view('livewire.auth-form');
    }
}
