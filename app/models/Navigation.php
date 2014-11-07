<?php

class Navigation extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'menu';

    public function parent() {

        return $this->hasOne('menu', 'kd_menu', 'kd_parent');

    }

    public function children() {

        return $this->hasMany('menu', 'kd_parent', 'kd_menu');

    }

    public static function tree() {

        return static::with(implode('.', array_fill(0, 100, 'children')))->where('kd_parent', '=', NULL)->get();

    }
}