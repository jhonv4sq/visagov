<?php

if (! function_exists('active')) {
    function active($paths)
    {   
        if(!is_array($paths)){
            $array = array_slice(explode('/', $paths), 3);
            $route = implode('/', $array);
            
            return request()->is($route) ? 'active' : '';
        }

        foreach($paths as $path){
            $array = array_slice(explode('/', $path), 3);
            $route = implode('/', $array);

            if(request()->is($route)){
                return 'active';
            }
        }

    }
}