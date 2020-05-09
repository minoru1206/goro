<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;

class NewsLetter extends Notification
{
    private $view = '';

    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($view)
    {
        $this->view = $view;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
	
        if(!$notifiable->email_accepted) {  // メール受信を拒否している場合

            return [];

        }

        return ['mail'];
	
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // オプトアウトのデータを作成する
        $ticket = new \App\OptOutTicket();
        $ticket->user_id = $notifiable->id;
        $ticket->uuid = Str::uuid();
        $ticket->save();

        return (new MailMessage)
            ->view($this->view, [
                'user' => $notifiable,
                'ticket' => $ticket
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}