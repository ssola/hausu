<?php namespace Hausu\Business\Models;

class User extends Elegant implements \Illuminate\Auth\UserInterface
{
	protected $table = 'users';

    protected $guarded = [
        'id'
    ];

    protected $rules = [
        'firstname' => 'required|min:5|max:40',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:5|max:25'
    ];

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}