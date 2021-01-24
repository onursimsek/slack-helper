<?php

namespace SlackHelper;

use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\Support\Facades\Notification;

class SlackHelper
{
    /**
     * @var string
     */
    private $channel;

    /**
     * @var AnonymousNotifiable
     */
    private $notifier;

    public function __construct(array $configs)
    {
        $this->channel = $configs['default_channel'];

        $this->notifier = Notification::route('slack', $configs['slack_webhook_url']);
    }

    public function to(string $channel): SlackHelper
    {
        $this->channel = $channel;

        return $this;
    }

    public function message(string $message): void
    {
        $this->notifier->notify(new SlackNotification(['to' => $this->channel, 'message' => $message]));
    }
}
