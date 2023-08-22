<?php 
    class Home {

        public function home(){
            return $this->view('home',[
                $test="hello world"
            ]);
        }
    }
?>