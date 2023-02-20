<?php

namespace App\Patterns\Behavioral\Observer;

use SplSubject;

class OnboardingNotification implements \SplObserver
{
    private string $adminEmail;

    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function update(SplSubject $subject, string $event = null, ?array $data = null): void
    {
        // mail($this->adminEmail,
        //     "Требуется регистрация",
        //     "У нас новый пользователь. Вот его информация: " .json_encode($data));

        echo "OnboardingNotification: уведомление отправлено по электронной почте $this->adminEmail!\n";
    }
}
