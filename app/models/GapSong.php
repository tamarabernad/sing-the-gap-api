<?php
	
	class GapSong extends \Illuminate\Database\Eloquent\Model
	{

        protected $table = 'gap_songs';
        protected $primaryKey = 'id';
        public $timestamps = false;
        protected $softDelete = false;
        protected $guarded = array('*');
        protected $hidden = array('coordinate');
	
	}