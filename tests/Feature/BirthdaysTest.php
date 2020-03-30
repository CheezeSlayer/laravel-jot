<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BirthdaysTest extends TestCase
{
    use RefreshDatabase;

    public function contacts_with_birthdays_in_the_current_month_can_be_fetched() {
        $user = factory(User::class)->create();

        $birthdayContacts = factory(Contact::class)->create([
            'user_id' => $user->id,
            'birthday' => now()->subYear(),
        ]);

        $noBirthdayContacts = factory(Contact::class)->create([
            'user_id' => $user->id,
            'birthday' => now()->subMonth(),
        ]);

        $this->get('/api/birthdays')
            ->assertJsonCount(1)
            ->assertJson([
                'data' => [
                    [
                        'data'=> [
                            'contact_id' => $birthdayContacts->id
                        ]
                    ]
                ]
            ]);
    }
}
