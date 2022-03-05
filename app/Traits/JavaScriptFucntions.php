<?php


/**
 * Collection of javascript functions to run in php code
 */
trait JavaScriptFunctions
{
    /**
     * show alert message in a box
     */
    public function messageBox($message)
    {
        echo "<script>alert('$message')</script>";
    }

    /**
     * open $window on the current window
     */
    public function openWindowSelf($window)
    {
        echo "<script>window.open('$window' , '_self')</script>";
    }

    /**
     * open $window in a separate window
     */
    public function openWindowBlank($window)
    {
        echo "<script>window.open('$window' , '_blank')</script>";
    }

    /**
     * open $window with ?id on the current window
     */
    public function openWindowSelfId($window, $id)
    {
        echo "<script>window.open('$window?id=$id' , '_self')</script>";
    }

    
    /**
     * open $window with ?code on the current window
     */
    public function openWindowSelfCode($window, $code)
    {
        echo "<script>window.open('$window?code=$code' , '_self')</script>";
    }

    
    /**
     * open $window with ?id in a separate window
     */
    public function openWindowBlankId($window, $id)
    {
        echo "<script>window.open('$window?id=$id' , '_blank')</script>";
    }

    
    /**
     * open $window with ?code in a separate window
     */
    public function openWindowBlankCode($window, $code)
    {
        echo "<script>window.open('$window?code=$code' , '_blank')</script>";
    }

    /**
     * save $value in the local storage in the key $key
     * $key => $value
     */
    public function setLocalStorage($key , $value){
        echo "<script>if(localStorage) {localStorage.setItem('$key' , '$value');}</script>";
    }
    
    /**
     * clear $key from the local storage
     */
    public function clearLocalStorage($key){
        echo "<script>if(localStorage){localStorage.clear('$key');}</script>";
    }

    /**
     * run a specific javascript action
     */
    public function doScript($script){
        echo "<script>$script</script>";
    }
}
