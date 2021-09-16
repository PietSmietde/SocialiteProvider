<?php

namespace PietSmiet\SocialiteProvider;

use SocialiteProviders\Manager\SocialiteWasCalled;

class PietSmietExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('pietsmiet', Provider::class);
    }
}
