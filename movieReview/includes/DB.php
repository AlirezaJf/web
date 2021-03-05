<?php
if (! class_exists('DB')) {
    class DB{
        var $dbc;
        function __construct()
        {
            $this -> connect();
            $this -> selectDB();
            $this -> dbc -> set_charset(CHARSET);
        }
        function connect()
        {
            $this->dbc = new mysqli(DBHOST, DBUSER, DBPASS);
            if ($this->dbc->connect_error) {
                $error = "خطا در اتصال به دیتابیس
                          <section lang='en'>
                          {$this -> dbc -> connect_error}
                          </section>";
                die($error);
            }
        }
        function selectDB(){
            $this ->dbc -> select_db(DBNAME);
            if ($this -> dbc -> error){
                $error = "خطا در انتخاب دیتابیس
                           <section lang='en'>
                          {$this -> dbc -> error}
                          </section>";
                die($error);
            }
        }
        function execute($sql){
            $result = $this -> dbc -> query($sql);
            if ($this -> dbc -> error){
                $error = "خطا در اجرای کوئری
                            <section lang='en'>
                            {$sql}<br>
                            {$this -> dbc -> error}
                            </section>";
                die($error);
            }else
                return true;
        }
        function __destruct(){
            $this -> dbc -> close();
        }
    }
}
