<?php
use App\Setting;

function settings($key){
    return Setting::find($key)->value ?? null;
}
