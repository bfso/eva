<?php

namespace App;

class Model
{
      /**
       * The table associated with the model.
       *
       * @var string
       */
      protected $table;

      /**
       * The primary key for the model.
       *
       * @var string
       */
      protected $primaryKey = 'id';

      /**
       * The "type" of the auto-incrementing ID.
       *
       * @var string
       */
      protected $keyType = 'int';

      /**
       * Indicates if the IDs are auto-incrementing.
       *
       * @var bool
       */
      public $incrementing = true;

      /**
       * The relations to eager load on every query.
       *
       * @var array
       */
      protected $with = [];

      /**
       * The relationship counts that should be eager loaded on every query.
       *
       * @var array
       */
      protected $withCount = [];

      /**
       * The number of models to return for pagination.
       *
       * @var int
       */
      protected $perPage = 15;

      /**
       * Indicates if the model exists.
       *
       * @var bool
       */
      public $exists = false;

      /**
       * Indicates if the model was inserted during the current request lifecycle.
       *
       * @var bool
       */
      public $wasRecentlyCreated = false;

      /**
       * The connection resolver instance.
       *
       * @var \Illuminate\Database\ConnectionResolverInterface
       */
      protected static $resolver;

      /**
       * The event dispatcher instance.
       *
       * @var \Illuminate\Contracts\Events\Dispatcher
       */
      protected static $dispatcher;

      /**
       * The array of booted models.
       *
       * @var array
       */
      protected static $booted = [];

      /**
       * The array of global scopes on the model.
       *
       * @var array
       */
      protected static $globalScopes = [];

      /**
       * The list of models classes that should not be affected with touch.
       *
       * @var array
       */
      protected static $ignoreOnTouch = [];

      /**
       * The name of the "created at" column.
       *
       * @var string
       */
      const CREATED_AT = 'created_at';

      /**
       * The name of the "updated at" column.
       *
       * @var string
       */
      const UPDATED_AT = 'updated_at';

      public function where($keyName, $key)
      {
            $this->where = ['key_name' => $keyName, 'key' => $key];
            return $this;
      }

      public function get()
      {
            if($this->where == null){
                  return $this->rows;
            }
            $result = null;
            foreach ($this->rows as $key => $row){
                  if($key == $this->where['key']){
                        $result[] = $row;
                  }
            }
            return $result;
      }
}