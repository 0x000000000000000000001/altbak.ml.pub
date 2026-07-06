<?php

$Test_FileOps_writeFileSync = function($path, $content = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Test_FileOps_writeFileSync;
            return $Test_FileOps_writeFileSync(...array_merge($__args, $more));
        };
    }
    return function() use ($path, $content) {
        file_put_contents($path, $content);
    };
};

$Test_FileOps_readFileSync = function($path) {
    return function() use ($path) {
        return file_get_contents($path);
    };
};

$Test_FileOps_loopE = function($n, $action = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Test_FileOps_loopE;
            return $Test_FileOps_loopE(...array_merge($__args, $more));
        };
    }
    return function() use ($n, $action) {
        for ($i = 0; $i < $n; $i++) {
            $action();
        }
    };
};
