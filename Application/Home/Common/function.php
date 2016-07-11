<?php

//获取当前分类名
function catename($id){
    $name=M('category')->where(array('id'=>$id))->getField('name');
    return $name;
}

?>