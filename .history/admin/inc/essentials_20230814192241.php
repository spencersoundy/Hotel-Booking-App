<?php 

    function alert($type,$msg){
        echo <<<alert
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>$</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        alert;
    }


?>