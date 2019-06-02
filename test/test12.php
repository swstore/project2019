<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.1.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body>


 <br>
<?php

$arr_topup = array(
    100,200,500,1000
);
$default_value = '';
$initial_value = NULL;
?>
<form id="myform1" name="form1" method="post" action="" class="needs-validation2" novalidate>

<div class="form-group row">
    <div class="col">
        <div class="btn-group-toggle row mx-1"  data-toggle="buttons">
          <?php
          if(isset($arr_topup)){ // BEGIN CHECK
              foreach($arr_topup as $key_topup=>$value_topup){ // BEGIN LOOP
                    $active_state = (isset($default_value) && $default_value==$value_topup)?" btn-info active":"btn-light";
                    $check_state = (isset($default_value) && $default_value==$value_topup)?" checked":"";
                    if(isset($default_value) && $default_value==$value_topup && is_null($initial_value)){
                        $initial_value = true;
                    }
          ?>
          <label class="btn btn-sm col-4 mt-2 shadow-sm btn-c-topup <?=$active_state?>">
            <input type="radio" name="topup" id="topup_<?=$key_topup?>" autocomplete="off"
            value="<?=$value_topup?>" required <?=$check_state?>> <?=number_format($value_topup,0)?>
          </label>
          <?php
              } // END LOOP
          } // END CHECK
          ?>
        </div>

<div class="form-group row">
    <div class="col col-sm-4 offset-sm-3 text-right pt-3">
         <button type="submit" name="btn_submit" id="btn_submit" value="1" class="btn btn-primary btn-block py-2">เติมเงิน</button>
    </div>
</div>
</form>

 </div>

<script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
<script src="https://unpkg.com/bootstrap@4.1.0/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
function validCheckbox(obj,target_obj){
    setTimeout(function(){
        var check_val = $(obj).parent(".btn-group-toggle").find(":checkbox:checked").length;
        check_val = (check_val>0)?1:'';
        $("#"+target_obj).val(check_val);
    },100);
}
function validRadio(obj,target_obj){
    var check_val = $(obj).parent(".btn-group-toggle").find(":radio:checked").length;
    $("#"+target_obj).val(check_val);
}
$(function(){

    $(".btn_accept").click(function(){
            var obj = $(this);
            var check_status = obj.find(":checkbox:checked").length;
            var state_active = "btn-info";
            var state_inactive = "btn-light";
            obj.toggleClass(state_active+' '+state_inactive);
            obj.find("i").toggleClass("far fas fa-square fa-check-square");
    });

    $(".btn-c-language").on("click",function(){
        var obj = $(this);
        validCheckbox(obj[0],'_language')
        var check_status = obj.find(":checkbox:checked").length;
        var state_active = "btn-danger";
        var state_inactive = "btn-light";
        obj.toggleClass(state_active+' '+state_inactive);
        obj.find("i").toggleClass("far fas fa-square fa-check-square");
    });

    $(".btn-c-topup").on("click",function(){
        var obj = $(this);
        validRadio(obj[0],'_topup')
        var check_status = obj.find(":radio:checked").length;
        var state_active = "btn-info";
        var state_inactive = "btn-light";
        if(check_status==0){
            obj.addClass(state_active).removeClass(state_inactive);
            obj.siblings("label."+state_active).addClass(state_inactive).removeClass(state_active);
        }
    });

     $("#myform1").on("submit",function(){
         var form = $(this)[0];
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
     });
});
</script>
</body>
</html>
