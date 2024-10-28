<?php
namespace App\Support;
use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;
class CustomPolicy extends Basic
{
    public function configure()
    {
        parent::configure();
        $this->addDirective(Directive::CONNECT, [
            'self', 
        ]);
        $this->addDirective(Directive::STYLE, 'www.fonts.googleapis.com');
        $this->addDirective(Directive::SCRIPT, 'www.jsdelivr.net');
        $this->addDirective(Directive::SCRIPT, 'www.cloudflare.com');
    }
}