<?php

namespace App\Http\Livewire;


class UserGroupModal extends Modal {
    public $message = '';

    public function render() {
        return view('livewire.user-group-modal');
    }

    public function mount() {
        $this->message = 'Welcome to the reusable modal example';
    }
}
