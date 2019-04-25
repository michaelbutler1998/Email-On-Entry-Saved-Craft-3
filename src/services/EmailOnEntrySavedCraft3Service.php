<?php

namespace michaelbutler\emailonentrysavedcraft3\services;

use michaelbutler\emailonentrysavedcraft3\EmailOnEntrySavedCraft3;

use Craft;
use craft\base\Component;

use craft\elements\Entry;
use craft\elements\Asset;

use craft\web\twig\variables\Sections;
use craft\elements\Category;

/**
 * emailonentrysavedcraft3 Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
**/

class EmailOnEntrySavedCraft3Service extends Component
{
    public function sendMail(string $html, string $subject, $mail): bool
    {
        $mailer = Craft::$app->getMailer();
        
        return Craft::$app
            ->getMailer()
            ->compose()
            ->setTo($mail)
            ->setSubject($subject)
            ->setHtmlBody($html)
            ->send();
    }
}
