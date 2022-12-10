<?php 
function cheakvalue($input)
{
    if(empty($input))
    {
        return false;
    }
    return true;
}
function ValidEmail($input)
{
    if(!filter_var($input,FILTER_VALIDATE_EMAIL))
    {
        return false;
    }
    return true;
}
function checkless($input,$min)
{
    if(trim(strlen($input<=$min)))
    return false ;
    else 
    return true ;
}
?>