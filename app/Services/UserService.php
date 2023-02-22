<?php namespace App\Services;

use App\Services\Contracts\UserInterface as UserInterface;
use App\Models\User as UserModel;
use App\Models\Rol as RolModel;

class UserService implements UserInterface {
  
  protected $user;
  protected $profile;
  
  public function __construct(UserModel $userModel,
  RolModel $profileModel)
  {
    $this->user = $userModel;
    $this->profile = $profileModel;
  }
  
  public function all($columns = array('*'), $relation = [])
  {
    return $this->user->get($columns);
  }
  
  public function paginate($perPage = 15, $columns = array('*'), $order_type = 'desc')
  {
    return $this->user->with(['rol', 'tienda'])
      ->where(function ($q) use ($columns){
        if (isset($columns['fullname']) && $columns['fullname'] !== '') {
          $q->where('fullname','like', '%'.$columns['fullname'].'%');
        }
        if (isset($columns['dni']) && $columns['dni'] !== '') {
          $q->where('dni','like', '%'.$columns['dni'].'%');
        }
        if (isset($columns['sede_id']) && $columns['sede_id'] !== '') {
          $q->where('rol_id', $columns['sede_id']);
        }
      })
      ->orderBy('id', $order_type)->paginate($perPage);
  }
  
  public function create(array $data)
  {
    $newUser = $this->user->create($data);
    return $newUser;
  }
  
  public function update(array $data, $id)
  {
    $userGot = $this->user->find($id);
    $userGot->update($data);
    
    return $userGot;
  }
  
  public function delete($id)
  {
    return $this->user->destroy($id);
  }
  
  public function find($id, $columns = array('*'))
  {
    return $this->user->find($id, $columns);
  }
  
  public function findBy($field, $value, $columns = array('*'))
  {
    return $this->user->where($field, '=', $value)->first($columns);
  }
  
  public function search($searching, $columns = array('*'))
  {
    // TODO: Impselement search() method.
  }

  public function getProfiles($columns = array('*'))
  {
    return $this->profile->get(['id', 'name']);
  }
  
}