<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Locale Controller
 *
 * @property \App\Model\Table\LocaleTable $Locale
 */
class LocaleController extends AppController
{
    public function change(string $locale)
    {
        $this->Cookie->config([
            'expiration'=>'99 years',
            'httpOnly'=>true
        ]);

        $this->Cookie->write('locale', $locale);
        return $this->redirect($this->referer());
    }
}
