<?php

namespace App\Enums;

use MyCLabs\Enum\Enum;

abstract class ContentTypes extends Enum {
    const XML = "application/xml";
    const JSON = "application/json";
    const CSV = "text/csv";
    const VND = "application/vnd.api+json";
    const LD = "application/ld+json";

}