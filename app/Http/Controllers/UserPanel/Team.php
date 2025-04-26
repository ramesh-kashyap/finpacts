<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reentry;
use App\Models\Contract;
use App\Models\Income;
use App\Models\Withdraw;
use App\Models\Investment;
use Illuminate\Support\Facades\DB;
use Auth;
use Log;
use Session;
use Redirect;
use Hash;
use Validator;

class Team extends Controller
{


  

    public function index(Request $request)
    {
      $user=Auth::user();
      $my_level_team = $this->my_level_team_count($user->id);

      $limit = $request->limit ?? 7;
      $selected_level = $request->selected_level ?? 1;
      $search = $request->search ?? null;
  
      $gen_team = $my_level_team[$selected_level] ?? [];
  
      end($my_level_team);
      $max_length = key($my_level_team);
  
      if ($selected_level) {
          Session::put('selected_level', $selected_level);
      }
  
      $notesQuery = User::where(function ($query) use ($gen_team) {
          if (!empty($gen_team)) {
              $query->whereIn('id', $gen_team);
          } else {
              $query->whereNull('id');
          }
      })->orderByDesc('id');
  
      if (!empty($search) && $request->reset != "Reset") {
          $notesQuery->where(function ($q) use ($search) {
              $q->where('name', 'LIKE', "%{$search}%")
                ->orWhere('username', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%")
                ->orWhere('phone', 'LIKE', "%{$search}%")
                ->orWhere('jdate', 'LIKE', "%{$search}%")
                ->orWhere('active_status', 'LIKE', "%{$search}%");
          });
      }
  
      $notes = $notesQuery->paginate($limit)->appends([
          'limit' => $limit
      ]);
  
      // Active and Inactive Users Count per Level (1,2,3)
      $activeInactiveStats = [];
  
      foreach ([1, 2, 3] as $level) {
          $teamIds = $my_level_team[$level] ?? [];
  
          $activeCount = User::whereIn('id', $teamIds)
                          ->where('active_status', 'Active')
                          ->count();
  
          $inactiveCount = User::whereIn('id', $teamIds)
                          ->where('active_status', 'Pending')
                          ->count();
  
          $activeInactiveStats[$level] = [
              'active' => $activeCount,
              'inactive' => $inactiveCount,
          ];
      }
  
      $this->data['direct_team'] = $notes;
      $this->data['search'] = $search;
      $this->data['max_length'] = $max_length;
      $this->data['activeInactiveStats'] = $activeInactiveStats; // ✅

      // dd($this->data);

    $this->data['page'] = 'user.team.direct-team';
    return $this->dashboard_layout();

    }

    public function LevelTeam(Request $request)
    {
        $user = Auth::user();
        $ids = $this->my_level_team($user->id);
    
        $notes = User::when(!empty($ids), function ($query) use ($ids) {
                $query->whereIn('id', $ids);
            }, function ($query) {
                $query->whereNull('id'); // ensure no records if $ids is empty
            })
            ->orderByDesc('id')
            ->get();
    
        $this->data['totalTeam'] = $notes->count();
        $this->data['teamEarning'] = Income::where('user_id', $user->id)
                                    ->where('remarks', 'Level Income')
                                    ->sum('comm');
    
        $this->data['team1Income'] = Income::where('user_id', $user->id)
                                    ->where('level', 1)
                                    ->where('remarks', 'Team Income')
                                    ->sum('comm');
    
        $this->data['team2Income'] = Income::where('user_id', $user->id)
                                    ->where('level', 2)
                                    ->where('remarks', 'Team Income')
                                    ->sum('comm');
    
        $this->data['team3Income'] = Income::where('user_id', $user->id)
                                    ->where('level', 3)
                                    ->where('remarks', 'Team Income')
                                    ->sum('comm');
    
        $this->data['level_income'] = Income::where('user_id', $user->id)
                                    ->where('remarks', 'Team Income')
                                    ->orderByDesc('id')
                                    ->paginate(10);
    
        $this->data['page'] = 'user.team.level-team';
    
        return $this->dashboard_layout();
    }
    
    
        public function leftteam(Request $request)
    {  
      $user=Auth::user();
      // print_r($user->username);die();
      $ids=$this->team_by_position($user->id,'Left');
       
        $limit = $request->limit ? $request->limit : 10;
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            // $notes = User::where('sponsor',$user->username);
          $notes = User::whereIn('id',$ids);
        if($search <> null && $request->reset!="Reset"){
          $notes = $notes->where(function($q) use($search){
            $q->orWhere('name', 'LIKE', '%' . $search . '%')          
            ->orWhere('username', 'LIKE', '%' . $search . '%')
            ->orWhere('email', 'LIKE', '%' . $search . '%')
            ->orWhere('phone', 'LIKE', '%' . $search . '%')
            ->orWhere('jdate', 'LIKE', '%' . $search . '%')
            ->orWhere('active_status', 'LIKE', '%' . $search . '%');
          });
      
        }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
       
          $this->data['direct_team'] =$notes;
          $this->data['search'] =$search;
          $this->data['page'] = 'user.team.left-team';
          return $this->dashboard_layout();

    }



    public  function team_by_position($userid,$position){
      $ret=array();
      $get_position_user=User::where('Parentid',$userid)->where('position',$position)->first();
      if($get_position_user){
      
          $ret=$this->my_binary($get_position_user->id);
          $ret[]=$get_position_user->id;
      }
     
      return $ret;
  }



    public  function my_binary($userid){
      $arrin=array($userid);
      $ret=array();
      // print_r($arrin);die();
      while(!empty($arrin)){
       $alldown= User::select('id')->whereIn('Parentid',$arrin)->get()->toArray();
       if(!empty($alldown)){
              $arrin = array_column($alldown,'id');
              $ret[]=$arrin;
            
            
          }else{
              $arrin = array();
          } 
      }
      // continue;    
      $final = array();         
      if(!empty($ret)){
          array_walk_recursive($ret, function($item, $key) use (&$final){
              $final[] = $item;
          });
      }

      return $final;
      
  }  



  public function find_users($snode,$pos) {
    // $this->load->model('Dashboard_model');
  $user_just_downline = User::where('Parentid',$snode)->where('position',$pos)->first();
       return $user_just_downline;
}



  public function genealogy(Request $request)
  {
     $user=Auth::user();
      $tuser=$request->user_id;
      if($tuser==NULL){
     $suser = @$request->suser;
      if($suser==""){
      $username = $user->username;
      }
      else{
          $session_id = $user->id;
          $username = $suser;
           $user_id=User::where('username',$username)->first();
       if($user_id->id>$session_id)
       {
        $username= $suser;  
       }
       else
       {
         $username = $user->username;   
       }
      }
     }
     else{
         $username = $tuser;
        }

         $check=User::where('username',$username)->count();;
          if($check>0)
          {
             $username = $username;  
          }
          else
          {
           $username = $user->username;    
          }
   
    $complete_tree = array();
    $pool='users';
    $user_id=User::where('username',$username)->first();
    $user_id=@$user_id->id;
    $mydata =User::where('id',$user_id)->first(); 
    if ($user_id!="")
    {
    $childs_1 =   $this->find_users(@$user_id,'Left');  
    $childs_2 =   $this->find_users(@$user_id,'Right');  
     
     if (!empty($childs_1))
      {
     $childs_3 =   $this->find_users(@$childs_1->id,'Left');  
     $childs_4 =   $this->find_users(@$childs_1->id,'Right'); 
      } 
       else
      {
      $childs_3=array();
      $childs_4=array();
      }

      if (!empty($childs_2))
      {
     $childs_5 =   $this->find_users(@$childs_2->id,'Left');  
     $childs_6 =   $this->find_users(@$childs_2->id,'Right'); 
      }
      else
      {
      $childs_5=array();
      $childs_6=array();
      }

    }

  $this->data['childs_1'] =$childs_1;
  $this->data['childs_2'] =$childs_2;
  $this->data['childs_3'] =$childs_3;
  $this->data['childs_4'] =$childs_4;
  $this->data['childs_5'] =$childs_5;
  $this->data['childs_6'] =$childs_6;
  $this->data['mydata'] =$mydata;
  $this->data['page'] = 'user.team.tree-view';
  return $this->dashboard_layout();


  }



    public function rightteam(Request $request)
    {  
      $user=Auth::user();
      // print_r($user->username);die();
      $ids=$this->team_by_position($user->id,'Right');
       
        $limit = $request->limit ? $request->limit : 10;
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            // $notes = User::where('sponsor',$user->username);
          $notes = User::whereIn('id',$ids);
        if($search <> null && $request->reset!="Reset"){
          $notes = $notes->where(function($q) use($search){
            $q->orWhere('name', 'LIKE', '%' . $search . '%')          
            ->orWhere('username', 'LIKE', '%' . $search . '%')
            ->orWhere('email', 'LIKE', '%' . $search . '%')
            ->orWhere('phone', 'LIKE', '%' . $search . '%')
            ->orWhere('jdate', 'LIKE', '%' . $search . '%')
            ->orWhere('active_status', 'LIKE', '%' . $search . '%');
          });
      
        }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
       
          $this->data['direct_team'] =$notes;
          $this->data['search'] =$search;
          $this->data['page'] = 'user.team.right-team';
          return $this->dashboard_layout();

    }





    public function my_level_team_count($userid,$level=3){
        $arrin=array($userid);
        $ret=array();

        $i=1;
        while(!empty($arrin)){
            $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();
            if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[$i]=$arrin;
                $i++;

                if ($i>$level) {
                  break;
                 }

            }else{
                $arrin = array();
            }
        }

        // $final = array();
        // if(!empty($ret)){
        //     array_walk_recursive($ret, function($item, $key) use (&$final){
        //         $final[] = $item;
        //     });
        // }


        return $ret;

    }



    public function my_level_team($userid,$level=3){
      $arrin=array($userid);
      $ret=array();

      $i=1;
      while(!empty($arrin)){
          $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();
          if(!empty($alldown)){
              $arrin = array_column($alldown,'id');
              $ret[$i]=$arrin;
              $i++;

              if ($i>$level) {
               break;
              }


          }else{
              $arrin = array();
          }
      }

      $final = array();
      if(!empty($ret)){
          array_walk_recursive($ret, function($item, $key) use (&$final){
              $final[] = $item;
          });
      }


      return $final;

  }


}
