<?php 
    

class Department extends AppModel {
    
    public $primaryKey = 'id';

    public $useDbConfig = 'default';

    public $useTable = 'department';

    public $name = 'Department';

    public $hasMany = array(
        'Employee' => array(
            'className' => 'Employee',
            'foreignKey' => 'dpt_id'
        )
    );
}
