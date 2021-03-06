<?php
namespace Ocean\Rbac;

use Ocean\Rbac\Contracts\RbacRoleInterface;
use Ocean\Rbac\Traits\RbacRole as RbacRoleTraits;
use think\Model;

class RbacRole extends Model implements RbacRoleInterface
{
    use RbacRoleTraits;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('entrust.roles_table');
    }

}
