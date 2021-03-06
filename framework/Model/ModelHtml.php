<?php

class HTML {
    static function a($href, $content, $optional=array()){
        $opt = null;
        foreach ($optional as $key => $val){
            $opt .= " $key='$val'";
        }
        return "<a href='$href'$opt>$content</a>\n";
    }
    static function br($length=1){
        $x=0;
        $br = null;
        while ($x < $length){
            $br .= "<br>\n";
            $x++;
        }
        return $br;
    }
    static function open_div($attributes=array()){
        $att = null;
        foreach ($attributes as $key => $val){
            $att .= " $key='$val'";
        }
        return "<div $att>\n";
    }
    static function p($content, $attributes=array()){
        $att = null;
        foreach ($attributes as $key => $val){
            $att .= " $key='$val'";
        }
        return "<p $att>$content</p>\n";
    }
    static function b($content, $attributes=array()){
        $att = null;
        foreach ($attributes as $key => $val){
            $att .= " $key='$val'";
        }
        return "<b $att>$content</b>\n";
    }
    static function close_div(){
        return "</div>\n";
    }
    static function open_form($action, $method, $name, $attributes=array()){
        $attr = null;
        foreach ($attributes as $key => $val){
            $attr .= " $key='$val'";
        }
        return "<form action='$action' method='$method' name='$name' $attr>\n";
    }
    static function close_form(){
        return "</form>\n";
    }
    static function input($type, $name, $value=null, $attributes=array()){
        $attr = null;
        foreach($attributes as $key => $val){
            $attr .= " $key='$val'";
        }
        return "<input type='$type' name='$name' value='$value'$attr>\n";
    }
    static function label($for, $content, $attributes=array()){
        $attr = null;
        foreach($attributes as $key => $val){
            $attr .= " $key='$val'";
        }
        return "<label for='$for'$attr>$content</label>\n";
    }
    static function button_HTML5($type, $content, $name, $attributes=array()){
        $attr = null;
        foreach($attributes as $key => $val){
            $attr .= " $key='$val'";
        }
        return "<button type='$type' name='$name' $attr>$content</button>\n";
    }
    static function select($name, $options=array()){
        $opt = null;
        foreach($options as $key => $val){
            $opt .= "<option value='$val' name='$val'>$key</option>";
        }
        return "<select name='$name'>
                    $opt
                </select>\n";
    }
    static function selectArray($name, $options=array()){
        $opt = null;
        foreach($options as $option){
            $opt .= "<option value=".$option['estilo_id']." name=".$option['estilo_id'].">".$option['estilo_nombre']."</option>";
        }
        return "<select name='$name'>
                    $opt
                </select>\n";
    }
    static function radio($name, $value, $checked=false, $attributes=array()){
        $attr = null;
        foreach($attributes as $key => $val){
            $attr .= " $key='$val'";
        }
        if ($checked == true){
            $checked = ' checked';
        }else{
            $checked = null;
        }
        return "<input type='radio' name='$name' value='$value'$checked>";
    }
    static function checkbox($name, $value, $checked=false, $attributes=array()){
        $attr = null;
        foreach($attributes as $key => $val){
            $attr .= " $key='$val'";
        }
        if ($checked == true){
            $checked = ' checked';
        }else{
            $checked = null;
        }
        return "<input type='checkbox' name='$name' value='$value'$checked>";
    }
    static function textArea($row, $col, $value, $name, $attributes=array()){
        $attr = null;
        foreach($attributes as $key => $val){
            $attr .= " $key='$val'";
        }
        return "<textarea rows='$row' cols='$col' name='$name' $attr>$value</textarea>";
    }
    static function title($type,$content,$attributes=array())
    {
        $attr = null;
        foreach($attributes as $key => $val){
            $attr .= " $key='$val'";
        }
        switch ($type) {
            case 'h1':
                return "<h1 $attr>$content</h1>";
                break;
            case 'h2':
                return "<h2 $attr>$content</h2>";
                break;
            case 'h3':
                return "<h3 $attr>$content</h3>";
                break;
            case 'h4':
                return "<h4 $attr>$content</h4>";
                break;
            case 'h5':
                return "<h5 $attr>$content</h5>";
                break;
            case 'h6':
                return "<h6 $attr>$content</h6>";
                break;
            default:
                return "<h1 $attr>$content</h1>";
                break;
        }
    }
}