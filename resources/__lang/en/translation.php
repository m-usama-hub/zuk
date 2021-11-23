<?php

use App\Models\Translation;

return Translation::get()->pluck('trans_key', 'en')->toArray();

// return [

//     'News and Updates' => 'hellow'
// ];