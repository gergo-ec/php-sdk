<?php

namespace AddonPayments\Api\Entities\Enums;

use AddonPayments\Api\Entities\Enum;

class PriorAuthenticationMethod extends Enum
{
    const FRICTIONLESS_AUTHENTICATION = 'FRICTIONLESS_AUTHENTICATION';
    const CHALLENGE_OCCURRED = 'CHALLENGE_OCCURRED';
    const AVS_VERIFIED = 'AVS_VERIFIED';
    const OTHER_ISSUER_METHOD = 'OTHER_ISSUER_METHOD';
}
