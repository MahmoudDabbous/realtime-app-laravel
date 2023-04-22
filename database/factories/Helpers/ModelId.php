<?php 
namespace Database\Factories\Helpers;

class ModelId  
{

    /**
     * Gets random model id
     *
     * @param string|HasFactory $model
     */
    public static function get(string $model):int
    {
        $count = $model::count();
        return $count === 0 ? $model::factory(1)->create() : rand(1, $count);
    }
}
