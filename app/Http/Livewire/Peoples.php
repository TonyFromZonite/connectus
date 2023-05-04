<?php

namespace App\Http\Livewire;

use App\Models\Friend;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Peoples extends Component
{
    use WithPagination;

    public $paginate = 10;
    public $search;

    public function addfriend($id)
    {
        $user = User::where("uuid",$id)->first();


        DB::beginTransaction();
        try {
            Friend::create([
                'user_id' => auth()->id(),
                "friend_id" => $user->id,
            ]);
            Notification::create([
                "type" => "friend_request",
                "user_id" => $user->id,
                "message" => auth()->user()->name . " Send you friend request",
                "url" => '#',
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
        $this->dispatchBrowserEvent('toastr:success', [
            'message' => " Friend request send to " . $user->name,
        ]);
    }
    public function removefriend($id)
    {
        $user = User::where("uuid",$id)->first();


        DB::beginTransaction();
        try {
            Friend::where([
                'user_id' => auth()->id(),
                "friend_id" => $user->id,
            ])->first()->delete();
            Notification::create([
                "type" => "friend_request",
                "user_id" => $user->id,
                "message" => auth()->user()->name . " Canceled friend request",
                "url" => '#',
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
        $this->dispatchBrowserEvent('toastr:success', [
            'message' => " Friend request canceled from " . $user->name,
        ]);

    }
    public function render()
    {
        return view('livewire.peoples', [
            "users" => User::whereNotIn('id', [auth()->id()])->where('name', 'LIKE', '%' . $this->search . '%')
                ->inRandomOrder()
                ->paginate($this->paginate, ["id", "uuid", "profile", "name"])
        ]);
    }
}
